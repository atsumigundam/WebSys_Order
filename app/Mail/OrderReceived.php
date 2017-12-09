<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $order_id;
    public $book;
    public $shop;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order_id, $book, $shop)
    {
        $this->order_id = $order_id;
        $this->book = $book;
        $this->shop = $shop;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders.received');
    }
}
