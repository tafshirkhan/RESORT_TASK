<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyAdmiMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data1;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data1)
    {
        $this->data1 = $data1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $notify = $this->data1;
        return $this->from('tafshirahmed100@gmail.com')->view('Mail.notify_mail',compact('notify'))->subject('Email regarding resort reservation request');
    }
}
