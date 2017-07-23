<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $fillable = ['nama','alamat','no_ktp','no_hp','status','username','password'];

    public function karyawans()
    {
    	return $this->hasMany('App\transaksi_beli');
    	return $this->hasMany('App\transaksi_jual');
    }
}
