<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table='mobil';
    protected $fillable=['nama','plat_nomor','kapasitas','harga','jenis','warna','tahun','perseneling'];

    public function boking(){
    	return $this->hasMany('App\boking','id_mobil');
    }
    public function galeri(){
    	return $this->belongsTo('App\galeri','id_galeri');
    }
}
