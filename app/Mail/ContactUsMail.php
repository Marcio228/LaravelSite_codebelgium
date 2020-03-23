<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\ContactSubmission;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;


    public $submission;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactSubmission $contactSubmission)
    {
        //
        $this->submission = $contactSubmission;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->submission->name;
        return $this->from('admin@codebelgium.com')
                    ->subject("Contact Form Submission from $name")
                    ->view('emails.contactus_self');
    }
}
