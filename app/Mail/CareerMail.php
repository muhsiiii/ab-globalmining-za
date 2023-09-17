<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


     public $user;

    public function __construct($user)
    {
     $this->user=$user;
    //  print_r($this->user->file);
    //  die;
 

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $item='https://abglobalmining.co.za/careers/'.$this->user->file;
       
        return $this->subject('Welcome To GiroKab')
                    ->view('emails.career_mail')
                    ->attach($item);
          
    }
}
