@extends('layout.admin')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Tambah Data Fasilitas Hotel</h1>
    </div>
    <form class="user" action="{{url('/fasilitas_hotel-store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="nama_fasilitas" name="nama_fasilitas" placeholder="Nama Fasilitas">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" style="font-size: 0.8rem; border-radius: 1rem; padding: 1.5 rem; height: 100px;"></textarea>
        </div>
        <div class="form-group">
            <input type="file" class="" id="gambar_fh" name="gambar_fh" placeholder="Gamabar Fasilitas" style="font-size: 0.8rem; padding: 10px; height: 48px;">
        </div>
        <div class="box-footer mt-4">
            <button type="submit" class="btn btn-secondary btn-user">Batal</button>
            <button type="submit" class="btn btn-primary btn-user pull-right">Simpan</button>
        </div>
    </form>
</div>
@endsection