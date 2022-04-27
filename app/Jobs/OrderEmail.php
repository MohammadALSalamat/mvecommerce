<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use App\Mail\OrderEmail as userOrderMail;


class OrderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $order_email_imfo;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($order_email_imfo)
    {
        $this->order_email_imfo = $order_email_imfo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->order_email_imfo['email'])->send(new userOrderMail($this->order_email_imfo)); // send email to user
    }
}
