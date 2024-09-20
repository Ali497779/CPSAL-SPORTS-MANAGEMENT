<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Sport;
use App\Models\Team;
use App\Services\TeamService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(): View
    {
        return view('coach.team.list', [
            'teams' => Team::where('coach_id', auth()->id())->with(['sport', 'players'])->latest()->paginate(10),
        ]);
    }

    public function create(): View
    {
        $team_ids = Team::where('coach_id', auth()->id())->pluck('sport_id');

        return view('coach.team.create', [
            'sports' => Sport::orderBy('name')->get(),
        ]);
    }

    public function store(TeamRequest $request, TeamService $service): RedirectResponse
    {
        $service->store($request);

        return to_route('coach.teams.index')->with('message', 'Team created successfully');
    }

    public function show(Team $team): View
    {
        return view('coach.team.show', [
            'team' => $team->load(['sport', 'coach.school', 'players']),
        ]);
    }

    public function edit(Team $team): View
    {
        return view('coach.team.edit', [
            'team' => $team->load(['sport']),
            'sports' => Sport::orderBy('name')->get(),
        ]);
    }

    public function update(TeamRequest $request, Team $team, TeamService $service): RedirectResponse
    {
        $service->update($team, $request);

        return to_route('coach.teams.index')->with('message', 'Team updated successfully');
    }

    public function destroy(Team $team): RedirectResponse
    {
        Storage::disk('public')->delete($team->image);
        $team->delete();

        return back()->with('message', 'Team deleted successfully');
    }
}
