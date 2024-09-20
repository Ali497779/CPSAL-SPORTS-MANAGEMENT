<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SessionRequest;
use App\Models\Session;
use App\Models\SessionTeam;
use App\Models\Sport;
use App\Models\Team;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(): View
    {
        return view('admin.session.list', [
            'sessions' => Session::with(['sport.teams', 'sessionTeams.team'])->latest()->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('admin.session.create', [
            'sports' => Sport::orderBy('name')->get(),
        ]);
    }

    public function store(SessionRequest $request): RedirectResponse
    {

        Session::create($request->validated());

        return to_route('admin.sessions.index')->with('message', 'Session created successfully');
    }

    public function show(Session $session): View
    {
        return view('admin.session.show', [
            'session' => $session->load(['sport', 'battles']),
            'sessions' => SessionTeam::with('team', 'session.sport')->where('session_id', $session->id)->get(),
        ]);
    }

    public function edit(Session $session): View
    {
        return view('admin.session.edit', [
            'session' => $session,
            'sports' => Sport::orderBy('name')->get(),
        ]);
    }

    public function update(SessionRequest $request, Session $session): RedirectResponse
    {
        $session->update($request->validated());

        return to_route('admin.sessions.index')->with('message', 'Session updated successfully');
    }

    public function destroy(Session $session): RedirectResponse
    {
        $session->delete();

        return back()->with('message', 'Session deleted successfully');
    }

}
