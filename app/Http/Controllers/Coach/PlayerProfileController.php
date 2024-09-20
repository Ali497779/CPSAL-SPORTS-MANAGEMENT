<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionTeamScore;
use App\Models\SessionTeamPlayer;

class PlayerProfileController extends Controller
{
    public function index($playerId){
        return view('player.view', [
            'SessionTeamPlayer' => SessionTeamPlayer::where('player_id',$playerId)->with('player.playerscore')->get(),
        ]);
    }
}
