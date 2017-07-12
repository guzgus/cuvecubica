<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class solicitarinfo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $titleDesarrollo;
    public $name;
    public $msj_send;
    public $phone;
    public $email;


    public function __construct($titleDesarrollo, $name, $msj_send, $phone, $email)
    {
      
        $this->titleDesarrollo = $titleDesarrollo;
        $this->name = $name;
        $this->msj_send = $msj_send;
        $this->phone = $phone;
        $this->email = $email;


    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->subject('Solicitud -  CuveCubica')
                  ->from('soporte@forcemsystems.com', 'Soporte CuveCubica')
                  ->view('emails.solicitarinfo');
    }
}
