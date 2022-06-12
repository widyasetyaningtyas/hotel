<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table='tamu';
    protected $primaryKey='id_tamu';
    public  $timestamps = false;
    protected $fillable=array('id_tamu','username','password','nama_pemesan','email','no_hp','nama_tamu');

    // public function pemesanan()
    // {
    //     return $this->hasOne('App\Pemesanan', 'id_tamu', 'id_pemesanan');
    // }
}
