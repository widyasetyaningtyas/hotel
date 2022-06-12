@extends('layout.admin')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Show Data Fasilitas Kamar</h1>
    </div>
        <div class="form-group">
            <label><strong>ID Kamar</strong></label>
            <input type="text" class="form-control form-control-user" id="nama_fasilitas" name="nama_fasilitas" placeholder="Nama Fasilitas" value="{{$fasilitas_kamar->id_kamar}}">
        </div>
        <div class="form-group">
            <label><strong>Nama Fasilitas</strong></label>
            <input type="text" class="form-control form-control-user" id="nama_fasilitas" name="nama_fasilitas" placeholder="Nama Fasilitas" value="{{$fasilitas_kamar->nama_fasilitas}}">
        </div>
        <div class="form-group">
            <img src="{{ asset('img/'. $fasilitas_kamar->gambar_fk ) }}" alt="" height="200px;" style="padding: 10px;">
        </div>
    </form>
</div>
@endsection