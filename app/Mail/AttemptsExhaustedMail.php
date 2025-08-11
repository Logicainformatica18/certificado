<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AttemptsExhaustedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $studentName,
        public string $studentEmail,   // ← nuevo
        public string $certName,
        public int $used,
        public int $allowed
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Intentos agotados - Solicitud de refuerzo presencial',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.attempts_exhausted',
            with: [
                'studentName'  => $this->studentName,
                'studentEmail' => $this->studentEmail, // ← pasa a la vista
                'certName'     => $this->certName,
                'used'         => $this->used,
                'allowed'      => $this->allowed,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
