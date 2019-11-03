<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name', 100); // Name of the company
            $table->text('profile_description', 1000); // Short Description about the company which will appear in every job details
            $table->string('website', 300)->default('N/A'); // Website address of the company
            $table->boolean('status')->default(false); // Check whether the company has varifies it's accound or not
            $table->string('varificationcode', 100); //Contains the varification code for the account
            $table->string('type', 30);// Shows whether a company is private or governmental
            $table->integer('phone')->default('0');// Shows whether a company is private or governmental
            $table->string('city', 30)->default('N/A');// Shows whether a company is private or governmental
            $table->string('address')->default('N/a');// Shows whether a company is private or governmental
            $table->boolean('completion', 50)->default(false);// Indicates whether the profile of the company is complete or not. Used after the registration of the company to complete it's profile info
            $table->timestamps();
        });
        DB::table('companies')->insert(
            array(
                'user_id' => 1,
                'name'=>'apple',
                'profile_description' => "N/A",
                'website' => "N/A",
                'status'=> 1,
                'varificationcode'=> 'jasi3354895342iudn385',
                'type'=> 'private',
                'completion'=> 1
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
        Schema::dropIfExists('companies');
    }
}
