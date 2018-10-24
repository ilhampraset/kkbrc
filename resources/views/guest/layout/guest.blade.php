<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <style>
    #map {
      width: 100%;
      height: 400px;
      background-color: grey;
    }
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  

  <!-- <title>{{ config('app.name', 'starkey') }}</title> -->
  <title>Kelas Kopi Brewing Competition</title>

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
  <!-- Styles -->
  @yield('css')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


  <!-- Header -->
  <header id="header">
    <!-- container -->
    <div class="container">
      <!-- navbar header -->
      <div class="navbar-header">
        <!-- Logo -->
        <div class="navbar-brand">
          <a class="logo" href="index.html">
            <h1 class="logo-img" >KKBRC</h1>
            <h1 class="logo-alt-img" style="color: #fff;">KKBRC</h1>
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
			          <li><a href="/about">Rules of Regulations</a></li>
			          <li><a href="/schedule">Schedule</a></li>
			          <li><a href="/judges">Judges</a></li>
			          <li><a href="/sponsors">Sponsors</a></li>
			          <li><a href="/register">Register</a></li>
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
            <h1>Register</h1>
            <form class="" action="index.html" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="input" type="text" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="input" type="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <select class="input" id='from'>
                        <option value="coffeeshop">CoffeeShop</option>
                        <option value='independent'>Independent</option>
                      </select>
                    </div>
                    <button class="main-btn">Submit</button>
                  </div>
                </div>
              </form>
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
    <div class="container">
      <!-- row -->
      <div class="row">

        <!-- footer logo -->
        <div class="col-md-4 col-md-push-4">
          <div class="footer-brand">
            <a class="logo" href="index.html">
              <h1 class="logo-img" >KKBRC</h1>
            </a>
          </div>
        </div>
        <!-- /footer logo -->

        <!-- contact social -->
        <div class="col-md-4 col-md-push-4">
          <div class="contact-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
            <a href="#"><i class="fa fa fa-linkedin"></i></a>
          </div>
        </div>
        <!-- /contact social -->

        <!-- copyright -->
        <div class="col-md-4 col-md-pull-8">
          <span class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
        </div>
        <!-- /copyright -->

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </footer>

     
      
<script src="{{ asset('/js/app.js') }}"></script>
 
@stack('js')
<script src="{{asset('/js/jquery.min.js')}}"></script>
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/js/jquery.stellar.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script src="{{asset('/js/google-map.js')}}"></script>
  <script src="{{asset('/js/jquery.countTo.js')}}"></script>
  <script src="{{asset('/js/main.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
</body>
</html>