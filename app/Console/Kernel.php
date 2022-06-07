<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected $commands = [
        '\App\Console\Commands\subscripeReminder',
    ];


    protected function schedule(Schedule $schedule)
    {
        
        $schedule->command('queue:work ')->everyMinute(); // emails run on corn jobs
        $schedule->command('queue:restart ')->everyFiveMinutes();
        $schedule->command('emails:send')->daily();
        $schedule->command('sitemap:generate')->daily();
        $schedule->command('optimize:clear')->everyFifteenMinutes();
        $schedule->command('view:clear')->everyFifteenMinutes();
        $schedule->command('config:clear')->everyFifteenMinutes();
        $schedule->command('route:clear')->everyFifteenMinutes();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
