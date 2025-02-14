<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Dati del form da utilizzare nella view

    /**
     * Create a new message instance.
     *
     * @param array $data  I dati del form (name, email, phone, text)
     */
    public function __construct(array $data)
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
        return $this->subject('Nuovo messaggio dal sito')
                    ->view('emails.contactus'); // La view che creeremo a seguire
    }
}
