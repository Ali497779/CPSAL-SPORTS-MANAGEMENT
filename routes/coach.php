<?php

use App\Http\Controllers\Coach\BattleController;
use App\Http\Controllers\Coach\DashboardController;
use App\Http\Controllers\Coach\SchoolController;
use App\Http\Controllers\Coach\SessionController;
use App\Http\Controllers\Coach\TeamController;
use App\Http\Controllers\Coach\TeamPlayerController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

// Notification
Route::put('notification-marked/{notification}', [NotificationController::class, 'notificationMarked'])->name('coach.notification.marked');

Route::prefix('coach')->as('coach.')->middleware(['auth', 'coach', 'is_verified'])->group(function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // School
    Route::resource('school', SchoolController::class);

    // Teams
    Route::resource('teams', TeamController::class);

    // Team Players
    // Route::resource('teams.players', TeamPlayerController::class)->parameters(['players' => 'teamId']);
    Route::get('teams/{teamId}/players', [TeamPlayerController::class,'create'])->name('teams.players.create');
    Route::post('teams/{teamId}/players', [TeamPlayerController::class,'store'])->name('teams.players.store');
    Route::get('teams/{teamId}/players/detail', [TeamPlayerController::class,'show'])->name('teams.players.show');
    Route::get('teams/{teamId}/players/{playerId}', [TeamPlayerController::class,'edit'])->name('teams.players.edit');
    Route::put('teams/{teamId}/players/{playerId}', [TeamPlayerController::class,'update'])->name('teams.players.update');
    Route::put('teams/{teamId}/players/{playerId}', [TeamPlayerController::class,'destroy'])->name('teams.players.destroy');

    

    Route::get('battles', [BattleController::class, 'index'])->name('battles.index');
    Route::get('battles/score/{battle}', [BattleController::class, 'addteam'])->name('battle.score');
    Route::get('get-teams', [BattleController::class, 'getTeams'])->name('battles.getTeams');
    Route::post('get-teams', [BattleController::class, 'creatematchteam'])->name('battles.creatematchteam');
    Route::put('update-status/{battle}', [BattleController::class, 'updateStatus'])->name('battles.updateStatus');
    Route::get('view-score/{battle}', [BattleController::class, 'viewscore'])->name('battle.viewscore');
    Route::post('score', [ScoreController::class, 'addplayer'])->name('score.addplayer');

    // Sessions
    Route::get('sessions', [SessionController::class, 'index'])->name('sessions.index');
    Route::get('sessions/add-players/{teamId}/{sportId}/{sessionId}', [SessionController::class, 'addPlayers'])->name('sessions.add-players');
    Route::get('sessions/addnew-players/{teamId}/{sportId}/{sessionId}', [SessionController::class, 'newPlayers'])->name('sessions.addnew');

    Route::post('sessions/add-players/{sessionTeamId}', [SessionController::class, 'storePlayers'])->name('sessions.store-players');
    Route::get('sessions/show-players/{sessionTeamId}', [SessionController::class, 'showPlayers'])->name('sessions.show-players');
    Route::get('sessions/delete-player/{playerId}', [SessionController::class, 'deletePlayer'])->name('sessions.delete-player');

});
