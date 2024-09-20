<?php

namespace App\Observers;

use App\Models\Battle;
use App\Notifications\BattleNotification;
use Illuminate\Support\Facades\Notification;

class BattleObserver
{
    // public function created(Battle $battle): void
    // {
    //     Notification::send([$battle->byTeam->coach,$battle->forTeam->coach], new BattleNotification('Battle request', route('coach.battles.show',$battle->id)));
    // }

    // public function updated(Battle $battle): void
    // {
    //     Notification::send($battle->byTeam->coach, new BattleNotification('Battle request updates',route('coach.battles.show',$battle->id)));
    // }
}
