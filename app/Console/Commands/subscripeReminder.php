<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Seller;
use App\Models\subscription;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
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
        $current_user = Seller::find(Auth::guard('seller')->user()->id);

        //check if subscripe
        $subscriptions_reminder_email = subscription::where('seller_id',$current_user->id)->first();

        if (Carbon::now()->diffInDays($subscriptions_reminder_email->ends_at) > 28) {
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
