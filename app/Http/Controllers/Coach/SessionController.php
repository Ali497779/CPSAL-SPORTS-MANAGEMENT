<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Models\SessionTeam;
use App\Models\SessionTeamPlayer;
use App\Models\Team;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(): View
    {
        $team_ids = Team::where('coach_id', auth()->id())->get()->pluck('id');

        return view('coach.session.list', [
            'sessionTeams' => SessionTeam::whereIn('team_id', $team_ids)->with(['team', 'session.sport'])->paginate(10),
        ]);
    }

    public function addPlayers($teamId,$sportId,$sessionId): View
    {
        return view('coach.session.player.add', [
            'sessionteams' => SessionTeam::with(['team.sport', 'team.players', 'session'])->where('session_id',$sessionId)->where('team_id',$teamId)->get(),
        ]);
    }
    public function newPlayers($sessionTeamId,$sportId,$sessionId): View
    {
        $playerIds = SessionTeamPlayer::pluck('player_id')->toArray();
         $totalplayers = SessionTeam::withCount(['sessionTeamPlayers'])->find($sessionTeamId);
        
        return view('coach.session.player.add', [
            'sessionteams' => SessionTeam::with(['team.sport', 'session','team.players' => function ($query) use($playerIds) {
                $query->whereNotIn('id', $playerIds);
            }])
            ->where('session_id', $sessionId)
            ->where('id', $sessionTeamId)
            ->get(),
            'totalplayers' => $totalplayers,
        
        ]);
        

    }

    public function storePlayers(Request $request, $sessionTeamId): RedirectResponse
    {
        foreach ($request->player_ids as $player) {
            SessionTeamPlayer::create([
                'session_team_id' => $sessionTeamId,
                'player_id' => $player,
            ]);
        }

        return to_route('coach.sessions.index')->with('message', 'Players added successfully');
    }

    public function showPlayers($sessionTeamId): View
    {
        // dd($sessionTeamId);
        return view('coach.session.player.show', [
            'sessionTeam' => SessionTeam::with(['session', 'team.sport', 'sessionTeamPlayers.player'])->where('team_id',$sessionTeamId)->first(),
        ]);
    }

    
    public function deletePlayer(SessionTeamPlayer $playerId): RedirectResponse
    {
        $playerId->delete();

        return back()->with('message', 'Player remove successfully');
    }
}
