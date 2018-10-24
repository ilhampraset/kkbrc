<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Kelas Kopi Brewing Competition 2018</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

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
	<link rel="stylesheet" href="css/fakeLoader.css">


<body>

	<!-- Header -->
 <div id='app'>
	<header id="header">
		<!-- container -->
		 <div class="container">
      <!-- navbar header -->
      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a class="logo" href="home">
           <img class="logo-img" :src="'./img/kkbrc-logo-alt.png'" alt="logo">
					 <img class="logo-alt-img" :src="'./img/logo-kkbrc.png'" alt="logo">
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

	<!-- Page Header -->
	<div id="page-wrapper" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- wrapper content -->
				<div class="col-md-12">
					<div class="page-wrapper-content">
						@yield('content')
				</div>
				</div>
				<!-- /wrapper content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Page Header -->

	<div class="section">
		<div class="container">
			<div class="row">

			</div>
		</div>
	</div>

	<!-- CTA -->
	
	<!-- /CTA -->

	<!-- Contact -->

	<!-- /Contact -->

	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<footer-content/>
	</footer>
	<!-- /Footer -->
</div>
	<!-- jQuery Plugins -->
	<script src="{{asset('/js/jquery.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('/js/google-map.js')}}"></script>
	<script src="{{asset('/js/jquery.countTo.js')}}"></script>
	<script src="{{asset('/js/main.js')}}"></script>
	<script src="{{asset('/js/app.js')}}"></script>
	<script src="js/fakeLoader.min.js"></script>
	@yield('script')

</body>

</html>


