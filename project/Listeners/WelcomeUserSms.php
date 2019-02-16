<?php

namespace App\Listeners;

use App\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Kavenegar\KavenegarApi;

class WelcomeUserSms implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $client = new KavenegarApi(env('KAVEH_NEGAR_KEY'));
        $message = 'hi welcome  user '.$event->user->name;
        $client->send(env('SENDER_MOBILE'),$event->user->phone_number,$message);
    }
}
