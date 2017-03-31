<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMessegesTable extends Migration
{
    public function up()
    {
        Schema::create('user_messages', function (Blueprint $table) {
            $table->integer('senderid')->unsigned();
            $table->integer('receiverid')->unsigned();
            $table->timestamp('date');
            $table->string('message',230);
            $table->char('read',1)->default('f');
            $table->foreign('senderid')
                ->references('id')->on('users');
            $table->foreign('receiverid')
                ->references('id')->on('users');
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_messages');
    }
}


