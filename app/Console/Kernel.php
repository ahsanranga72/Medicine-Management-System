<?php

namespace App\Console;

use App\Models\PrescriptionMedicineInf;
use App\Models\PrescriptionPatientInf;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTimeZone;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {

            $ui = auth()->user()->id;
            $pis = PrescriptionPatientInf::where('uuid', $ui)->get();
            foreach ($pis as $pi) {
                $p = $pi->id;
                $mis = PrescriptionMedicineInf::where('pat_id', $p)->get();

                foreach ($mis as $ms) {
                    $bnt = $ms->bnt;
                    $lnt = $ms->lnt;
                    $dnt = $ms->dnt;
                    $date = Carbon::now();
                    $tz = new DateTimeZone('Asia/Dhaka'); // or whatever zone you're after
                    $date->setTimezone($tz);
                    $date = ($date->set('H:i:s'));
                    error_log($date);
                    error_log($bnt);


                    // if ($bnt == $date) {
                    //     notify()->success('Laravel Notify is awesome!');
                    // }

                    // if ($lnt == $date) {
                    //     notify()->success('Laravel Notify is awesome!');
                    // }

                    // if ($dnt == $date) {
                    //   notify()->success('Laravel Notify is awesome!');
                    // }
                }
            }
            
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
