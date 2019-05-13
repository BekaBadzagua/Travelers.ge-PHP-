<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->String('name');
            $table->String('img');
            $table->text('text');
            $table->integer('price')->nullable()->default(null);;
            $table->integer('smallprice')->nullable()->default(null);
            $table->integer('days')->nullable()->default(null);;
            $table->String('difficulty')->nullable()->default(null);;
            $table->String('map')->nullable()->default(null);;
            
            $table->unsignedInteger('place_id');
            $table->foreign('place_id')->references('id')->on('places');

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
        Schema::dropIfExists('tours');
    }
}
