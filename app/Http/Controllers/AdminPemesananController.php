<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use App\Kamar;
use DB;

class AdminPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['query']= DB::table('pemesanan')
            ->join('kamar','kamar.id_kamar','=','pemesanan.id_kamar')
            ->select('kamar.id_kamar','kamar.type_kamar','pemesanan.id_pemesanan','pemesanan.nama_pemesan','pemesanan.nama_tamu','pemesanan.tgl_cekin','pemesanan.tgl_cekout','pemesanan.jumlah_kamar','pemesanan.total_harga','pemesanan.status')
            ->get();
        return view('pemesanan.index1',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rumah()
    {
        $data['query']= DB::table('pemesanan')
            ->join('kamar','kamar.id_kamar','=','pemesanan.id_kamar')
            ->select('kamar.id_kamar','kamar.type_kamar','pemesanan.id_pemesanan','pemesanan.nama_pemesan','pemesanan.nama_tamu','pemesanan.tgl_cekin','pemesanan.tgl_cekout','pemesanan.jumlah_kamar','pemesanan.total_harga','pemesanan.status')
            ->get();
        return view('pemesanan.index1',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pemesanan)
    {
        $data['pemesanan']= Pemesanan::find($id_pemesanan);
        return view('pemesanan.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pemesanan)
    {
        $data['pemesanan']=Pemesanan::find($id_pemesanan);
        return view('pemesanan.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);
        $pemesanan->status = "Cekout";
        $pemesanan->update();
        return redirect('pemesanan1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perbarui(Request $request, $id_pemesanan)
    {
        $pemesanan = Pemesanan::find($id_pemesanan);
        $pemesanan->status = "Cekout";
        $pemesanan->update();
        return redirect('pemesanan2');
    }}
