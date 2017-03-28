<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageEntries', function (Blueprint $table) {
            $table->integer('entryid');
            // SENDFILE MI YOKSA LOADFILE mı araştırma yap   $table-> ;
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
        Schema::dropIfExists('imageEntries');
    }
}
