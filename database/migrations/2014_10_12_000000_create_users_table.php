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
                'name'=>'Apple',
                'email' => "apple@gmail.com",
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password'=> bcrypt('apple'),
                'avatar'=> 'assets/avatars/company.png',
                'usertype'=> 2
            )
        );
        DB::table('users')->insert(
            array(
                'name'=>'Ahmad',
                'email' => "ahmad@gmail.com",
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password'=> bcrypt('ahmad'),
                'avatar'=> 'assets/avatars/user.jpg',
                'usertype'=> 3
            )
        );
        DB::table('users')->insert(
            array(
                'name'=>'Fattah',
                'email' => "fkazimi5@gmail.com",
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password'=> bcrypt('applicationmis'),
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
