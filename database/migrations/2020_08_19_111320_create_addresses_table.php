<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            //house_no, street_name, locality, city, zipcode, state, country, other_details
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('type')->unsigned();
            $table->integer('house_no')->unsigned();
            $table->string('street', 250);
            $table->string('locality', 100)->nullable();
            $table->integer('city');
            $table->integer('zipcode')->unsigned()->nullable();
            $table->integer('state')->unsigned();
            $table->integer('country')->unsigned();
            $table->longText('details')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
