<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_jual extends Model
{
    protected $fillable = ['motorbeli_id','pembeli_id','tgl','total_harga'];

    public function motor_jual()
    {
    	return $this->belongsTo('App\karyawan');
    	return $this->belongsTo('App\konsumen');
    	return $this->belongsTo('App\motor_jual');
    }
}