<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.a
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->integer('topicid')->unsigned();
            $table->string('content',200);
            $table->integer('like')->default(0);
            $table->integer('unlike')->default(0);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->foreign('userid')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('topicid')
                ->references('id')->on('topics')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrationst.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
