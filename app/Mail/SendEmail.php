<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request->all();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from('admin@voucasarmagra.com.br')
            ->view('index.contato')
            ->with([
                'name' => $this->request['InputName'],
                'email' => $this->request['InputEmail'],
                'bodyMessage' =>  htmlspecialchars($this->request['InputMessage'], ENT_QUOTES, 'UTF-8'),
            ]);;
    }
}
