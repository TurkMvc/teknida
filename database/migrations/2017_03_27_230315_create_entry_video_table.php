<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videoEntries', function (Blueprint $table) {
            $table->integer('entryid');
            // SENDFILE MI YOKSA LOADFILE mı araştırma yap$table->string('');
            $table->foreign('entryid')
                ->references('id')->on('entry')
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
        Schema::dropIfExists('videoEntries');
    }
}
