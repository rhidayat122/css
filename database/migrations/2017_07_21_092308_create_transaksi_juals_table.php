<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_juals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('karyawan_id')->unsigned();
            $table->integer('motorbeli_id')->unsigned();
            $table->integer('pembeli_id');
            $table->date('tgl');
            $table->integer('total_harga');
            $table->timestamps();


            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('motorbeli_id')->references('id')->on('motor_juals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pembeli_id')->references('id')->on('konsumens')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_juals');
    }
}
