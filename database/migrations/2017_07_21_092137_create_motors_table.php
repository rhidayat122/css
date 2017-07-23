<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('merk_motor');
            $table->integer('tahun_keluar');
            $table->string('no_stnk');
            $table->string('no_polisi');
            $table->string('no_bpkb');
            $table->string('harga_beli');
            $table->string('warna');
            $table->integer('no_mesin');
            $table->integer('no_rangka');
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
        Schema::dropIfExists('motors');
    }
}
