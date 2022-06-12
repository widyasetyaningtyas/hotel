<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Pemesanan;
use App\Kamar;

class PencarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Request::get('q')=='') {
            $data['data']    = [];
        }else{
            $cari = Request::get('q');

            $query = DB::table('pemesanan')
            ->join('kamar','kamar.id_kamar','=','pemesanan.id_kamar')
            ->select('kamar.id_kamar','kamar.type_kamar','pemesanan.id_pemesanan','pemesanan.nama_pemesan','pemesanan.nama_tamu','pemesanan.tgl_cekin','pemesanan.tgl_cekout','pemesanan.jumlah_kamar','pemesanan.total_harga','pemesanan.status')
            

            ->where('pemesanan.nama_pemesan','like','%'.$cari.'%')
            ->orWhere('pemesanan.tgl_cekout','like','%'.$cari.'%')

            ->get();

            $data['data'] = $query;
        }

        // return response($data);

        return view('pemesanan.pencarian',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
