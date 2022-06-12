@extends('layout.admin')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Show Data Fasilitas Hotel</h1>
    </div>
        <div class="form-group">
            <label><strong>Nama Fasilitas</strong></label>
            <input type="text" class="form-control form-control-user" id="nama_fasilitas" name="nama_fasilitas" placeholder="Nama Fasilitas" value="{{$fasilitas_hotel->nama_fasilitas}}">
        </div>
        <div class="form-group">
            <label><strong>Keterangan</strong></label>
            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" style="border-radius: 1rem; padding: 1.5 rem; height: 100px;">{{$fasilitas_hotel->keterangan}}</textarea>
        </div>
        <div class="form-group">
            <img src="{{ asset('img/'. $fasilitas_hotel->gambar_fh ) }}" alt="" height="200px;" style="padding: 10px;">
        </div>
    </form>
</div>
@endsection