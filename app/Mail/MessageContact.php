<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class MessageContact extends Mailable
{
    use Queueable, SerializesModels;

   
    public $data;

    public function __construct(Request $request)
    {
        $this->data = $request;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Contacto - Jassan';

        return $this->view('emails.index')->from('web@jassan.pe')->subject($subject);
            
    }
}
