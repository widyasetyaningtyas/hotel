<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar;

class AdminKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kamar']= Kamar::get();
        return view('kamar.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->gambar_kamar;
        $namaFile = $nm->getClientOriginalName();

        $kamar = new Kamar;
        $kamar->type_kamar = $request->type_kamar;
        $kamar->stok_kamar = $request->stok_kamar;
        $kamar->harga = $request->harga;
        $kamar->gambar_kamar = $namaFile;

        $nm->move(public_path().'/img', $namaFile);
        $kamar->save();

        return redirect('kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kamar)
    {
        $data['kamar']= Kamar::find($id_kamar);
        return view('kamar.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kamar)
    {
        $data['kamar']= Kamar::find($id_kamar);
        return view('kamar.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kamar)
    {
        $data = Kamar::find($id_kamar);

        $data->type_kamar = $request->input('type_kamar');
        $data->stok_kamar = $request->input('stok_kamar');
        $data->harga = $request->input('harga');

        if ($request->hasfile('gambar_kamar')) {
            $file = $request->file('gambar_kamar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/',$filename);
            $data->gambar_kamar = $filename;
        }

        $data->save();

        return redirect('kamar')->with('kamar',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kamar)
    {
        $kamar = Kamar::find($id_kamar)->delete();
        return redirect('kamar');
    }
}
