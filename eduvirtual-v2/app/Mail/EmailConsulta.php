<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailConsulta extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $name;
    public $email;
    public $carrera;
    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$name,$email,$carrera,$mensaje)
    {
        $this->subject=$subject;
        $this->name=$name;
        $this->email=$email;
        $this->carrera=$carrera;
        $this->mensaje=$mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.emailconsulta');
    }
}
