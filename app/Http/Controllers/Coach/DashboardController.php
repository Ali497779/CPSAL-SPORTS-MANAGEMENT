<?php

namespace App\Http\Controllers\Coach;

use App\Models\Team;
use App\Models\Battle;
use App\Models\School;
use App\Models\Session;
use App\Models\PlayerScore;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(): View
    {
        return view('coach.dashboard', [
            'teams' => Team::where('coach_id', auth()->id())->with('sport')->latest()->paginate(10),
            'schools' => School::where('coach_id', auth()->id())->get(),
            'battles' => Battle::with(['byTeam', 'forTeam', 'session.sport'])->get(),
            'sessions' => Session::with('sport','sessionTeams.team')->get(),
            'topPlayers' => PlayerScore::with(['player', 'team.sport'])->select('player_id', 'team_id' , DB::raw('SUM(score) as total_score'))->groupBy('player_id', 'team_id')->orderBy('total_score', 'desc')->take(5)->get()
        ]);
    }
}
