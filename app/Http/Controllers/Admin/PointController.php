<?php

namespace App\Http\Controllers\Admin;

use App\Models\Session;
use App\Models\PlayerScore;
use App\Models\SessionTeam;
use Illuminate\Http\Request;
use App\Models\SessionTeamScore;
use App\Models\SessionTeamPlayer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PointController extends Controller
{
    public function index()
    {
        // $sessionplayer = SessionTeamPlayer::get()->pluck('player_id');
        $session_id = Session::get()->pluck('id');
        $sport_id = Session::get()->pluck('sport_id');

        $sessionTeamId = SessionTeamPlayer::pluck('session_team_id')->toArray();
        // dd($sessionplayer);
        return view('admin.point.index', [
            'sessions' => SessionTeamScore::with(['battle.session','SessionTeam.team'])
                            ->select(['battle_id','session_team_id'])
                            ->selectRaw('SUM(CASE WHEN is_win = 1 THEN 1 ELSE 0 END) as total_wins')
                            ->selectRaw('SUM(CASE WHEN is_win = 0 THEN 1 ELSE 0 END) as total_losses')
                            ->selectRaw('SUM(points) as total_points')
                            ->groupBy(['battle_id','session_team_id'])
                            ->get(),

            'sport' => Sport::where('id',$sport_id)->get(),
            // 'sessionTeamPlayers' => PlayerScore::with('player')->selectRaw('SUM(score) as totalscore')->where(['player_id',$sessionplayer])->get(),
           

           'sessionTeamPlayers' => PlayerScore::with('player.team.sport')
                ->whereIn('team_id', $sessionTeamId)
                ->selectRaw('player_id, SUM(score) as totalscore')
                ->groupBy('player_id')
                ->orderByDesc('totalscore')
                ->limit(5)
                ->get(),


                'matchplayed' => DB::table('player_scores')
                ->select('player_id', DB::raw('COUNT(*) as totalmatch'))
                ->groupBy('player_id')
                ->get(),

                'win' => DB::table('session_team_scores')
            ->join('session_team_players', 'session_team_scores.session_team_id', '=', 'session_team_players.session_team_id')
            ->select('session_team_players.player_id', DB::raw('SUM(CASE WHEN session_team_scores.is_win = 1 THEN 1 ELSE 0 END) as win_count'))
            ->groupBy('session_team_players.player_id')
            ->get()
        ]);
    }
}
