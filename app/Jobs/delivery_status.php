<?php

namespace App\Jobs;

use App\Mail\delivery_status as MailDelivery_status;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class delivery_status implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data_info_email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data_info_email)
    {
        $this->data_info_email = $data_info_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->data_info_email['email'])->send(new MailDelivery_status($this->data_info_email)); // send email to user

    }
}
