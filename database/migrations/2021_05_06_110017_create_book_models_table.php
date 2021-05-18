<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_models', function (Blueprint $table) {
            $table->id("id");
            $table->String("bname");
            $table->String("bauthor");
            $table->String("bgenre");
            $table->String("bpublisher");
            $table->String("bdescription");
            $table->String("bimage");
            $table->String("bprice");
            $table->String("bstock");
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
        Schema::dropIfExists('book_models');
    }
}
