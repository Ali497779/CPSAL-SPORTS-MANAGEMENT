<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\CoachController;
use App\Http\Controllers\Admin\PointController;
use App\Http\Controllers\Admin\ScoreController;
use App\Http\Controllers\Admin\SportController;
use App\Http\Controllers\Admin\BattleController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeamPlayerController;
use App\Http\Controllers\Admin\SessionTeamController;
use App\Http\Controllers\Admin\PlayerProfileController;
use App\Http\Controllers\Admin\SportAttributeController;

Route::prefix('admin')->as('admin.')->middleware(['auth', 'admin'])->group(function () {

    //Notification
Route::middleware('auth')->group(function () {
    Route::resource('notifications', NotificationController::class)->only(['index']);
    Route::put('notifications/{notification}/mark-as-read', [NotificationController::class, 'markAsRead'])
        ->name('notifications.markAsRead');
});

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard/mail', [DashboardController::class, 'sendDemoEmail'])->name('dashboard.mail');
    

    Route::get('/Send',[MailController::class, 'index'])->name('mail');


    // Sessions
    Route::resource('sessions', SessionController::class);

    // (Sessions) Teams
    Route::get('session/add-teams/{sessionId}/{sportId}', [SessionTeamController::class, 'create'])->name('sessions.teams.create');
    Route::post('session/add-teams/{sessionId}', [SessionTeamController::class, 'store'])->name('sessions.teams.store');

    //Sport Attributes
    Route::resource('sport-attributes', SportAttributeController::class);
    Route::resource('sport',SportController::class);

    // Teams
    Route::resource('teams', TeamController::class);
    Route::get('teams/players/{teamid}', [TeamPlayerController::class, 'create'])->name('teams.players.create');
    Route::post('teams/players/{teamid}', [TeamPlayerController::class, 'store'])->name('teams.players.store');
    Route::get('teams/players/detail/{teamid}', [TeamPlayerController::class, 'show'])->name('teams.players.show');
    Route::get('teams/players/{teamId}/edit/{playerId}', [TeamPlayerController::class, 'edit'])->name('teams.players.edit');
    Route::put('teams/players/{teamId}/{playerId}', [TeamPlayerController::class, 'update'])->name('teams.players.update');

    // Matches (Battles)
    Route::resource('battles', BattleController::class);
    Route::put('battle-postpone/{battle}', [BattleController::class, 'postpone'])->name('battles.postponed');

    // Coaches
    Route::resource('coaches', CoachController::class);
    Route::put('verify-coach/{coach}', [CoachController::class, 'verifyCoach'])->name('coaches.verify');
    Route::put('block-coach/{coach}', [CoachController::class, 'blockCoach'])->name('coaches.block');
    

    Route::get('get-for-coach', [CoachController::class, 'getForCoach'])->name('get-for-coach');

    Route::get('get-for-teams', [BattleController::class, 'getForTeams'])->name('get-for-teams');
    Route::get('get-by-teams', [BattleController::class, 'getByTeams'])->name('get-by-teams');
    Route::get('viewscore/{battle}', [BattleController::class, 'viewscore'])->name('battle.score');
    Route::get('score/{battle}/{sessionId}', [ScoreController::class, 'create'])->name('battles.score.create');
    Route::post('score/{battleId}/{sessionId}', [ScoreController::class, 'store'])->name('score.store');
    Route::post('score/{score}', [ScoreController::class, 'view'])->name('score.view');
    Route::get('battles/score/show/{id}', [ScoreController::class, 'show'])->name('battles.score.show');
    Route::get('score/{score}/edit', [ScoreController::class, 'edit'])->name('score.edit');
    Route::put('score/{score}', [ScoreController::class, 'update'])->name('score.update');

    // Points
    Route::get('points', [PointController::class, 'index'])->name('points.index');


    //Player Stats
    Route::get('player/view/{playerId}', [PlayerProfileController::class, 'index'])->name('player.index');


    //Banner
    Route::resource('banner', BannerController::class);

    //SEO
    Route::resource('seo', SeoController::class);
    Route::put('seo/{seoid}', [SeoController::class, 'update'])->name('seo.update');

    //Page
   Route::resource('page', PageController::class);
   Route::put('page/{pageid}', [PageController::class, 'update'])->name('page.update');
   Route::put('page2/{pageid}', [PageController::class, 'update2'])->name('page.update2');
   Route::post('addbanner/', [PageController::class, 'addbanner'])->name('banner.addbanner');
   Route::post('addlawofplay/', [PageController::class, 'addlawofplay'])->name('addlawofplay');
   Route::post('addfrequent/', [PageController::class, 'addfrequent'])->name('addfrequent');
   Route::post('AddContact', [PageController::class, 'addcontactcard'])->name('addcontactcard');



   Route::post('addacordian/', [PageController::class, 'addacordian'])->name('page.addacordian');
   Route::post('/addgalery', [PageController::class, 'addgalery'])->name('page.addgalery');
   Route::post('addcategory', [PageController::class, 'addcategory'])->name('page.addcategory');
   Route::post('addcontact', [PageController::class, 'addcontact'])->name('page.addcontact');
   Route::get('delete/{id}', [PageController::class, 'destroy'])->name('page.destroy');
   Route::get('remove/{id}', [PageController::class, 'remove'])->name('page.remove');
   Route::post('addcontactinfo/{contactid}', [PageController::class, 'addcontactinfo'])->name('page.addcontactinfo');
   Route::get('destroygallery/{galleryid}', [PageController::class, 'destroygallery'])->name('page.destroygallery');




   

// Home Dynamic 
   Route::get('pages/home', [PageController::class, 'home'])->name('page.home');
   Route::put('updatebanner/{bannerId}', [PageController::class, 'updatebanner'])->name('banner.updatebanner');
   Route::put('updatecard/{bannerId}', [PageController::class, 'updatecard'])->name('banner.updatecard');
   Route::put('updatelawofplay/{bannerId}', [PageController::class, 'updatelawofplay'])->name('updatelawofplay');
   Route::put('updatefrequent/{bannerId}', [PageController::class, 'updatefrequent'])->name('updatefrequent');

   


   Route::get('page/getbanner/{bannerId}', [PageController::class, 'getbannerdata'])->name('banner.getbannerdata');
   Route::get('page/getcard/{bannerId}', [PageController::class, 'getcard'])->name('banner.getcard');
   Route::get('page/getlawofplay/{bannerId}', [PageController::class, 'getlawofplay'])->name('banner.getlawofplay');
   Route::get('page/getfrequent/{bannerId}', [PageController::class, 'getfrequent'])->name('banner.getfrequent');
   Route::get('page/getcontact/{bannerId}', [PageController::class, 'getcontact'])->name('banner.getcontact');


   Route::get('page/deletebanner/{bannerId}', [PageController::class, 'deletebanner'])->name('banner.deletebanner');
   Route::get('page/deletelawofplay/{bannerId}', [PageController::class, 'deletelawofplay'])->name('deletelawofplay');
   Route::get('page/deletefrequent/{bannerId}', [PageController::class, 'deletefrequent'])->name('deletefrequent');
   Route::get('page/deletecard/{bannerId}', [PageController::class, 'deletecard'])->name('deletecard');



   Route::get('deactiveitem/{pageid}', [PageController::class, 'deactiveitem'])->name('deactiveitem');
   Route::put('page/edit/{itemId}', [PageController::class, 'itemedit'])->name('page.edit');
   Route::put('page/editgallery/{itemId}', [PageController::class, 'editgallery'])->name('page.editgallery');






// About Dynamic
   Route::get('pages/about', [PageController::class, 'about'])->name('page.about');
   Route::get('pages/player', [PageController::class, 'player'])->name('page.player');
   Route::get('pages/galllery', [PageController::class, 'galllery'])->name('page.galllery');
   Route::get('pages/league', [PageController::class, 'league'])->name('page.league');
   Route::get('pages/match', [PageController::class, 'match'])->name('page.match');
   Route::get('pages/contact', [PageController::class, 'contact'])->name('page.contact');
   Route::get('pages/footer', [PageController::class, 'footer'])->name('page.footer');




  



   




//    ABOUT

// Route::post('page/createabout', [PageController::class,'createabout'])->name('page.createabout');



});
