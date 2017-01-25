<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_replies', function (Blueprint $table) {
            $table->integer('entry_id')->unsigned();
            $table->integer('reply_id')->unsigned();
            $table->foreign('entry_id')
                ->references('id')->on('entries')
                ->onDelete('cascade');
            $table->foreign('reply_id')
                ->references('id')->on('entries')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entry_replies');
    }
}
