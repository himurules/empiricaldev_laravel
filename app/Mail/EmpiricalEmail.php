<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmpiricalEmail extends Mailable
{
    use Queueable, SerializesModels;

    public array $user;

    /**
     * Create a new message instance.
     */
    public function __construct(array $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('emails.empirical')
            ->with('user', $this->user)
            ->from('himanshu.kotnala@gmail.com', 'Himanshu Kotnala');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Empirical Developments - New Request for Quote from ' . $this->user['username'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.empirical',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
