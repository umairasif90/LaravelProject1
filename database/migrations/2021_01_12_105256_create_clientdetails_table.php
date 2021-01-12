<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotelname');
            $table->string('hotelroom');
            $table->string('roomprice');
            $table->string('clientprefix');
            $table->string('clientfirstname');
            $table->string('clientlastname');
            $table->string('clientemail');
            $table->string('clientphone');
            $table->string('checkindate');
            $table->string('checkoutdate');
            $table->string('clientcountry');
            $table->string('clientaddress');
            $table->string('clientcity');
            $table->string('clientstate');
            $table->string('clientzip');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientdetails');
    }
}
