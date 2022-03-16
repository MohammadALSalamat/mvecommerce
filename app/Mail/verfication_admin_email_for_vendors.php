<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class verfication_admin_email_for_vendors extends Mailable
{
    use Queueable, SerializesModels;

    public $adminData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($adminData)
    {
        $this->adminData=  $adminData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@9yards.ae')
        ->subject('vendor Activation')
        ->view('mails.verify_admin_vendors')
        ->attach($this->adminData['filename'])
        ->with('adminData', $this->adminData);
    }
}
