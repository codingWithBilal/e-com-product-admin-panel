<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('canonical')->nullable();
            $table->string('permalink', 400)->nullable();
            $table->string('image')->nullable();
            $table->text('keywords')->nullable();
            $table->string('fb_title')->nullable();
            $table->string('fb_type')->nullable();
            $table->string('fb_image')->nullable();
            $table->string('fb_site_name')->nullable();
            $table->text('fb_description')->nullable();
            $table->string('twt_title')->nullable();
            $table->string('twt_creator')->nullable();
            $table->string('twt_image')->nullable();
            $table->string('twt_site')->nullable();
            $table->text('twt_description')->nullable();
            $table->json('schema')->nullable();
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
        Schema::dropIfExists('seos');
    }
}
