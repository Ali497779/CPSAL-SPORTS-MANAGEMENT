<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Player;
use App\Models\Sport;
use App\Models\SportAttributeValue;
use App\Models\Team;
use App\Services\TeamService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(): View
    {
        $teams = Team::with(['sport', 'players'])->latest()->paginate(10);

        return view('admin.team.list', [
            'teams' => $teams,
        ]);
    }

    public function create(): View
    {
        $coach_ids = Team::pluck('coach_id');

        return view('admin.team.create', [
            'sports' => Sport::orderBy('name')->get(),
        ]);
    }

    public function store(TeamRequest $request, TeamService $service): RedirectResponse
    {
        $service->store($request);

        return to_route('admin.teams.index')->with('message', 'Team created successfully');
    }

    public function show(Team $team): View
    {
        return view('admin.team.show', [
            'team' => $team->load(['sport', 'coach.school', 'players']),
        ]);
    }

    public function edit(Team $team): View
    {
        return view('admin.team.edit', [
            'team' => $team->load(['sport', 'players']),
            'sports' => Sport::orderBy('name')->get(),
        ]);
    }

    public function update(TeamRequest $request, Team $team, TeamService $service): RedirectResponse
    {
        $service->update($team, $request);

        return to_route('admin.teams.index')->with('message', 'Team updated successfully');
    }

    public function destroy(Team $team): RedirectResponse
    {
        Storage::disk('public')->delete($team->image);
        $team->delete();

        return back()->with('message', 'Team deleted successfully');
    }


}
