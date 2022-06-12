@extends('layout.admin')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit Data Fasilitas Hotel</h1>
    </div>
    <form class="user" action="{{url('/fasilitas_hotel-update-'.$fasilitas_hotel->id_fh)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label><strong>Nama Fasilitas</strong></label>
            <input type="text" class="form-control form-control-user" id="nama_fasilitas" name="nama_fasilitas" placeholder="Nama Fasilitas" value="{{$fasilitas_hotel->nama_fasilitas}}">
        </div>
        <div class="form-group">
            <label><strong>Keterangan</strong></label>
            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" style="font-size: 0.8rem; border-radius: 1rem; padding: 1.5 rem; height: 100px;">{{$fasilitas_hotel->keterangan}}</textarea>
        </div>
        <div class="form-group">
            <img src="{{ asset('img/'. $fasilitas_hotel->gambar_fh ) }}" alt="" height="200px;" style="padding: 10px;">
        </div>
        <div class="form-group">
            <input type="file" class="" id="gambar_fh" name="gambar_fh" placeholder="Gamabar Kamar" style="font-size: 0.8rem; padding: 10px; height: 48px;">
        </div>
        <div class="box-footer mt-4">
            <button type="submit" class="btn btn-secondary btn-user">Batal</button>
            <button type="submit" class="btn btn-primary btn-user pull-right">Simpan</button>
        </div>
    </form>
</div>
@endsection