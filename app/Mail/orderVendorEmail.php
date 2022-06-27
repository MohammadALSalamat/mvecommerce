<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class orderVendorEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private  $order_email_imfo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order_email_imfo)
    {
        $this->order_email_imfo = $order_email_imfo;
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
        ->with('order_email_imfo', $this->order_email_imfo);
    }
}
