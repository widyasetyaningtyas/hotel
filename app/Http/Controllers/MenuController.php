<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;
use App\FasilitasKamar;
use App\FasilitasHotel;
use App\Pemesanan;
use DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function room(Request $request)
    {
        $data = DB::table('kamar')->join('fasilitas_kamar', 'kamar.id_kamar','=','fasilitas_kamar.id_kamar')->get();
        return view('menu.kamar',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fasilitas()
    {
        $fasilitas_hotel    = FasilitasHotel::get();
        $fasilitas_kamar    = FasilitasKamar::get();
        return view('menu.fasilitas', ['fasilitas_hotel'=>$fasilitas_hotel, 'fasilitas_kamar'=>$fasilitas_kamar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('menu.contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $data['kamar']= Kamar::paginate(6);
        return view('menu.home',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function detail_kamar($id_kamar)
    {
        // $kamar = Kamar::where('id_kamar', $id_kamar)->first();
        // $fasilitas_kamar = FasilitasKamar::where('id_kamar', $id_fk)->get();
        // return view('menu.detail_kamar', ['kamar' => $kamar, 'fasilitas_kamar' => $fasilitas_kamar]);

        $kamar = Kamar::where('id_kamar', $id_kamar)->first();
        return view('menu.detail_kamar', compact('kamar'));

        // $fasilitas_kamar = FasilitasKamar::publish()->whereHas('kamar',function($query) use($lug){
        //     return $query->where('slug',$slug);
        // })->paginate($this->perpage);

        // $kamar = Kamar::where('slug', $slug)->first();

        // return view('menu.detail_kamar',[
        //     'fasilitas_kamar' => $fasilitas_kamar,
        //     'kamar' => $kamar
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pesan($id_kamar)
    {
        $kamar = Kamar::where('id_kamar', $id_kamar)->first();
        return view('menu.pesan', ['kamar' => $kamar]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function konfirmasi(Request $request)
    {
        $pemesanan                  = new Pemesanan;
        $pemesanan->id_pemesanan    = $request->id_pemesanan;
        $pemesanan->nama_pemesan    = $request->nama_pemesan;
        $pemesanan->email           = $request->email;
        $pemesanan->no_telp         = $request->no_telp;
        $pemesanan->alamat          = $request->alamat;
        $pemesanan->nama_tamu       = $request->nama_tamu;
        $pemesanan->id_kamar        = $request->id_kamar;
        $pemesanan->tgl_cekin       = $request->tgl_cekin;
        $pemesanan->tgl_cekout      = $request->tgl_cekout;
        $pemesanan->jumlah_kamar    = $request->jumlah_kamar;
        $pemesanan->total_harga     = $request->total_harga;
        $pemesanan->status          = 'Cekin';
        $pemesanan->save();

        $data = DB::table('pemesanan')->join('kamar', 'kamar.id_kamar','=','pemesanan.id_kamar')->where('pemesanan.id_kamar',$request->id_kamar)->first();
        return view('menu.struk',compact('data'));
    }

    public function struk()
    {
        return view('menu.struk');
    }
}
