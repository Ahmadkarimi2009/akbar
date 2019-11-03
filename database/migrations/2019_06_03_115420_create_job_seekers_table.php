<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('lastname');
            $table->string('cv')->default('n/a');
            $table->integer('phone');
            $table->string('city');
            $table->string('address');
            $table->boolean('status')->default(false); // Shows whether the jobseeker is available or employed
            $table->string('website')->default('n/a');

            $table->timestamps();
        });
        DB::table('job_seekers')->insert(
            array(
                'user_id' => 2,
                'lastname'=>'ahmad',
                'phone' => 748954410,
                'city' => "kabul",
                'status'=> 0,
                'address'=>"Omid-e-sabz township"
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
        Schema::dropIfExists('job_seekers');
    }
}
