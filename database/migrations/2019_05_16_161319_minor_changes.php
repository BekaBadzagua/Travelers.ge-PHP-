<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MinorChanges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('text');
        });
        Schema::table('sliders', function (Blueprint $table) {
            $table->dropColumn('text');
        });
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('map');
        });

        

        Schema::table('blogs', function (Blueprint $table) {
            $table->text('text')->nullable()->default(null);
        });
        Schema::table('sliders', function (Blueprint $table) {
            $table->text('text')->nullable()->default(null);
        });
        Schema::table('tours', function (Blueprint $table) {
            $table->text('map')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
