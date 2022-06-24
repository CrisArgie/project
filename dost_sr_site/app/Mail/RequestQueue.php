<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestQueue extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $name, $email, $request, $status, $type, $action, $views;
    public function __construct($name, $email, $request, $status, $type, $action, $views)
    {
        $this->name = $name;
        $this->email = $email;
        $this->request = $request;
        $this->status = $status;
        $this->type = $type;
        $this->action = $action;
        $this->views = $views;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.post.requestmessage');
    }
}
