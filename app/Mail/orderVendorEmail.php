<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class orderVendorEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private  $data_for_vendor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_for_vendor)
    {
        $this->data_for_vendor = $data_for_vendor;
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
        ->view('mails.vendor_order_admin_email')
        ->with('data_for_vendor', $this->data_for_vendor);
    }
}
