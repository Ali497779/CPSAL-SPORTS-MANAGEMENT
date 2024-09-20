<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BattleRequest;
use App\Models\Battle;
use App\Models\PlayerScore;
use App\Models\Session;
use App\Models\SessionTeam;
use App\Models\Team;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class BattleController extends Controller
{
    public function index(): View
    {
        return view('admin.battle.list', [
            'battles' => Battle::with(['byTeam', 'forTeam','sessionTeamScore','session'])->latest()->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('admin.battle.create', [
            'sessions' => Session::orderBy('name')->get(),
        ]);
    }

    public function store(BattleRequest $request): RedirectResponse
    {
       
            Battle::create($request->validated());
       
        

        return to_route('admin.battles.index')->with('message', 'Battle created successfully');
    }

    public function show(Battle $battle): View
    {
        return view('admin.battle.show', [
            'time' => $battle->battle_time,
            'battle' => $battle->load(['byTeam', 'forTeam','sessionTeamScore']),

        ]);
    }

    public function edit(Battle $battle): View
    {
        return view('admin.battle.edit', [
            'battle' => $battle,
            'sessions' => Session::orderBy('name')->get(),
            'teams' => Team::orderBy('name')->get(),
        ]);
    }

    public function update(BattleRequest $request, Battle $battle): RedirectResponse
    {
        $battle->update($request->validated()+['postponed'=>0]);

        return to_route('admin.battles.index')->with('message', 'Battle updated successfully');
    }

    public function destroy(Battle $battle): RedirectResponse
    {
        $battle->delete();

        return back()->with('message', 'Battle deleted successfully');
    }

    public function getByTeams(Request $request): JsonResponse
    {
        $teams = SessionTeam::where('session_id', $request->sport_id)->get(['team_id']);
        $teams = Team::whereIn('id', $teams)->get();

        return response()->json([
            'teams' => $teams,
        ]);
    }

    public function getForTeams(Request $request): JsonResponse
    {
        $teams = SessionTeam::where('session_id', $request->sport_id)->get(['team_id']);
        $teams = Team::whereIn('id', $teams)->where('id', '!=', $request->team_id)->get();

        return response()->json([
            'teams' => $teams,

        ]);
    }

    public function postpone(Battle $battle): RedirectResponse
    {
        $battle->update([
            'postponed' => 1,
        ]);

        return back()->with('message', 'Match Postponed Successfully');
    }

    public function viewscore(Battle $battle): View
    {
        return view('admin.battle.score', [
            'time' => $battle->battle_time,
            'battle' => $battle->load(['byTeam.players', 'forTeam.players.playerscore', 'score', 'session']),
            'playerScore' => PlayerScore::where('battle_id', $battle->id)->with('player')->get(),
        ]);
    }
}
