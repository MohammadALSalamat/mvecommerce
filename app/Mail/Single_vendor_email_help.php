<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Single_vendor_email_help extends Mailable
{
    use Queueable, SerializesModels;

    private $data_info;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_info)
    {
        $this->data_info = $data_info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@9yards.ae')
        ->subject('User Request')
        ->cc('alomda.alslmat@gmail.com')
        ->view('mails.sellers_Emails.single_vendor_email_help')
        ->with('data_info', $this->data_info);
    }
}
