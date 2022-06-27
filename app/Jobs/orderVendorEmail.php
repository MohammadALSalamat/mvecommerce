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
    public $data_for_vendor;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data_for_vendor )
    {
        $this->data_for_vendor = $data_for_vendor;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->data_for_vendor['email'])->send(new vendorOrderMail($this->data_for_vendor)); // send email to vendor

    }
}
