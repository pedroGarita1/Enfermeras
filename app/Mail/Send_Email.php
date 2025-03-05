<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Send_Email extends Mailable
{
    use Queueable, SerializesModels;
    public $nombre;
    public $apellido;
    public $email;
    public $organizacion;
    public $cargo;
    public $telefono;
    public $estado;
    public $comentarios;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$apellido,$email,$organizacion,$cargo,$telefono,$estado,$comentarios)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->organizacion = $organizacion;
        $this->cargo = $cargo;
        $this->telefono = $telefono;
        $this->estado = $estado;
        $this->comentarios = $comentarios;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('modules/PDF/contacto_pdf')->subject('Contacto nuevo');
    }
}
