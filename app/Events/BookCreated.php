<?php

namespace App\Events;

use App\Book;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BookCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $book;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Book $book,User $user)
    {
        $this->book = $book;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
