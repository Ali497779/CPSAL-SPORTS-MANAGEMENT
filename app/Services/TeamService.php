<?php

namespace App\Services;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamService
{
    public function store($request): void
    { 
        
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->image->move(public_path('assets/team'), $filename);

        // $image = $request->image->store('teams', 'public');
        $team = Team::create($request->except('image') + ['image' => $filename]);


        
    
       

        // foreach($request->players as $player)
        // {
        //     Player::create([
        //         'name' => $player,
        //         'team_id' => $team->id
        //     ]);
        // }
    }

    public function update($team, $request): void
    {


        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
        $picture = $request->image->move(public_path('assets/team'), $filename);


        $image = $team->image;
        if ($request->image) {
            Storage::disk('public', 'teams')->delete($filename);
            // $image = $request->image->store('teams', 'public');
        }
        $team->update($request->except('image') + ['image' => $filename]);
        // foreach($request->players as $key => $player)
        // {
        //     $team->players[$key]->update([
        //         'name' => $player,
        //     ]);
        // }

    }
}
