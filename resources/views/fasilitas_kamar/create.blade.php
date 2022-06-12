@extends('layout.admin')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Tambah Data Fasilitas Kamar</h1>
    </div>
    <form class="user" action="{{url('/fasilitas_kamar-store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <select name="id_kamar" class="form-control" id="id_kamar" placeholder="Pilih Data Kamar" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5 rem; height: 48px;">
                <option>Pilih Data Kamar</option>
                @foreach ($kamar as $data)
                <option value="{{$data->id_kamar}}">{{$data->type_kamar}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="nama_fasilitas" name="nama_fasilitas" placeholder="Nama Fasilitas">
        </div>
        <div class="form-group">
            <input type="file" class="" id="gambar_fk" name="gambar_fk" placeholder="Gamabar Fasilitas" style="font-size: 0.8rem; padding: 10px; height: 48px;">
        </div>
        <div class="box-footer mt-4">
            <button type="submit" class="btn btn-secondary btn-user">Batal</button>
            <button type="submit" class="btn btn-primary btn-user pull-right">Simpan</button>
        </div>
    </form>
</div>
@endsection