<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pembeli');
            $table->foreign('id_pembeli')->references('id')->on('pembelis')->onDelete('cascade');
            $table->unsignedBigInteger('id_dataayam');
            $table->foreign('id_dataayam')->references('id')->on('dataayams')->onDelete('cascade');
            $table->integer('jumlah_ayam');
            $table->integer('harga_total');
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
        Schema::dropIfExists('transaksis');
    }
}
