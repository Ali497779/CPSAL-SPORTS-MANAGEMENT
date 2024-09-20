<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/players', [HomeController::class, 'players'])->name('players');
Route::get('/gallary', [HomeController::class, 'gallary'])->name('gallary');
Route::get('/matches', [HomeController::class, 'matches'])->name('matches');
Route::get('/match-details/{battleId}', [HomeController::class, 'matchDetails'])->name('matchDetails');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/league', [HomeController::class, 'league'])->name('league');
Route::get('/league/sport/{sportid}', [HomeController::class, 'leagueDetail'])->name('league.sport');
Route::get('/player-details/{playerId}', [HomeController::class, 'playerDetails'])->name('playerDetails');
Route::get('/team-points', [HomeController::class, 'teamPoints'])->name('teamPoints');
Route::get('/players-points', [HomeController::class, 'playerStat'])->name('playerStat');
Route::get('/players-points/view/{playerId}', [HomeController::class, 'singlePlayerStat'])->name('singlePlayerStat');

