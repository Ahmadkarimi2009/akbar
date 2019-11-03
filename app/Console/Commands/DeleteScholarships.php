<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Scholarship;
use App\ScholarshipDegree;
use App\ScholarshipType;

class DeleteScholarships extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:scholarships';

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
        $findScholarships = Scholarship::where('closingdate', '<', date('Y-m-d H:i:s'))->get();
        foreach($findScholarships as $scholarship){
            $scholarship->delete();
            $del1 = ScholarshipDegree::where('scholarship_id', $scholarship)->delete();
            $del2 = ScholarshipType::where('scholarship_id', $scholarship)->delete();
        }
    }
}
