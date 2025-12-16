<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The contact form data (name, email, message).
     * @var array
     */
    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // Sets the subject line with the sender's name
            subject: 'New Service Quote Request from ' . $this->data['name'],
            
            // Sets the 'Reply-To' header to the user's email for easy response
            replyTo: [
                new Address($this->data['email'], $this->data['name']),
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // Specifies the Blade file to use for the email's body (the admin template)
            view: 'emails.contact-form',
            with: [
                'name' => $this->data['name'],
                'user_email' => $this->data['email'],
                'user_message' => $this->data['message'],
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}