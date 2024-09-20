<?php

namespace App\Http\Controllers\Coach;

use App\Models\Team;
use App\Models\Battle;
use App\Models\PlayerScore;
use App\Models\SessionTeamScore;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class BattleController extends Controller
{
    public function index(): View
    {
        $team_ids = Team::where('coach_id', auth()->id())->pluck('id');

        return view('battle.list', [
            'battles' => Battle::whereIn('by_team_id', $team_ids)->orWhereIn('for_team_id', $team_ids)->with(['byTeam', 'forTeam','sessionTeamScore'])->latest()->paginate(10),
        ]);
    }

    public function show(Battle $battle): View
    {
        return view('battle.show', [
            'battle' => $battle->load(['byTeam', 'forTeam', 'session']),

        ]);
    }

    public function creatematchteam(Battle $battle): View
    {
        return view('battle.addteam', [
            'battle' => $battle->load(['byTeam', 'forTeam', 'session', 'players']),

        ]);
    }

    public function viewscore(Battle $battle): View
    {
        // dd($battle);
        return view('battle.score', [
            'time' => $battle->battle_time,
            'playerScore'=>Playerscore::where('battle_id',$battle->id)->with('player')->get(),
            'sessionTeamScores' => SessionTeamScore::where('battle_id',$battle->id)->with('SessionTeam.team','SessionTeam.playerScores.player','battle')->get(),
        ]);
    }
}

// 'battle' => $battle->load(['byTeam.players', 'forTeam.players.playerscore', 'score', 'session']),
            // 'playerScore' => Playerscore::where('battle_id', $battle->id)->with('player')->get(),
