<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use App\Mail\verfication_admin_email_for_vendors;

class sellerRegistertionEmail_forAdmin implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $adminData;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($adminData)
    {
        $this->adminData = $adminData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to('alomda.alslmat@gmail.com')->send(new verfication_admin_email_for_vendors($this->adminData));
    }
}
