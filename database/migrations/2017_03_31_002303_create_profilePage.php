<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilePage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilePage', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid',false)->unsigned();
            $table->integer('gonderiid',false)->unsigned();
            $table->timestamp('date');
            $table->foreign('userid')
                ->references('id')->on('users');
            $table->foreign('gonderiid')
                ->references('id')->on('pagePosts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profilePage');
    }
}
