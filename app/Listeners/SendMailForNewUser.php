<?php

namespace App\Listeners;

use App\Events\NewUser;
use App\Mail\NewUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailForNewUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewUser $event): void
    {
        Mail::to('parusov.93@gmail.com')->send(new NewUserMail($event->user));
    }
}
