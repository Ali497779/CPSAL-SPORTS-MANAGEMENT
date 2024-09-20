<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Models\Sport;
use App\Models\Player;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\SportAttributeValue;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class TeamPlayerController extends Controller
{
    public function create($teamId): View
    {
        $sport_id = Team::where('id', $teamId)->pluck('sport_id')->first();
        $sport = Sport::where('id', $sport_id)->with('attributes')->first();

        return view('admin.team.players.create', [
            'sport' => $sport,
        ]);
    }

    public function store(Request $request, $teamid): RedirectResponse
    {
       
        $request->validate([
            'names.*.name' => 'required',
            'names.*.attributes.*' => 'required',
        ]);    
        foreach ($request->names as $name) {
            $file = ($name['image']);
        $extension = ($file)->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture =$name['image']->move(public_path('assets/player'), $filename);
            $player = Player::create([
                'team_id' => $teamid,
                'name' => $name['name'],
                'image'=> $filename,      
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

        return to_route('admin.teams.index')->with('message', 'Players created successfully');
    }

    public function show($teamId): View
    {
        $players = Player::where('team_id', $teamId)->with('sportAttributeValues.sportAttribute')->get();

        return view('admin.team.players.show', [
            'players' => $players,
        ]);
    }

    public function edit($teamId,$playerId): View
    {
        $player = Player::where('id', $playerId)->with('sportAttributeValues.sportAttribute')->first();

        return view('admin.team.players.edit', [
            'player' => $player,
        ]);
    }

    public function update(Request $request, $playerId, $teamId): RedirectResponse
    {
        $file = $request['image'];
        $extension = ($file)->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture =$request['image']->move(public_path('assets/player'), $filename);
        $request->validate([
            'name' => 'required',
            'attributes.*' => 'required',
        ]);
        Player::where('id', $playerId)->update([
            'name' => $request->name,
            'image'=>$filename,
        ]);
        if (isset($name['attributes'])) {
            foreach ($request['attributes'] as $key => $value) {
                SportAttributeValue::where('id', $key)->update([
                    'value' => $value,
                ]);
            }
        }

        return to_route('admin.teams.players.show', $teamId)->with('message', 'Player updated successfully');
    }


    public function destroy(Player $player): RedirectResponse
    {
        Storage::disk('public')->delete($player->image);
        $player->delete();

        return back()->with('message', 'Player deleted successfully');
    }
}