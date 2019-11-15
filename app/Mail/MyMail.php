<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userid;
    public $userpassword;
    public $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $userid, $userpassword)
    {
        $this->title = $title;
        $this->userid = $userid;
        $this->userpassword = $userpassword;
        //$this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@digitalcspgroup.in')->
        view('email.sendcredentials');  
    }
}