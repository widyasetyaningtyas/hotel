@extends('layout.resepsionis')
@section('resepsionis')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit Data Pemesanan</h1>
    </div>
    <form class="user" action="{{url('#')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="nama_pemesan" name="nama_pemesan" placeholder="Nama Pemesan" value="{{$data->nama_pemesan}}" readonly>
        </div><div class="form-group">
            <input type="text" class="form-control form-control-user" id="id_kamar" name="id_kamar" placeholder="ID Kamar" value="{{$pemesanan->id_kamar}}" readonly>
        </div>
        <div class="form-group">
            <input type="date" class="form-control form-control-user" id="tgl_cekin" name="tgl_cekin" placeholder="Tanggal Cekin" value="{{$pemesanan->tgl_cekin}}" readonly>
        </div>
        <div class="form-group">
            <input type="date" class="form-control form-control-user" id="tgl_cekout" name="tgl_cekout" placeholder="Tanggal Cekout" value="{{$pemesanan->tgl_cekout}}" readonly>
        </div>
        <div class="form-group">
            <input type="number" class="form-control form-control-user" id="total_harga" name="total_harga" placeholder="Total Harga" value="{{$pemesanan->total_harga}}" readonly>
        </div>
        <div class="form-group">
            <select name="status" class="form-control" id="status" placeholder="Pilih Status" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5 rem; height: 48px;" value="{{$pemesanan->status}}">
                <option>{{$pemesanan->status}}</option>
                <option>Pilih Status</option>
                <option value="Cekin">Cekin</option>
                <option value="Cekout">Cekout</option>
            </select>
        </div>
        <div class="box-footer mt-4">
            <button type="submit" class="btn btn-secondary btn-user">Batal</button>
            <button type="submit" class="btn btn-primary btn-user pull-right">Simpan</button>
        </div>
    </form>
</div>
@endsection