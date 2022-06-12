@extends('layout.admin')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Tambah Data Kamar</h1>
    </div>
    <form class="user" action="{{url('/kamar-store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="type_kamar" name="type_kamar" placeholder="Type Kamar">
        </div><div class="form-group">
            <input type="text" class="form-control form-control-user" id="stok_kamar" name="stok_kamar" placeholder="Jumlah Kamar">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga">
        </div>
        <div class="form-group">
            <input type="file" class="" id="gambar_kamar" name="gambar_kamar" placeholder="Gamabar Kamar" style="font-size: 0.8rem; padding: 10px; height: 48px;">
        </div>
        <div class="box-footer mt-4">
            <button type="submit" class="btn btn-secondary btn-user">Batal</button>
            <button type="submit" class="btn btn-primary btn-user pull-right">Simpan</button>
        </div>
    </form>
</div>
@endsection