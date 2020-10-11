<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            //user_id, fname, lname, dob, email, phone, phone_confirm, avatar_type, avatar_location, type,
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->date('dob')->nullable();
            $table->string('email');
            $table->string('phone', 26)->nullable();
            $table->boolean('phone_confirm')->default(0);
            $table->string('avatar_type')->default('gravatar');
            $table->string('avatar_location')->nullable();
            $table->enum('type', array('regular', 'farmer', 'trader', 'transporter'))->nullable()->index();
            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
}
