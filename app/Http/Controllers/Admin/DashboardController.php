<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Models\User;
use App\Models\Sport;
use App\Models\Battle;
use App\Models\School;
use App\Models\Session;
use App\Models\SessionTeamScore;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\TextPart;
use Symfony\Component\Mime\Part\HtmlPart;


class DashboardController extends Controller
{
    public function dashboard(): View
    {$sessionTeamScores = SessionTeamScore::get();
        return view('admin.dashboard',[
            'battle' => Battle::count(),
            'session' => Session::count(),
            'user' => User::count(),
            'team' => Team::count(),
            'battles' => Battle::whereIn('id', $sessionTeamScores->pluck('battle_id'))->with(['byTeam.sessionTeam.sessionTeamScore','forTeam.sessionTeam.sessionTeamScore'])->latest()->get(),



        ]);
    }
    // Inside a controller method or any other context where you want to send the email
    // Inside your controller or any other context where you want to send the email
// Inside your controller or any other context where you want to send the email


// Inside your controller or any other context where you want to send the email


// Inside your controller or any other context where you want to send the email
public function sendDemoEmail()
{
    $recipientEmail = 'aliazeemkhan76@gmail.com';

    Mail::send([], [], function ($message) use ($recipientEmail) {
        $message->to($recipientEmail)
                ->subject('This is a test email')
                ->setBody('Hello! This is a test email from Laravel.', 'text/html');
    });
}





}
