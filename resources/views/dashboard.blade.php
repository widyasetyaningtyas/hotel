<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>THE AZANA HOTEL</title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--w3l-header-->

<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="assets/images/logo-azana1.png" alt="Your logo" style="height:40px;" /></a>
			<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{url('home')}}">Home</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="{{url('room')}}">Room</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="{{url('facility')}}">Facility</a>
					</li>
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="{{url('contact')}}">Contact Us</a>
					</li>
				</ul>
				<!-- <a href="#booking" class="ml-3 book btn btn-secondary btn-style">LOGIN</a> -->
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
<!-- //w3l-header -->
 <!-- main-slider -->
 @yield('artikel')
<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
          <h6 class="footer-title-29">Contact Us</h6>
          <ul>
            <li>
                <p>
                    <a href="https://www.google.com/maps/place/SMK+Wikrama+1+Jepara/@-6.4970001,110.9024706,17z/data=!3m1!4b1!4m5!3m4!1s0x2e712f884ade49bd:0xd86405d4fab5f158!8m2!3d-6.4970001!4d110.9046593" target="blank">
                        <span class="fa fa-map-marker"></span> 
                        Jl. Kelet Ploso KM 36, Kelet, Keling, Karang Anyar, Kelet, Keling, Kabupaten Jepara, Jawa Tengah 59454
                    </a>
                </p>
            </li>
            <li><a href="tel:+62 812 2813 5732"><span class="fa fa-phone"></span> +62 812 2813 5732</a></li>
            <li><a href="mailto:widyasetyaningtyas26@gmail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                theazanahotel@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Useful Links</h6>
            <li><a href="{{url('home')}}">Home</a></li>
            <li><a href="{{url('room')}}">Rooms</a></li>
            <li><a href="{{url('facility')}}"> Facility</a></li>
            <li><a href="{{url('contact')}}">Contact us</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Another Sensation</h6>
            <div class="footer-post mb-4">
              <a href="https://www.google.com/search?q=pulau+karimun+jawa&sxsrf=APq-WBvui57Vr07NDqMfU4veo6kYbV54Qw%3A1645358641350&ei=MS4SYo_mFIXC3LUPxemvuAk&gs_ssp=eJzj4tTP1TdIMynJSzNg9BIqKM1JLFXITizKzC3NU8hKLE8EAJ0XCn8&oq=pulau+&gs_lcp=Cgdnd3Mtd2l6EAMYATIKCC4QsQMQ1AIQQzIECC4QQzIECC4QQzIICAAQgAQQsQMyCAguEIAEELEDMggIABCABBCxAzIFCAAQgAQyBQgAEIAEMgcILhCxAxBDMgUILhCxAzoHCAAQRxCwAzoHCAAQsAMQQzoKCAAQ5AIQsAMYADoMCC4QyAMQsAMQQxgBOhIILhDHARCvARDIAxCwAxBDGAE6CgguEMcBEK8BECc6CwguEIAEEMcBEK8BOhEILhCABBCxAxCDARDHARCvAToFCC4QgAQ6DgguEIAEELEDEMcBEK8BOggILhCxAxCDAToNCC4QxwEQrwEQ6gIQJzoHCCMQ6gIQJzoHCC4Q6gIQJzoECCMQJzoHCC4Q1AIQQzoECAAQQzoLCAAQgAQQsQMQgwFKBAhBGABKBAhGGAFQ_gJYqyBglC1oAnABeAKAAZkBiAHzDpIBBDEwLjiYAQCgAQGwAQrIARPAAQHaAQYIABABGAnaAQYIARABGAg&sclient=gws-wiz" target="blank">
              Karimunjawa Islands tourist attractions</a>
              <!-- <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p> -->
            </div>
            <div class="footer-post">
              <a href="https://www.google.com/search?q=pantai+kartini&sxsrf=APq-WBvRorqjXj9ixz33gJV4O7s7_cqCLA%3A1645358545389&ei=0S0SYp-qF8vB3LUPxb2XmAU&gs_ssp=eJzj4tZP1zc0MrbITSo2MmC0UjWoMEo1NzRMMzI0hQIrg4pkAxNjw1Rzo6TkZHMjg1RLL76CxLySxEyF7MSiksy8TABa8hMX&oq=pantai+kartini&gs_lcp=Cgdnd3Mtd2l6EAMYADIOCC4QgAQQsQMQxwEQrwEyCwguEIAEEMcBEK8BMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQ6BwgjEOoCECc6BwguEOoCECc6BAgjECc6CwgAEIAEELEDEIMBOgQILhBDOgsILhCABBCxAxCDAToICC4QsQMQgwE6CAgAEIAEELEDOgQIABBDOgoILhDHARCjAhBDOgoILhCxAxCDARBDOg0ILhCxAxDHARCjAhBDOgUILhCABDoHCAAQsQMQCjoHCAAQgAQQCjoHCC4QsQMQCjoECAAQCjoHCC4QsQMQQzoHCAAQsQMQQzoICC4QgAQQsQM6EQguEIAEELEDEIMBEMcBEK8BOg0ILhCxAxDHARCvARBDSgQIQRgASgQIRhgAUABY8FNg8mhoCHABeAOAAfAFiAGaIJIBDTcuNy4xLjEuMC4xLjKYAQCgAQGwAQrAAQE&sclient=gws-wiz" target="blank">
              Kartini Beach tourist attraction</a>
              <!-- <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p> -->
            </div>
            
        </div>
        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Newsletter </h6>
          <p>Enter your email and receive the latest news from us.
           We'll never share your email address</p>

          <form action="#" class="subscribe" method="post">
            <input type="email" name="email" placeholder="Your Email Address" required="">
            <button><span class="fa fa-envelope-o"></span></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="w3l-footer-29-main w3l-copyright">
  <div class="container">
    <div class="row bottom-copies">
      <p class="col-lg-8 copy-footer-29">© 2022 The Azana Hotel. All rights reserved | Designed by widyasetya</p>

      <div class="col-lg-4 main-social-footer-29">
        <a href="https://www.facebook.com/azanahotelsemarang" class="facebook" target="blank"><span class="fa fa-facebook"></span></a>
        <a href="https://twitter.com/azanaairportsmg" class="twitter" target="blank"><span class="fa fa-twitter"></span></a>
        <a href="https://www.instagram.com/theazanahotelairportsmg/" class="instagram" target="blank"><span class="fa fa-instagram"></span></a>
        <a href="https://www.linkedin.com/in/azana-hotel-management-24416325/" class="linkedin" target="blank"><span class="fa fa-linkedin"></span></a>
      </div>

    </div>
  </div>

 <!-- move top -->
 <button onclick="topFunction()" id="movetop" title="Go to top">
  &#10548;
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->
</section>

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for owlcarousel -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for owlcarousel -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>


<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>