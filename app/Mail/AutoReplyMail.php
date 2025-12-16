<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AutoReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            // Subject should make sense for the user
            subject: 'Confirmation: Your Service Request to Jordan\'s Mobile Fleet Service',
        );
    }

    public function content(): Content
    {
        return new Content(
            // Uses the new auto-reply template
            view: 'emails.auto-reply',
            with: [
                'name' => $this->data['name'],
                'user_message' => $this->data['message'],
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}