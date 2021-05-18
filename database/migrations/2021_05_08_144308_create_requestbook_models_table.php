<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestbookModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestbook_models', function (Blueprint $table) {
            $table->id();
            

            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('id')->on('customer_models')->onUpdate('cascade')->OnDelete('cascade');

            $table->String("rbname");
            $table->String("rbauthor");
            $table->String("rbpublisher");
            $table->String("rbqty");          
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
        Schema::dropIfExists('requestbook_models');
    }
}
