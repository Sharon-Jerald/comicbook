<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_models', function (Blueprint $table) {
            $table->id();
            $table->String('customer_id');
            

            
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('book_models')->onUpdate('cascade')->OnDelete('cascade');

            $table->String('qty');
            $table->String('qtyprice');
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
        Schema::dropIfExists('cart_models');
    }
}
