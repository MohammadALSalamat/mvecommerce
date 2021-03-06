<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class verfication_admin_email_for_vendors extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $adminData;
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
        ->subject('Vendor Info Registration')
        ->view('mails.send_verify_for_admin')
        ->attach(storage_path('app/public/seller/'.$this->adminData['license']))
        ->with('adminData', $this->adminData);
    }
}
