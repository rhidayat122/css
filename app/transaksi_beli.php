<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_beli extends Model
{
    protected $fillable = ['motorjual_id','penjual_id','tgl','total_harga'];

    public function motor_jual()
    {
    	return $this->belongsTo('App\karyawan');
    	return $this->belongsTo('App\konsumen');
    	return $this->belongsTo('App\motor');
    }
}
