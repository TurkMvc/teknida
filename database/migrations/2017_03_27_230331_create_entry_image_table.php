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
            $table->integer('id')->unsigned();
            // SENDFILE MI YOKSA LOADFILE mı araştırma yap   $table-> ;
            $table->foreign('id')
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
        Schema::dropIfExists('imageEntries');
    }
}
