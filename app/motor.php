<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    protected $fillable = ['merk_motor','tahun_keluar','no_stnk','no_polisi','no_bpkb','harga_beli','warna','no_mesin','no_rangka'];

    public function motors()
    {
    	return $this->hasMany('App\transaksi_beli');
    	return $this->hasMany('App\transaksi_jual');
    	return $this->hasMany('App\motor_jual');
    }
}
