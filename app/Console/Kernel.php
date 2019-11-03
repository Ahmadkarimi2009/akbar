<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\DeleteJobs::class,
        Commands\DeleteScholarships::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('delete:jobs')
                 ->dailyAt('00:00')
                 ->timezone('Asia/Kabul')
                 ->emailOutputTo('ahmadkarimi2009@gmail.com');
        $schedule->command('delete:scholarships')
                 ->dailyAt('00:00')
                 ->timezone('Asia/Kabul')
                 ->emailOutputTo('ahmadkarimi2009@gmail.com');
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
