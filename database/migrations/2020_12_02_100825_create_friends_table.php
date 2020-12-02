<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->unsignedBigInteger('user_send');
            $table->unsignedBigInteger('user_request');
            $table->primary(['user_send','user_request']);
            $table->foreign('user_send')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_request')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('status')->nullable()->default(false);
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
        Schema::dropIfExists('friends');
    }
}
