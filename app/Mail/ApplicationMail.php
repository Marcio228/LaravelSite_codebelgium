<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Application;

class ApplicationMail extends Mailable
{
    use Queueable, SerializesModels;


    public $application;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Application $application)
    {
        //
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->application->name;
        return $this->from('admin@codebelgium.com')
                    ->subject("Application Submission from $name")
                    ->view('emails.application_self');
    }
}
