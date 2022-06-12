<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FasilitasHotel;

class AdminFasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['fasilitas_hotel']= FasilitasHotel::get();
        return view('fasilitas_hotel.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas_hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->gambar_fh;
        $namaFile = $nm->getClientOriginalName();

        $fasilitas_hotel = new FasilitasHotel;
        $fasilitas_hotel->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas_hotel->keterangan = $request->keterangan;
        $fasilitas_hotel->gambar_fh = $namaFile;

        $nm->move(public_path().'/img', $namaFile);
        $fasilitas_hotel->save();

        return redirect('fasilitas_hotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_fh)
    {
        $data['fasilitas_hotel']= FasilitasHotel::find($id_fh);
        return view('fasilitas_hotel.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_fh)
    {
        $data['fasilitas_hotel']=FasilitasHotel::find($id_fh);
        return view('fasilitas_hotel.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_fh)
    {
        $data = FasilitasHotel::find($id_fh);

        $data->nama_fasilitas = $request->input('nama_fasilitas');
        $data->keterangan = $request->input('keterangan');

        if ($request->hasfile('gambar_fh')) {
            $file = $request->file('gambar_fh');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/',$filename);
            $data->gambar_fh = $filename;
        }

        $data->save();

        return redirect('fasilitas_hotel')->with('fasilitas_hotel',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_fh)
    {
        $fasilitas_hotel = FasilitasHotel::find($id_fh)->delete();
        return redirect('fasilitas_hotel');
    }
}
