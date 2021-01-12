<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInserttouristspotshomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inserttouristspotshomepages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('timage');
            $table->string('tname');
            $table->string('tdesc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inserttouristspotshomepages');
    }
}
