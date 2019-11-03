<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('company_id');
            $table->integer('category_id');
            $table->date('openingdate');
            $table->date('closingdate');
            $table->string('salary');
            $table->string('nationality');
            $table->string('probation');
            $table->string('gender');
            $table->integer('numberofjobs');
            $table->string('vacancynumber');
            $table->string('contracttype');
            $table->string('contractduration');
            $table->boolean('extensionpossibility');
            $table->string('worktype');
            $table->boolean('travelpossibility');

            $table->string('file')->default('N/A');

            $table->text('aboutcompany');
            $table->text('jobdescription');
            $table->text('responsibilities');
            $table->text('qualifications');
            $table->text('guide');

            $table->boolean('isactive')->default(true);
            $table->integer('timeviewed')->default(0);
            $table->string('experienceyears');
            $table->timestamps();
        });

        DB::table('jobs')->insert(
            array(
                'title'=>'Laravel Developer',
                'company_id'=>1,
                'category_id'=>1,
                'openingdate'=>'2019-5-5',
                'closingdate'=>'2019-6-6',
                'salary'=>'As Per Company Salary Scale',
                'nationality'=>'Afghan',
                'probation'=>'3 months',
                'nationality'=>'Afghan',
                'gender'=>'any',
                'numberofjobs'=>1,
                'vacancynumber'=>'HQP-97I',
                'contracttype'=>'Permanent',
                'contractduration'=>'1 year',
                'extensionpossibility'=>true,
                'worktype'=>'Full Time',
                'travelpossibility'=>true,
                'aboutcompany'=>'N/A',
                'jobdescription'=>'N/A',
                'responsibilities'=>'N/A',
                'qualifications'=>'N/A',
                'guide'=>'N/A',

                'experienceyears'=>3,
                )
        );
        DB::table('jobs')->insert(
            array(
                'title'=>'English Teacher',
                'company_id'=>1,
                'category_id'=>2,
                'openingdate'=>'2019-11-12',
                'closingdate'=>'2019-07-09',
                'salary'=>'As Per Company Salary Scale',
                'nationality'=>'Afghan',
                'probation'=>'1 months',
                'gender'=>'any',
                'numberofjobs'=>45,
                'vacancynumber'=>'ET-TFE3I',
                'contracttype'=>'Permanent',
                'contractduration'=>'1 year',
                'extensionpossibility'=>true,
                'worktype'=>'Full Time',
                'travelpossibility'=>true,
                'aboutcompany'=>'N/A',
                'jobdescription'=>'N/A',
                'responsibilities'=>'N/A',
                'qualifications'=>'N/A',
                'guide'=>'N/A',

                'experienceyears'=>3,
                )
        );
        DB::table('jobs')->insert(
            array(
                'title'=>'Finance Manager',
                'company_id'=>1,
                'category_id'=>3,
                'openingdate'=>'2019-11-12',
                'closingdate'=>'2019-07-09',
                'salary'=>'As Per Company Salary Scale',
                'nationality'=>'Afghan',
                'probation'=>'6 months',
                'gender'=>'female',
                'numberofjobs'=>1,
                'vacancynumber'=>'YHG-927',
                'contracttype'=>'Permanent',
                'contractduration'=>'1 year',
                'extensionpossibility'=>true,
                'worktype'=>'Part Time',
                'travelpossibility'=>false,
                'aboutcompany'=>'N/A',
                'jobdescription'=>'N/A',
                'responsibilities'=>'N/A',
                'qualifications'=>'N/A',
                'guide'=>'N/A',

                'experienceyears'=>6,
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
        Schema::dropIfExists('jobs');
    }
}
