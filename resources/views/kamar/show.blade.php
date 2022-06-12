@extends('layout.admin')
@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Show Data Kamar</h1>
    </div>
        <div class="form-group">
            <label><strong>Type Kamar</strong></label>
            <input type="text" class="form-control form-control-user" id="type_kamar" name="type_kamar" placeholder="Type Kamar" value="{{$kamar->type_kamar}}">
        </div>
        <div class="form-group">
            <label><strong>Stok Kamar</strong></label>
            <input type="text" class="form-control form-control-user" id="stok_kamar" name="stok_kamar" placeholder="Stok Kamar" value="{{$kamar->stok_kamar}}">
        </div>
        <div class="form-group">
            <label><strong>Harga</strong></label>
            <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga" value="{{$kamar->harga}}">
        </div>
        <div class="form-group">
            <img src="{{ asset('img/'.$kamar->gambar_kamar)}}" alt="" height="200px;" style="padding: 10px;">
        </div>
    </form>
</div>
@endsection