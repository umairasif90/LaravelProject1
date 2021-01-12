<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvariroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avarirooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roomimage');
            $table->string('roomname');
            $table->string('roomdesc');
            $table->string('roomprice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avarirooms');
    }
}
