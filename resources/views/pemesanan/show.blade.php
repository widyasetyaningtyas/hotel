@extends('layout.admin')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Show Data Pemesanan</h1>
    </div>
        <div class="form-group">
            <label><strong>Nama Pemesan</strong></label>
            <input type="text" class="form-control form-control-user" id="nama_pemesan" name="nama_pemesan" placeholder="Nama Pemesan" value="{{$pemesanan->nama_pemesan}}">
        </div>
        <div class="form-group">
            <label><strong>Nama Tamu</strong></label>
            <input type="text" class="form-control form-control-user" id="nama_tamu" name="nama_tamu" placeholder="Nama Tamu" value="{{$pemesanan->nama_tamu}}">
        </div>
        <div class="form-group">
            <label><strong>Tanggal Check-in</strong></label>
            <input type="text" class="form-control form-control-user" id="tgl_cekin" name="tgl_cekin" placeholder="Tgl Cekin" value="{{$pemesanan->tgl_cekin}}">
        </div>
        <div class="form-group">
            <label><strong>Tanggal Check-out</strong></label>
            <input type="text" class="form-control form-control-user" id="tgl_cekout" name="tgl_cekout" placeholder="Tgl Cekout" value="{{$pemesanan->tgl_cekout}}">
        </div>
        <div class="form-group">
            <label><strong>Jumlah Kamar</strong></label>
            <input type="text" class="form-control form-control-user" id="jumlah_kamar" name="jumlah_kamar" placeholder="Jumlah Kamar" value="{{$pemesanan->jumlah_kamar}}">
        </div>
        <div class="form-group">
            <label><strong>Total Harga</strong></label>
            <input type="text" class="form-control form-control-user" id="total_harga" name="total_harga" placeholder="Total Harga" value="{{$pemesanan->total_harga}}">
        </div>
        @if($pemesanan->status=='Cekin')
        <div class="form-group">
            <label><strong>Status</strong></label>
            <input type="text" class="form-control form-control-user btn btn-sm btn-primary" id="status" name="status" placeholder="Status" value="{{$pemesanan->status}}">
        </div>
        @else
        <div class="form-group">
            <label><strong>Status</strong></label>
            <input type="text" class="form-control form-control-user btn btn-sm btn-success" id="status" name="status" placeholder="Status" value="{{$pemesanan->status}}">
        </div>
        @endif
    </form>
</div>
@endsection