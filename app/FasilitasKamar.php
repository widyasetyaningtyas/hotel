<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    protected $table='fasilitas_kamar';
    protected $primaryKey='id_fk';
    public  $timestamps = false;
    protected $fillable=array('id_fk','id_kamar','nama_fasilitas','gambar_fk');

    public function kamar(){
        return $this->hasMany('App\Kamar');
    }
}
