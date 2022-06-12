@extends('dashboard')
@section('artikel')

<section class="w3l-stats">
    <div class="main-w3 py-5">
        <div class="container py-lg-3">
        <form action="{{url('psn')}}" method="POST">
            @csrf
            <div class="row">
              @foreach($data as $key => $value)
                <div class="col-md-6 title">
                    <h3 class="title-big">Our Room Facilities</h3>
                    <img class="img-fluid" src="{{ asset('img/'. $value->gambar_kamar ) }}" alt="">
                </div>

                <div class="col-md-6" style="margin-top: 70px;">
                    <h3>{{$value->type_kamar}}</h3>
                    <input type="text" hidden="" name="type_kamar" value="{{$value->type_kamar}}">
                    <input type="text" hidden="" name="id_kamar" value="{{$value->id_kamar}}">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Sisa Kamar </p>
                            <p>Harga Permalam </p>
                            </br>
                            <p>Room Facility</p>
                            <p>{{$value->nama_fasilitas}}</p>
                        </div>
                        <div class="col-md-8">
                            <p>: {{$value->jumlah_kamar}}</p>
                            <p>: Rp. {{ number_format($value->harga)}},-</p>
                        </div> 
                    </div>
                </div>
                @endforeach
            </div>
        </form>
                <div class="bottom-btn col-md-8 col-sm-8 mt-5">
                    <a href="{{url('pesan')}}" class="btn btn-style btn-primary w-100 px-2">Book Now</a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection