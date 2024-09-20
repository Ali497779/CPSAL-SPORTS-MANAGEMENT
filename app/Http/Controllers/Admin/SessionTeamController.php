<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Models\Session;
use Illuminate\View\View;
use App\Models\SessionTeam;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class SessionTeamController extends Controller
{
    public function create($sessionId, $sportId): View
    {
        $team_ids = SessionTeam::where('session_id', $sessionId)->get(['team_id']);

        return view('admin.session.team.create', [
            'teams' => Team::whereNotIn('id', $team_ids)->Where('sport_id', $sportId)->orderBy('name')->get(),
        ]);
    }

    public function store(Request $request, $sessionId): RedirectResponse
    {
        foreach ($request->team_id as $team) {
            SessionTeam::create([
                'team_id' => $team,
                'session_id' => $sessionId,
            ]);
            $coachID = Team::where(['id'=> $team])->get();
            $sessionName = Session::where(['id'=> $sessionId])->get();
            
            $data = [
                "url"=> '/coach/sessions/add-players/'.$sessionId,
                "message" => 'You team has been added on '.$sessionName[0]->name,
            ];
            Notification::create([
                'type' => 'Message',
                'notifiable_type' => 'Alert',
                'notifiable_id' => $coachID[0]->coach_id,
                'data' => '{"url":"/coach/sessions/add-players/'.$team.'/'.$coachID[0]->sport_id.'/'.$sessionId.'","message":"You team has been added on '.$sessionName[0]->name.'"}'
            ]);

        }

        return to_route('admin.sessions.index')->with('message', 'Session teams created successfully');
    }
}
