<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_send');
            $table->unsignedBigInteger('user_request');
            $table->foreign('user_send')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_request')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('status')->nullable()->default(false);
            $table->text('context')->nullable();
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
        Schema::dropIfExists('messages');
    }
}
