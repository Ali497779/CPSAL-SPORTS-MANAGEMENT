<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class NotificationController extends Controller
{
    // public function index(): View
    // {
    //     return view('notification.list');
    // }

    // public function notificationMarked(Notification $notification): void
    // {
    //     $notification->update([
    //         'read_at' => now(),
    //     ]);
    // }


    public function index()
    {
        $notifications = Notification::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('notifications.index', compact('notifications'));
    }

    public function notificationMarked(Notification $notification, Request $req)
    {
        return Notification::where(['id'=>$req->notification->id])->update(['read_at' => true]);
        return $notification->update(['read_at' => true]);

        return redirect()->back();
    }

}
