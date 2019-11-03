<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs;
use App\JobSkill;
use App\JobEmail;
use App\JobLocation;
use App\JobLanguage;

class DeleteJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:jobs';

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
     * @return mixed
     */
    public function handle()
    {
    
        $findjob = Jobs::where('closingdate', '<', date('Y-m-d H:i:s'))->get();
        foreach($findjob as $job){
            $job->delete();

            $del2 = JobSkill::where('job_id', $job)->delete();
            $del3 = JobLocation::where('job_id', $job)->delete();
            $del4 = JobEmail::where('job_id', $job)->delete();
            $del5 = JobLanguage::where('job_id', $job)->delete();
        }
    }
}
