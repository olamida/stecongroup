<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned()->index();
            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->string('description', 255)->nullable();
            $table->longText('content')->nullable();
            $table->enum('status', array('draft', 'publish', 'unpublish'))->index();
            $table->integer('post_views')->unsigned()->nullable();
            $table->boolean('comments')->default(0);
            $table->boolean('featured')->default(0);
            $table->string('featured_image')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
