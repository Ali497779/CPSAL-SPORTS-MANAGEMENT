<?php

namespace App\Notifications;

use App\Events\NotificationEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class BattleNotification extends Notification
{
    use Queueable;

    public $message;

    public $url;

    public function __construct($message, $url)
    {
        $this->message = $message;
        $this->url = $url;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        event(new NotificationEvent($this->message, $this->url));

        return [
            'message' => $this->message,
            'url' => $this->url,
        ];
    }
}
