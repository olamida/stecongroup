<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *user_id, post_id, reply_id, body, aproval, ip, user_agent, 
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->integer('reply_id')->unsigned()->nullable();
            $table->text('body', 500);
            //$table->enum('status', array('pending', 'publish', 'spam'));
            $table->boolean('approval')->default(1);
            $table->string('ip', 15)->index()->nullable();
            $table->string('user_agent', 255)->nullable();
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
        Schema::dropIfExists('comments');
    }
}
