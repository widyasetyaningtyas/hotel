@extends('layout.admin')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Tambah Data Fasilitas Kamar</h1>
    </div>
    <form class="user" action="{{url('/fasilitas_kamar-update-'.$fasilitas_kamar->id_fk)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label><strong>Type Kamar</strong></label>
            <select name="id_kamar" class="form-control" id="id_kamar" placeholder="Pilih Data Kamar" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5 rem; height: 48px;" value="{{$fasilitas_kamar->id_kamar}}">
                <option>{{$fasilitas_kamar->id_kamar}}</option>
                @foreach ($kamar as $data)
                <option value="{{$data->id_kamar}}">{{$data->type_kamar}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label><strong>Nama Fasilitas</strong></label>
            <input type="text" class="form-control form-control-user" id="nama_fasilitas" name="nama_fasilitas" placeholder="Nama Fasilitas" value="{{$fasilitas_kamar->nama_fasilitas}}">
        </div>
        <div class="form-group">
            <img src="{{ asset('img/'. $fasilitas_kamar->gambar_fk ) }}" alt="" height="200px;" style="padding: 10px;">
        </div>
        <div class="form-group">
            <input type="file" class="" id="gambar_fk" name="gambar_fk" placeholder="Gamabar Kamar" style="font-size: 0.8rem; padding: 10px; height: 48px;">
        </div>
        <div class="box-footer mt-4">
            <button type="submit" class="btn btn-secondary btn-user">Batal</button>
            <button type="submit" class="btn btn-primary btn-user pull-right">Simpan</button>
        </div>
    </form>
</div>
@endsection