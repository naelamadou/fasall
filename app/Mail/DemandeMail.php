<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Model\Entreprise;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DemandeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     
    public function __construct()
    {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
          return $this->from('fatoushsall019@gmail.com','Convention National Etat Employeur')
                ->subject("Acceptation de demande d'adhesion")
                ->view('mail.DemandeMail');
    }
}
