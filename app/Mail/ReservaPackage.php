<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservaPackage extends Mailable
{
    use Queueable, SerializesModels;
    public $package;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($package)
    {
        $this->package = $package;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('zurang.sheyla@gmail.com', env('MAIL_FROM_NAME'))
                    ->subject('Reserva de Paquete Star Travel')
                    ->view('mails.form-package');
    }
}
