@extends('dashboard')
@section('artikel')


<section class="w3l-stats">
    <div class="main-w3 py-5">
        <div class="container py-lg-3">
            <div class="row align-items-center">
                <section class="w3l-feature-2">
                    <div class="grid top-bottom py-5">
                        <div class="container py-md-5">
                            <h3 class="title-big text-center" style="margin-bottom: -20px; margin-top: -100px;">Our Hotel Facilities</h3>
                            
                            <div class="middle-section row mt-lg-5 pt-md-3">
                            @foreach ($fasilitas_hotel as $data)
                                <div class="three-grids-columns col-lg-4 col-md-6 mt-5">
                                <img class="img-fluid" src="{{ asset('img/'. $data->gambar_fh ) }}" alt="">
                                    <div class="info">
                                        <h4>{{$data->nama_fasilitas}}</h4>
                                        <p>{{$data->keterangan}}</p>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<section class="w3l-feature-2">
    <div class="grid top-bottom py-5">
        <div class="container py-md-5">
            <h3 class="title-big text-center">Our Room Facilities</h3>
            
            <div class="middle-section row mt-lg-5 pt-md-3">
            @foreach ($fasilitas_kamar as $data)
                <div class="three-grids-columns col-lg-4 col-md-6 mt-5">
                <img class="img-fluid" src="{{ asset('img/'. $data->gambar_fk ) }}" alt="">
                    <div class="info">
                        <h4>{{$data->nama_fasilitas}}</h4>
                        <!-- <p>Vestibulum ante ipsum primis in orci luctus et ultrices posuere cubilia Curae; Nulla
                            mollis dapibus nunc.</p> -->
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
@endsection