<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from amentotech.com/htmls/worktern/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 08:25:04 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="{{ asset('web/apple-touch-icon.png')}}">
	<link rel="icon" href="{{ asset('web/images/favicon.png') }}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('web/css/normalize.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/scrollbar.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/fontawesome/fontawesome-all.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/tipso.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/chosen.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/prettyPhoto.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/main.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/color.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/transitions.css')}}">
	<link rel="stylesheet" href="{{ asset('web/css/responsive.css')}}">
	<script src="{{ asset('web/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body class="wt-login">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader Start -->
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<!-- Preloader End -->
	<!-- Wrapper Start -->
	<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
		<!-- Content Wrapper Start -->
		<div class="wt-contentwrapper">

			<!-- Header Start -->
            @include('include.nav')
			<!--Home Banner End-->

			<!--Main Start-->
             @yield('body')
			<!--Main End-->
			<!--Footer Start-->
			<footer id="wt-footer" class="wt-footer wt-haslayout">
				<div class="wt-footerholder wt-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6">
								<div class="wt-footerlogohold">
									<strong class="wt-logo"><a href="index-2.html"><img src="{{ asset('web/images/logo/logo_white_transparent.png')}}" alt="company logo here" width="250px" height="250px"></a></strong>
									<div class="wt-description">
										<p>Dotem eiusmod tempor incune utnaem labore etdolore maigna aliqua enim poskina ilukita ylokem lokateise ination voluptate velit esse cillum dolore eu fugiat nulla pariatur lokaim urianewce <a href="javascript:void(0);">more...</a></p>
									</div>
									<ul class="wt-socialiconssimple wt-socialiconfooter">
										<li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
										<li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
										<li class="wt-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
										<li class="wt-instagram"><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
										<li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-footercol wt-widgetcompany">
									<div class="wt-fwidgettitle">
										<h3>Company</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">About Us</a></li>
										<li><a href="javascript:void(0);">How It Works</a></li>
										<li><a href="javascript:void(0);">Careers</a></li>
										<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
										<li><a href="javascript:void(0);">Trust &amp; Safety</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-footercol wt-widgetexplore">
									<div class="wt-fwidgettitle">
										<h3>Explore More</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">Freelancers in USA</a></li>
										<li><a href="javascript:void(0);">Freelancers in Canada</a></li>
										<li><a href="javascript:void(0);">Freelancers in Australia</a></li>
										<li><a href="javascript:void(0);">Jobs in USA</a></li>
										<li><a href="javascript:void(0);">Find Jobs</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ View All</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wt-haslayout wt-joininfo">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
								<div class="wt-companyinfo">
									<span><a href="javascript:void(0);">New @ Worktern?</a> Dotem eiusmod tempor incune utnaem labore etdolore.</span>
								</div>
								<div class="wt-fbtnarea">
									<a href="javascript:void(0)" class="wt-btn">Join Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wt-haslayout wt-footerbottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p class="wt-copyrights"><span>Worktern.</span> © 2018 All Rights Reserved.</p>
								<nav class="wt-addnav">
									<ul>
										<li><a href="javascript:void(0);">News</a></li>
										<li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
										<li><a href="javascript:void(0);">Privacy Policy</a></li>
										<li><a href="javascript:void(0);">Career</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!--Footer End-->
		</div>
		<!--Content Wrapper End-->
	</div>
	<!--Wrapper End-->
	<script src="{{ asset('web/js/vendor/jquery-3.3.1.js')}}"></script>
	<script src="{{ asset('web/js/vendor/jquery-library.js')}}"></script>
	<script src="{{ asset('web/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{ asset('web/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('web/js/chosen.jquery.js')}}"></script>
	<script src="{{ asset('web/js/scrollbar.min.js')}}"></script>
	<script src="{{ asset('web/js/tilt.jquery.js')}}"></script>
	<script src="{{ asset('web/js/prettyPhoto.js')}}"></script>
	<script src="{{ asset('web/js/jquery-ui.js')}}"></script>
	<script src="{{ asset('web/js/readmore.js')}}"></script>
	<script src="{{ asset('web/js/countTo.js')}}"></script>
	<script src="{{ asset('web/js/appear.js')}}"></script>
	<script src="{{ asset('web/js/tipso.js')}}"></script>
	<script src="{{ asset('web/js/jRate.js')}}"></script>
	<script src="{{ asset('web/js/main.js')}}"></script>
</body>

<!-- Mirrored from amentotech.com/htmls/worktern/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 08:26:57 GMT -->
</html>
