<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->timestamps();
        });
        DB::table('book_categories')->insert(
            array(
                'category'=>'Health/Medical',
                )
        );
        DB::table('book_categories')->insert(
            array(
                'category'=>'Novel and Comics',
                )
        );
        DB::table('book_categories')->insert(
            array(
                'category'=>'Scientific',
                )
        );
        DB::table('book_categories')->insert(
            array(
                'category'=>'Computer Science',
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
        Schema::dropIfExists('book_categories');
    }
}
