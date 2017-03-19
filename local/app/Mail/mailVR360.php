<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Demandedevis;

class mailVR360 extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct(Demandedevis $data)
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
        if($this->data->file == "No Document")
        {
            return $this->view('email.devis')
           ->subject("Demande de devis");

        }
        else
        {
            return $this->view('email.devis')
            ->subject("Demande de devis")
            ->attach(env('APP_STORAGE').'document/'.$this->data->file) ;
        }
        
    }
}
