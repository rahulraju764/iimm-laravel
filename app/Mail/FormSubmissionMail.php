<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $formType;
    public array $formData;

    public function __construct(string $formType, array $formData)
    {
        $this->formType = $formType;
        $this->formData = $formData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New ' . $this->formType . ' Submission - IIMM',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.form-submission',
        );
    }
}
