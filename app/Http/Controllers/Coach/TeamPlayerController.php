<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamPlayerRequest;
use App\Models\Player;
use App\Models\Sport;
use App\Models\SportAttributeValue;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamPlayerController extends Controller
{
    public function create($teamId)
    {
        $sport_id = Team::where('id', $teamId)->pluck('sport_id')->first();
        $sport = Sport::where('id', $sport_id)->with('attributes')->first();

        return view('coach.team.players.create', [
            'sport' => $sport,
        ]);
    }

    public function store(TeamPlayerRequest $request)
    {
        foreach ($request->names as $name) {
            $player = Player::create([
                'team_id' => $request->teamId,
                'name' => $name['name'],
            ]);
            if (isset($name['attributes'])) {
                foreach ($name['attributes'] as $key => $value) {
                    SportAttributeValue::create([
                        'sport_attribute_id' => $key,
                        'player_id' => $player->id,
                        'value' => $value,
                    ]);
                }
            }
        }

        return to_route('coach.teams.index')->with('message', 'Players created successfully');
    }

    public function show($teamId)
    {
        $players = Player::where('team_id', $teamId)->with('sportAttributeValues.sportAttribute')->get();

        return view('coach.team.players.show', [
            'players' => $players,
        ]);
    }

    public function edit($teamId,$playerId)
    {
        $player = Player::where('id', $playerId)->with('sportAttributeValues.sportAttribute')->first();

        return view('coach.team.players.edit', [
            'player' => $player,
        ]);
    }

    public function update(Request $request, $teamId, $playerId)
    {
        $request->validate([
            'name' => 'required',
            'attributes.*' => 'required',
        ]);
        Player::where('id', $playerId)->update([
            'name' => $request->name,
        ]);
        if (isset($name['attributes'])) {
            foreach ($request['attributes'] as $key => $value) {
                SportAttributeValue::where('id', $key)->update([
                    'value' => $value,
                ]);
            }
        }

        return to_route('coach.teams.players.show', $teamId)->with('message', 'Player updated successfully');
    }
}
