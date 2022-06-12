@extends('dashboard')
@section('artikel')

<section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class="owl-one owl-carousel owl-theme">
             <div class="item">
                 <li>
                     <div class="slider-info banner-view bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Take a break and give your soul what it needs
                                     </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{url('room')}}"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info  banner-view banner-top1 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Enjoy the comforts of home in the heart of the city</h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{url('room')}}"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top2 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>The greatest gift you can give yourself is a little bit of your own attention
                                     </h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{url('room')}}"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top3 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                     <h5>Learn to relax. Your body is precious, as it houses your mind and spirit</h5>
                                     <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{url('room')}}"> Our
                                         Services</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
         </div>
     </div>
 </section>
 
<!-- //w3l-availability-form-section -->
<!-- about -->
<section class="w3l-about py-5">
	<div class="container py-sm-4">
		<div class="row">
			<div class="col-lg-6 about-left mb-md-0 mb-5">
				<h3 class="title-big">Relax in our Resort</h3>
				<h5>We make the best for all our customers.</h5>
				<p class="mt-3">THE AZANA HOTEL is a unique, contemporary, 100% smoke-free hotel for travelers who love
                    active and healthy lifestyle while appreciating good design, comfortable rooms, professional service and facilities
                    which is good but choose to choose a reasonable budget. Each of the 150 designed rooms
                    for business work and leisure providing creative space and relaxing stays.</p>
				<a href="{{url('room')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Book Now</a>
			</div>
			<div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
				<img src="assets/images/top.jpg" alt="" class="img-fluid img-border mt-4" />
				<img src="assets/images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
			</div>
		</div>
	</div>
</section>
<!-- //about -->
<div class="best-rooms py-5">
    <div class="container py-lg-5 py-sm-4">
        <h3 class="title-big text-center">Best Rooms</h3>
        <div class="ban-content-inf row py-lg-3">
            <div class="maghny-gd-1 col-lg-6 mt-3">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="assets/images/room1.jpg" alt="">
                        <figcaption class="w3set-hny">
                            <div>
                                <h4 class="top-text">Luxury Hotel and Best Resort
                                    <span>Peaceful Place to stay</span></h4>
                                <p>From Rp. 1.200.000,-</p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="room-single.html">Luxury Hotel</a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> 2 Guests</li>
                            <li><span class="fa fa-bed"></span> Double bed</li>
                            <li><span class="fa fa-bed"></span> 1.393 551 174 199 1 m<sup>2</sup></li>
                        </ul>
                        <p>The warm hospitality and carefully designed rooms allow you to relax in comfort and stay energetic.</p>
                    </div>
                </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                @foreach ($kamar as $data)
                    <div class="maghny-gd-1 col-6 mt-3">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="{{ asset('img/'. $data->gambar_kamar ) }}" alt="">
                                <figcaption>
                                    <div>
                                        <h4 style="margin-top: -25px;">{{$data->type_kamar}}</h4>
                                        <p>From Rp. {{ number_format($data->harga)}},-</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<section class="w3l-index3">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="assets/images/videobg.jpg" alt="" class="img-fluid" />
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/246941769" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
                    <h6>Discover our Locations</h6>
                    <h3 class="title-big">20 Years of Hotels and Resort Experience</h3>
                    <ul class="w3l-right-book mt-4">
                        <li><span class="fa fa-check" aria-hidden="true"></span>We make the best for all our customers</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Follow our Resort Luxury Hotels</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Luxury hotels and best resorts</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Double rooms and family rooms</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Enjoy a luxury experience</li>
                    </ul>
                    <a href="{{url('room')}}" class="btn btn-style btn-primary mt-4">Check all packages</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quotation -->
<div class="quotation py-5">
	<div class="container py-xl-5 py-lg-3">
		<div class="welcome-left text-center py-md-5 py-3">
			<h3>Enjoy a Luxury experience. Discover our locaions. Relax and enjoy your holiday</h3>
			<a href="{{url('room')}}" class="btn btn-style transparent-btn mt-sm-5 mt-4 mr-2">Book Now</a>
			<a href="{{url('contact')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Contact Us</a>
		</div>
	</div>
</div>
<!-- //quotation -->

<!-- <section class="w3l-logos py-5">
    <div class="container py-lg-3">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
                <img src="assets/images/logo1.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
                <img src="assets/images/logo2.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-sm-0 mt-4">
                <img src="assets/images/logo3.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-md-0 mt-4">
                <img src="assets/images/logo4.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
                <img src="assets/images/logo2.jpg" alt="company-logo" class="img-fluid" />
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
                <img src="assets/images/logo1.jpg" alt="company-logo" class="img-fluid" />
            </div>
        </div>
    </div> -->
</section>
@endsection