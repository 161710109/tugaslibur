<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = array('nama','foto');

    public function mobil(){
    	return $this->hasMany('App\mobil','id_mobil');
    }
}
