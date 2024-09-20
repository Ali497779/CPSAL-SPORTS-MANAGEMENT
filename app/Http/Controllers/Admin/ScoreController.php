<?php

namespace App\Http\Controllers\Admin;

use App\Models\Score;
use App\Models\Battle;
use App\Models\Session;
use Illuminate\View\View;
use App\Models\Playerscore;
use App\Models\SessionTeam;
use Illuminate\Http\Request;
use App\Models\SessionTeamScore;
use App\Http\Requests\ScoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ScoreController extends Controller
{
    public function create(Battle $battle,$sessionId): View
    {
        return view('admin.score.create', [
            'battle' => $battle->load(['byTeam.sessionTeam.sessionTeamPlayers.player', 'forTeam.sessionTeam.sessionTeamPlayers.player']),

        ]);
    }

    public function store(Request $request, $battleId, $sessionId): RedirectResponse
    {
        // dd($request->teams[1]);
        if($request->teams[1]['team_id'] == null){
            // foreach ($request->teams[0] as $key => $team) {
                $sessionTeamId = SessionTeam::where('team_id',$request->teams[0]['team_id'])->pluck('id')->first();
                $teamScore = $request->teams[0]['score'];
                $teamPoints = 0;
    
                $sessionTeam = SessionTeamScore::create([
                    'session_team_id' => $sessionTeamId,
                    'battle_id' => $battleId,
                    'is_win' => 1,
                    'score' => $teamScore,
                    'points' => 0,
                    $teamPoints += 2
                ]);
            // }
            SessionTeamScore::find($sessionTeam->id)
                ->update(['points' => $teamPoints]);

            foreach ($request->teams[0]['players'] as $playerId => $playerScore) {
                PlayerScore::create([
                    'session_team_id' => $sessionTeamId,
                    'team_id' => $request->teams[0]['team_id'],
                    'battle_id' => $battleId,
                    'player_id' => $playerId,
                    'score' => $playerScore,
                ]);
            }
        }
        else{
           foreach ($request->teams as $key => $team) {
            $sessionTeamId = SessionTeam::where('team_id',$team['team_id'])->pluck('id')->first();
            $teamScore = $team['score'];
            $teamPoints = 0;

            $sessionTeam = SessionTeamScore::create([
                'session_team_id' => $sessionTeamId,
                'battle_id' => $battleId,
                'is_win' => 0,
                'score' => $teamScore,
                'points' => 0,
            ]);
            foreach ($request->teams as $opponentKey => $opponentTeam) {
                if ($opponentKey !== $key) {
                    $opponentScore = $opponentTeam['score'];

                    if ($teamScore > $opponentScore) {
                        SessionTeamScore::find($sessionTeam->id)
                            ->increment('is_win');

                        $teamPoints += 2;
                    } elseif ($teamScore == $opponentScore)  {
                        $teamPoints += 1;
                    }
                }
            }
            SessionTeamScore::find($sessionTeam->id)
                ->update(['points' => $teamPoints]);

            foreach ($team['players'] as $playerId => $playerScore) {
                PlayerScore::create([
                    'session_team_id' => $sessionTeamId,
                    'team_id' => $team['team_id'],
                    'battle_id' => $battleId,
                    'player_id' => $playerId,
                    'score' => $playerScore,
                ]);
            }
        } 
        }
        
        

        return to_route('admin.battles.index')->with('message', 'Score added successfully');
    }

    public function show($battleId): View
    {
        return view('admin.score.show', [
            'sessionTeamScores' => SessionTeamScore::where('battle_id', $battleId)->with('SessionTeam.playerScores.player','SessionTeam.team')->get(),
            'battles' => Battle::where('id',$battleId)->with('playerScore.player')->get(),
            'playerScores' => PlayerScore::where('battle_id',$battleId)->with('player')->get(),
        ]);
    }

    // What the hack. Score model kahn hai?
    public function edit(Score $score): View
    {
        return view('admin.score.edit', [
            'score' => $score->load('battle'),
        ]);
    }

    public function update(ScoreRequest $request, Score $score): RedirectResponse
    {
        $score->update($request->validated());

        return to_route('admin.battles.index')->with('message', 'Score updated successfully');
    }

    public function view($id): View
    {
        return view('admin.score.score', [
            'score' => Score::where('battle_id', $id)->with('battle')->first(),
        ]);
    }

    public function addplayer(Request $request)
    {

        foreach ($request->team1player_ids as $player) {
            PlayerScore::create([
                'battle_id' => $request->battle_id,
                'team_id' => $request->by_team_id,
                'sport_id' => $request->sport_id,
                'player_id' => $player,

            ]);
        }

        return to_route('coach.battles.index')->with('message', 'Score updated successfully');

    }

    public function top()
    {
        return view('coach.dashboard', [
            'session' => Session::with('team'),
        ]);
    }
}
