<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;
use Log;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')
                 ->hourly();


        $schedule->call(function(){

            $count = DB::table('jobs')->count();
            
            for($i=0;$i<$count;$i++)
            {
                $shellcmd = "php ".base_path("artisan")." queue:work --tries=3";
                $res = shell_exec($shellcmd);
                Log::info($res);
            }           

        })->everyMinute()->when(function(){
            $count = DB::table('jobs')->count();
            
            if($count > 0) return true;
            else return false;

        });
    }
}
