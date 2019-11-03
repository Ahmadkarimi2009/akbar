<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamps();
        });
        DB::table('job_categories')->insert(
            array(
                'name'=>'Health/Medical',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Social Science',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Programme',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Banking',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Engineering',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Civil Engineering',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Management',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Administrative',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Education/Training',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Electrical Engineering',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Buniness Administration',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'IT/Software',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Operation',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'General',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Accounting/Finance',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Agriculture',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Husan Resources',
                )
        );
        DB::table('job_categories')->insert(
            array(
                'name'=>'Monitoring & Evaluation',
                )
        ); 
        DB::table('job_categories')->insert(
            array(
                'name'=>'Sale & Marketing',
                )
        ); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_categories');
    }
}
