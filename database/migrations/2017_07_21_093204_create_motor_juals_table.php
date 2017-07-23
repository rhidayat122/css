<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor_juals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motorbeli_id')->unsigned;
            $table->string('merk_motor');
            $table->integer('tahun_keluar', 4);
            $table->string('no_stnk');
            $table->string('no_polisi');
            $table->string('no_bpkb');
            $table->string('harga_jual');
            $table->string('warna');
            $table->integer('no_mesin');
            $table->integer('no_rangka');
            $table->timestamps();

            $table->foreign('motorbeli_id')->references('id')->on('motors')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motor_juals');
    }
}
