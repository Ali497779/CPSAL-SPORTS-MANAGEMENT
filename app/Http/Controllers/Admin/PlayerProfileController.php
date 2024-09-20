<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SessionTeamScore;
use App\Models\SessionTeamPlayer;
use App\Http\Controllers\Controller;


class PlayerProfileController extends Controller
{
    public function index($playerId){
        return view('player.view', [
            'SessionTeamPlayer' => SessionTeamPlayer::where('player_id',$playerId)->with(['player.playerscore.battle.session','player.team','player.sportAttributeValues.sportAttribute'])->get(),
        ]);
    }
}
