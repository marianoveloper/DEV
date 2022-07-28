<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Consulta extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $contacto;
    public $curso;
    public $consulta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->subject=$subject;
        $this->contacto=$contacto;
        $this->curso=$curso;
        $this->consulta=$consulta;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.consulta');
    }
}
