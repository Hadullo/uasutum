<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{

    //Pass the data here
    public $data;
    use Queueable, SerializesModels;
    public $details;

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
        // Define our Subject

        $subject = $this->data['name']." ".'sent a Message on '.$this->data['subject'];

        return $this->markdown(view:'emails.ContactMail')


         ->subject($subject)
         ->with(['data'=>$this->data]);
    }
}
