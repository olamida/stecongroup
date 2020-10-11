<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            //user_id, department_id, gender, doj, dol
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            //$table->integer('position_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->enum('gender', array('male', 'female'))->index();
            //$table->integer('address')->nullable();
            //date of join
            $table->date('doj')->nullable();
            //date of left
            $table->date('dol')->nullable();
            $table->string('details')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
