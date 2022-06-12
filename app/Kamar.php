<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table='kamar';
    protected $primaryKey='id_kamar';
    public  $timestamps = false;
    protected $fillable=array('id_kamar','type_kamar','stok_kamar','harga','gambar_kamar');

    public function fasilitas_kamar(){
    	return $this->belongsTo('App\FasilitasKamar','id_kamar');
    }

    public function pemesanan(){
    	return $this->hasMany('App\Pemesanan','id_pemesanan');
    }
}
