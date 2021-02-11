<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Reserva extends Mailable
{
    use Queueable, SerializesModels;
    public $vuelo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vuelo)
    {
        $this->vuelo = $vuelo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ventas1@startravelperu.com', env('MAIL_FROM_NAME'))
                    ->subject('Reserva de viaje Star Travel')
                    ->view('mails.form-reserva');
    }
}
