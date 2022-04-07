<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class verficationVendors extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private  $newdata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newdata)
    {
        $this->newdata = $newdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@9yards.ae')
        ->subject('vendor Regirstaion')
        ->view('mails.verify_vendors')
        ->with('newdata', $this->newdata);
    }
}
