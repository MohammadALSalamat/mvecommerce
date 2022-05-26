<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class renewSubscibtionUser extends Mailable
{
    use Queueable, SerializesModels;
    private $email_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_data)
    {
        $this->email_data= $email_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@9yards.ae')
        ->subject('New Order your Product')
        ->view('mails.sellers_Emails.subscribtion_renew_user')
        ->with('email_data', $this->email_data);
    }   
}
