<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    protected $fillable = ['nama','alamat','no_hp','no_ktp','status'];

    public function konsumens()
    {
    	return $this->hasMany('App\transaksi_beli');
    	return $this->hasMany('App\transaksi_jual');
    }
}
