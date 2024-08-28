<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        //
        $this->data = $data;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->data['subject']
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->from('muhamadanasmustopa@ptspsi.co.id',$this->data['name']) 
        ->view('pages.inbox')
        ->with([
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'message' => $this->data['message'],
        ]);

        // return $this->view('pages.inbox')
        //             ->with([
        //                 'name' => $this->data['name'],
        //                 'email' => $this->data['email'],
        //                 'message' => $this->data['message'],
        //         ]);
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
