<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class delivery_status extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $data_info_email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_info_email)
    {
        $this->data_info_email = $data_info_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@9yards.ae')
        ->subject('Order Delivery Status #'.$this->data_info_email['order_number'])
        ->view('mails.deliveryemails.changeStatus')
        ->with('data_info_email', $this->data_info_email);
    }
}
