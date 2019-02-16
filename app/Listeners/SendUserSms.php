<?php

namespace App\Listeners;

use App\Events\BookCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Kavenegar\KavenegarApi;

class SendUserSms implements ShouldQueue
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
     * @param  BookCreated  $event
     * @return void
     */
    public function handle(BookCreated $event)
    {
        $client = new KavenegarApi(env('KAVEH_NEGAR_KEY'));
        $message = 'hi created '.$event->book->name.'for user'.$event->user->name;
        $client->send(env('SENDER_MOBILE'),$event->user->phone_number,$message);
    }
}
