<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Seller;
use App\Models\subscription;
use Illuminate\Console\Command;
use Auth;
use Illuminate\Support\Facades\Mail;

class subscripeReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command will remind the seller that his subscribe will end soon';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $current_users = Seller::get();

        //check if subscripe
        foreach($current_users as $current_user){
        }
        $subscriptions_reminder_emails = subscription::get();
        foreach($subscriptions_reminder_emails as $subscriptions_reminder_email){
            if (Carbon::parse($subscriptions_reminder_email->ends_at)->diffInDays(Carbon::now())) {
                $emails = array('seller_email' => $current_user->email);
                Mail::send('mails.sellers_Emails.subscription_reminder', $emails, function ($message) use ($emails) {
                    $message->from('support@9yards.ae', 'ITajer');
                    $message->sender('alomda.alslmat@gmail.com', 'John Doe');
                    $message->to($emails['seller_email'], 'John Doe');
                    $message->cc('alomda.alslmat@gmail.com', 'John Doe');
                    $message->subject('reminder subscription');
                });
            }
        }
    }
}
