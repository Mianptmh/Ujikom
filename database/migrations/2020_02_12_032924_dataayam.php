<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dataayam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataayams', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('jenis');
        $table->text('harga');
        $table->bigInteger('berat');
        $table->bigInteger('gambar');
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
        Schema::dropIfExists('dataayam');
    }
}
