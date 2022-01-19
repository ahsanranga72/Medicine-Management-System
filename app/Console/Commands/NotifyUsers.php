<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PrescriptionPatientInf;
use App\Models\PrescriptionMedicineInf;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\MedicineNotification;

class NotifyUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $users = User::all();
        foreach($users as $user){
            $ui = $user->id;

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
                    $date = $date->setTimezone($tz);
                    $date = $date->format('h:i:s');

                    if ($bnt==$date) {
                        $user->notify(new MedicineNotification());
                    }
    
                    if ($lnt == $date) {
                        $user->notify(new MedicineNotification());
                    }
    
                    if ($dnt == $date) {
                        $user->notify(new MedicineNotification());
                    }
                }
            }
        }
    }
}
