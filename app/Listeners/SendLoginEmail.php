<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendLoginEmail implements ShouldQueue
{
    public function handle(UserLoggedIn $event)
    {
        // Contoh: Kirim email
        $user = $event->user;
        Mail::to($user->email)->send(new \App\Mail\LoginSuccess($user));
    }
}
