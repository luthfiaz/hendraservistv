@extends('layout.welcome')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/custom.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/plugins/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/plugins/slick/slick-theme.css') }}">

	<style type="text/css">
		
		.highlight {
		    display: inline;
		    background: $color-red;
		    color: $color-white; 
		    padding: $title-pad;
		  }

		.slider {
	        width: 60%;
	        height: auto;
	        margin: 100px auto;
	    }

	    .slick-slide {
	      	margin: 0px 20px;
	    }

	    .slick-slide img {
	      	width: 100%;
	    }

	    .slick-prev:before,
	    .slick-next:before {
	      	color: black;
	    }


	    .slick-slide {
	      	transition: all ease-in-out .3s;
	      	opacity: .2;
	    }
	    
	    .slick-active {
	      	opacity: 1;
	    }

	    .slick-current {
	      	opacity: 1;
	    }

	    @media screen and (max-width: 600px) {
	    	#galeri {
	    		visibility: hidden;
	    	}
	    }

	</style>
	
@endsection

@section('content')
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Estimasi durasi servis TV</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">LCD TV</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">4 - 8 minggu</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">LED TV</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">4 - 12 minggu</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white"></h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="regular white"></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover"><span class="label label-success" style="background: #fff; border-radius: 0 !important; color: #000">Diskon peluncuran website</span></h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular"><span class="label label-success" style="background: #fff; border-radius: 0 !important; color: #000">Hubungi kami hari ini untuk</span></h4>
							<h4 class="white heading small-pt title"><span class="label label-success" style="background: #fff; border-radius: 0 !important; color: #000">20% Discount</span></h4>
							<a href="#" class="btn btn-white-fill expand">Hubungi</a>
						</div>
					</div>
				</div> -->
				<div class="col-md-8">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Klien kami</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class="white heading content">"TV saya sudah berfungsi dengan baik, terima kasih HendraTV"</h4>
								<h5 class="white heading light author">Adam Jordan, Oktober 2017</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">"Akhirnya anak-anak bisa nonton kartun favorit mereka lagi"</h4>
								<h5 class="white heading light author">Greg Pardon, September 2017</h5>
							</div>
							<div class="item">
								<h4 class="white heading content">"Respon cepat, pelayanan ramah, dan servis cepat kelar. Thanks HendraTV"</h4>
								<h5 class="white heading light author">Christina Goldman, Oktober 2017</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Jasa kami</h2>
				<h4 class="light muted">Jasa terbaik yang kami tawarkan untuk Anda</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ asset('public/assets/img/icons/guru-blue.png') }}" alt="" class="icon">
						</div>
						<h4 class="heading">TV LCD dan LED</h4>
						<p class="description">TV Anda berhenti berfungsi? Keluaran audio bermasalah? Tidak bisa menyala? Kami ahlinya. </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ asset('public/assets/img/icons/weight-blue.png') }}" alt="" class="icon">
						</div>
						<h4 class="heading">Monitor dan Laptop</h4>
						<p class="description">Layar komputer Anda tidak bisa menyala, atau memiliki piksel mati? Kami bisa membantu Anda. </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="{{ asset('public/assets/img/icons/heart-blue.png') }}" alt="" class="icon">
						</div>
						<h4 class="heading">Antar-Jemput TV/Monitor</h4>
						<p class="description">Cukup hubungi kami dan akan segera kami jemput TV atau layar Anda, dan kami antar kembali ke rumah Anda. </p>
					</div>
				</div>
			</div>
		</div>

	</section>
	<section id="galeri" class="section">
			<div class="row">
				<div class="row text-center title">
					<h2>Galeri</h2>
				</div>
				<div class="col-md-12">
					<div class="regular-slick slider">
						
					    <div>
					      	<img src="{{ url('/public/assets/img/gallery/pic1.jpg') }}" alt="http://placehold.it/350x300?text=1">
					    </div>
					    <div>
					      	<img src="{{ url('/public/assets/img/gallery/pic2.jpg') }}" alt="http://placehold.it/350x300?text=2">
					    </div>
					    <div>
					      	<img src="{{ url('/public/assets/img/gallery/pic1.jpg') }}" alt="http://placehold.it/350x300?text=3">
					    </div>
					    <div>
					      	<img src="{{ url('/public/assets/img/gallery/pic2.jpg') }}" src="http://placehold.it/350x300?text=4">
					    </div>
					    <div>
					      	<img src="{{ url('/public/assets/img/gallery/pic1.jpg') }}" src="http://placehold.it/350x300?text=5">
					    </div>
					    <div>
					      	<img src="{{ url('/public/assets/img/gallery/pic2.jpg') }}" src="http://placehold.it/350x300?text=6">
					    </div>
							
				  	</div>
				</div>
			</div>
		
		<div class="cut cut-bottom"></div>
	</section>
	
	<section class="section section-padded blue-bg"">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-twitter fa-blue"></i>
							<h4 class="white light">@hendratv</h4>
							<h3 class="white light">Terima kasih telah menggunakan jasa dan layanan kami.</h4>
							<h4 class="light-white light">#servistv #jasaservis</h4>
						</div>
						<div class="item text-center">
							<i class="icon fa fa-twitter"></i>
							<h4 class="white light">@hendratv</h4>
							<h3 class="white light">Selamat HUT Kemerdekaan RI ke-72.</h4>
							<h4 class="light-white light">#indonesiamerdeka $17Agustus45 #servistv #jasaservis</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Hubungi kami</h2>
				<h4 class="light white">Silakan tinggalkan komentar Anda. Moderator kami akan segera menjawab pertanyaan Anda.</h4>
			</div>
			<div class="row no-margin">
				<div id="disqus_thread"></div>
				<script>
					
					(function() { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://led-1.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
					})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				<!-- <div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">Yoga Pilates</h4>
							<h4 class="white regular light">$850.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Cardio Training</h4>
							<h4 class="white regular light">$100.00 <span class="small-font">/ year</span></h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Sign Up Now</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
					</div>
				</div> -->

			</div>
		</div>
	</section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign Up</h3>
				<form action="" class="popup-form">
					<input type="text" class="form-control form-white" placeholder="Full Name">
					<input type="text" class="form-control form-white" placeholder="Email Address">
					<div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pricing Plan
						</button>
						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
							<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
							<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
							<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
							<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
						</ul>
					</div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection
	
@section('scripts')
	<!-- <script src="{{ asset('public/assets/plugins/owlcarousel/owl2.carousel.min.js') }}"></script> -->
	<script src="{{ asset('public/assets/plugins/slick/slick.min.js') }}"></script>
	<script>
	
	    $('[data-toggle="tooltip"]').tooltip();

	    $(".regular-slick").slick({
	        dots: true,
	        infinite: true,
	        slidesToShow: 3,
	        slidesToScroll: 3,
		  	autoplay: true,
		  	autoplaySpeed: 2000,
		  	adaptiveHeight: true
	      });
	
	</script>	
@endsection
