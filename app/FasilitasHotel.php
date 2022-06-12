<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    protected $table='fasilitas_hotel';
    protected $primaryKey='id_fh';
    public  $timestamps = false;
    protected $fillable=array('id_fh','nama_fasilitas','keterangan');
}
