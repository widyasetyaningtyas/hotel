@extends('dashboard')
@section('artikel')

<div class="w3l-stats best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <div class="maghny-gd-1">
            <div class="row about-text">
                <div class="col-lg-12">
                    <h3 class="title-big">Choose Your Room Type According To Your Needs</h3>
                    <p>THE AZANA HOTEL provides various types of rooms. Of course,
                      for those of you who don't have too much money, don't hesitate to book a hotel,
                      because at THE AZANA HOTEL provides pocket friendly prices, starting from Rp. 200,000,-.</p>
                </div>
            </div>
            <div class="middle-section row mt-lg-5 pt-md-3">
                @foreach($data as $key => $value)
                <div class="three-grids-columns col-lg-4 col-md-12" style="padding-top: 30px;">
                    <img src="{{asset('img/'.$value->gambar_kamar)}}" width="100%"; height="auto";>
                    <div class="info">
                        <h4>{{$value->type_kamar}}</h4>
                        <p>Rp. {{ number_format($value->harga)}},-</p>
                        <p style="font-weight: bold; margin-top: 10px;">Fasilitas Kamar</p>
                        <p>{{$value->nama_fasilitas}}</p>                            
                        <a href="{{url('pesan-'.$value->id_kamar)}}"><input type="submit"  class="btn btn-style btn-primary w-100 px-2 mt-2" name="" value="Pesan"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<section class="w3-about-2" id="features">
    <div class="w3-services-ab py-5">
        <div class="container py-lg-4 py-md-3">
            <div class="title-section">

                <div class="title-line">
                </div>
            </div>
            <div class="row w3-services-grids">
                <div class="col-lg-9 w3-services-right-grid pl-lg-5 mx-auto">
                    <h4 class="mb-md-5 mb-4">Why book AT THE AZANA HOTEL ?</h4>
                    <div class="fea-gd-vv row">
                        <div class="col-md-6">
                            <div class="float-lt feature-gd">
                                <div class="icon"> <span class="fa fa-file-text-o" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>Various Options</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">
                            <div class="float-mid feature-gd">
                                <div class="icon"> <span class="fa fa-trophy" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>Best Price Guarantee</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 pt-md-2">
                            <div class="float-rt feature-gd">
                                <div class="icon"> <span class="fa fa-clone" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>No Hidden Costs</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 pt-md-2">
                            <div class="float-lt feature-gd">
                                <div class="icon"> <span class="fa fa-bullseye" aria-hidden="true"></span></div>
                                <div class="icon-info">
                                    <h5>More Benefits</h5>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection