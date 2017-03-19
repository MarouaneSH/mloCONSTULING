<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $raison;
     public $nom;
     public $email;
     public $msg;


    public function __construct($raison ,$nom ,$email ,$messageContact)
    {
        $this->raison = $raison;
        $this->nom =$nom;
        $this->email = $email;
        $this->msg = $messageContact;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact')->subject("Nouveau messages pour vous");
    }
}
