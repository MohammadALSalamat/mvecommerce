<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\verficationVendors;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class sellerRegistertionEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $newdata;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($newdata)
    {
        $this->newdata = $newdata;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->newdata['email'])->send(new verficationVendors($this->newdata));
    }
}
