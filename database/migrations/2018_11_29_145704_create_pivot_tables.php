<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one_two', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('one_id');
            $table->bigInteger('two_id');
            $table->timestamps();
        });

        Schema::create('three_two', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('two_id');
            $table->bigInteger('three_id');
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
        Schema::dropIfExists('one_two');
        Schema::dropIfExists('two_three');
    }
}
