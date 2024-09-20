<?php

namespace App\Providers;

use App\Models\Battle;
use App\Observers\BattleObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    public function boot(): void
    {
        Battle::observe(BattleObserver::class);
    }

    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
