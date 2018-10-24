<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Kelas Kopi Brewing Competition 2018</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('/css/owl.theme.default.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('/css/style.css')}}" />

	
</head>
<body>
	<div class="se-pre-con"></div>
	<!-- Header -->
	<header id="header" class="transparent-navbar">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="/home">
						<!-- <img class="logo-img" >KKBRC</h1>
						<h1 class="logo-alt-img" style="color: #fff;">KKBRC</h1> -->
						<img class="logo-img" src="./img/kkbrc-logo-alt.png" alt="logo">
						<img class="logo-alt-img" src="./img/logo-kkbrc.png" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
					<i class="fa fa-bars"></i>
				</button>
				<!-- /Mobile toggle -->
			</div>
			<!-- /navbar header -->

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="/home">Home</a></li>
			          <li><a href="/rules-of-regulation">Rules of Regulations</a></li>
			          <li><a href="/schedule">Schedule</a></li>
			          <li><a href="/judges">Judges</a></li>
			          <!-- <li><a href="/sponsors">Sponsors</a></li> -->
					  <li><a href="/register-kkbrc">Register</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->
		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<div id="home">
	<!-- Home -->
		<!-- background image -->
		<div class="section-bg" style="opacity: 0.8;background-image:url(http://sprudgelive.com/wp-content/uploads/2016/06/todd-goldsworthy-2016-brewers-cup-finals-01.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- home content -->
					<div class="col-md-8 col-md-offset-2">
						<div class="home-content">
							<h1>KELAS KOPI BREWING COMPETITION</h1>
							<!-- <h4 class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4> -->
							<a href="register" class="main-btn">Register</a>
						</div>
					</div>
					<!-- /home content -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /home wrapper -->
	</div>
	
	<div id="app">
		<countdownhome></countdownhome>
		<judgesHome></judgesHome>
		<!-- <sponsorhome></sponsorhome> -->
		<prizehome></prizehome>	
		<contacthome>
		<div id="map"></div>
		</contacthome>
		<footer id="footer">
			<footer-content/>
		</footer>
	</div>
	
	<!-- jQuery Plugins -->
	<script src="{{asset('/js/jquery.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('/js/jquery.stellar.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4l00jz5t-T2G7jv4qBLt4BjtFFsmKImk&v=3.31"></script>
	<script src="{{asset('/js/google-map.js')}}"></script>
	<script src="{{asset('/js/jquery.countTo.js')}}"></script>
	<script src="{{asset('/js/main.js')}}"></script>
	<script src="{{asset('/js/app.js')}}"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script>
		$(window).load(function() {
		// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
	</script>
	



</body>

</html>
