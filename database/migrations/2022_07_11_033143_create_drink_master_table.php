<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_master', function (Blueprint $table) {
            $table->id('drink_id');
            $table->string('drink_name');
            $table->unsignedBigInteger('price');
            $table->string('img');
            $table->unsignedBigInteger('status');
            $table->dateTime('create_datetime');
            $table->dateTime('update_datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drink_master');
    }
}
