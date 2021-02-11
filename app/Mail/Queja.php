<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Queja extends Mailable
{
    use Queueable, SerializesModels;
    public $reclamo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reclamo)
    {
        $this->  reclamo= $reclamo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ventas1@startravelperu.com', env('MAIL_FROM_NAME'))
                    ->subject('Reclamo desde Star Travel')
                    ->view('mails.form-reclamo');
    }
}
