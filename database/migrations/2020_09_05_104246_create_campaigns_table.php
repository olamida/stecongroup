<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            //user_id, web_id, campaign_id, subject, status, content, emails_sent, sent_time
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('web_id');
            $table->string('campaign_id', 50);
            $table->string('subject', 150);
            $table->string('status', 30)->default('Draft');
            $table->longText('content')->nullable();
            $table->integer('emails_sent')->default('0');
            $table->string('sent_time')->nullable();
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
        Schema::dropIfExists('campaigns');
    }
}
