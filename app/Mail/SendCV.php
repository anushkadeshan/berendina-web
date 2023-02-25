<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCV extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $path = storage_path();

        return $this->subject('CV recieved for position of '.$this->data->career->title)
        ->markdown('emails.cv')
        ->withData($this->data)
        ->attach($path.'/app/public/documents/cvs/'.$this->data->cv);
    }
}
