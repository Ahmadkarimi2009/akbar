<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn');
            $table->string('name');
            $table->string('author');
            $table->string('translator');
            $table->string('edition');
            $table->string('printingdate');
            $table->string('category_id');
            $table->string('pagenumbers');
            $table->string('price');
            $table->string('language');
            $table->bigInteger('timesdownloaded')->default(0);
            $table->string('coverpage');
            $table->string('file');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
