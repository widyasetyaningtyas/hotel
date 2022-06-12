<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FasilitasKamar;
use App\Kamar;
use DB;

class AdminFasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['query']= DB::table('fasilitas_kamar')
            ->join('kamar','kamar.id_kamar','=','fasilitas_kamar.id_kamar')
            ->select('kamar.id_kamar','kamar.type_kamar','fasilitas_kamar.id_fk','fasilitas_kamar.nama_fasilitas','fasilitas_kamar.gambar_fk')
            ->get();
        return view('fasilitas_kamar.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kamar'] = Kamar::get();
        return view('fasilitas_kamar.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->gambar_fk;
        $namaFile = $nm->getClientOriginalName();

        $fasilitas_kamar = new FasilitasKamar;
        $fasilitas_kamar->id_kamar = $request->id_kamar;
        $fasilitas_kamar->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas_kamar->gambar_fk = $namaFile;

        $nm->move(public_path().'/img', $namaFile);
        $fasilitas_kamar->save();

        return redirect('fasilitas_kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_fk)
    {
        $data['fasilitas_kamar']= FasilitasKamar::find($id_fk);
        return view('fasilitas_kamar.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_fk)
    {
        $data['kamar'] = Kamar::get();
        $data['fasilitas_kamar']= FasilitasKamar::find($id_fk);
        return view('fasilitas_kamar.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_fk)
    {
        $data = Fasilitaskamar::find($id_fk);

        $data->id_kamar = $request->input('id_kamar');
        $data->nama_fasilitas = $request->input('nama_fasilitas');

        if ($request->hasfile('gambar_fk')) {
            $file = $request->file('gambar_fk');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/',$filename);
            $data->gambar_fk = $filename;
        }

        $data->save();

        return redirect('fasilitas_kamar')->with('fasilitas_kamar',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_fk)
    {
        $fasilitas_kamar = FasilitasKamar::find($id_fk)->delete();
        return redirect('fasilitas_kamar');
    }
}
