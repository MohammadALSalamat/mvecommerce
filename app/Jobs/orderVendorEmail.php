<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\orderVendorEmail as vendorOrderMail;


class orderVendorEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $order;
    public $vendor_email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($order , $vendor_email)
    {
        $this->order = $order;
        $this->vendor_email = $vendor_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->vendor_email->email)->send(new vendorOrderMail($this->order)); // send email to vendor

    }
}
