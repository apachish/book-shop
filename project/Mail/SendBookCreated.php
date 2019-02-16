<?php

namespace App\Mail;

use App\Book;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBookCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $book;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Book $book,User $user)
    {
        $this->book = $book;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.books.created');
    }
}
