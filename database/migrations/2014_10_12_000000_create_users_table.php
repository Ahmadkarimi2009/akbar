<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar');
            $table->string('usertype');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'name'=>'Test Company',
                'email' => "test_company@gmail.com",
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password'=> bcrypt('testcompany123'),
                'avatar'=> 'assets/avatars/company.png',
                'usertype'=> 2
            )
        );
        DB::table('users')->insert(
            array(
                'name'=>'Test User',
                'email' => "test_user@example.com",
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password'=> bcrypt('testuser123'),
                'avatar'=> 'assets/avatars/user.jpg',
                'usertype'=> 3
            )
        );
        DB::table('users')->insert(
            array(
                'name'=>'Admin',
                'email' => "admin@example.com",
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password'=> bcrypt('admin123'),
                'avatar'=> 'assets/avatars/user.jpg',
                'usertype'=> 1
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
        Schema::dropIfExists('users');
    }
}
