<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct($name,$email,$subject,$message)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email,'Message From Website')
        ->view('email')
        ->with(['name'=>$this->name,'email'=>$this->email ,'subject'=>$this->subject ,'message'=>$this->message]);


       // return $this->view('view.name');
    }
}
