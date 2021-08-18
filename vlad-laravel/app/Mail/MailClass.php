<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $mes;


    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $subject
     * @param $mes
     *
     */
    public function __construct($name, $email, $subject, $mes)
    {
        $this->name = $name;
        $this->email= $email;
        $this->subject= $subject;
        $this->mes= $mes;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'mes' => $this->mes,

            ]);
    }
}
