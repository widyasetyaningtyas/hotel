<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table='pemesanan';
    protected $primaryKey='id_pemesanan';
    public $timestamps= false;
    protected $fillable=array('id_pemesanan','nama_pemesan','email','no_telp','alamat','nama_tamu','id_kamar','tgl_cekin','tgl_cekout','jumlah_kamar','created_at','status');

    public function kamar(){
    	return $this->belongsTo('App\Kamar','id_kamar');
    }
}
