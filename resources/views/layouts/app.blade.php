<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>BS salon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bs saloon') }}</title>

    <link href="{{ asset('img/logo2.png') }}"  rel="icon">
<script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Styles -->
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous"
  />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/Register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Intro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aboutUs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user-profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/book.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
</head>
<style>
    .dropdown-menu{
        left: 85% !important;
        right: 0 !important;
    }
    </style>
<body>
    <div id="app">
        <div style=" background-color:white !important;   height: 4em;  " class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <div class="logoimage">
                    <a href="{{ url('/') }}"><img style=" padding-left: 1em;
                    width: 50%;" class="logoimg" src={{ asset('img/logo2.png')}} alt=" website_logo" /></a>
                  </div>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div style="background-color:white;
                z-index: 99;
                text-align: center;" class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a style="color: rgb(210 89 161) !important;"  href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                        <a style="color: rgb(210 89 161) !important;" href="{{ url('/aboutUs') }}" class="nav-item nav-link">About</a>
                        {{-- <a href="{{ url('/feature') }}" class="nav-item nav-link">Feature</a>
                        <a href="{{ url('/chef') }}" class="nav-item nav-link">Chef</a> --}}
                        <a  style="color: rgb(210 89 161) !important;"href="{{ url('/book') }}" class="nav-item nav-link">Booking</a>

                        <a style="color: rgb(210 89 161) !important;" href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>

                        @guest
                            @if (Route::has('login'))
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a   href="{{ url('user-profile') }}"class="dropdown-item">My profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>


        {{-- <main class="py-4"> --}}
            @yield('content')
        {{-- </main> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<section class="deneb_cta">
	<div class="container">
		<div class="cta_wrapper">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="cta_content">
                        <h3>Have Any question in Mind ?</h3>
						<p>Feel free to contact with Us on our socail media platform.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<footer class="deneb_footer">
	<div class="widget_wrapper" style="background-image: url(http://demo.tortoizthemes.com/deneb-html/deneb-ltr/assets/images/footer_bg.png);">
		<div class="container">
			<div class="row     margin-top: 4em;">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="widget widegt_about">
						<div class="widget_title">
							<img src="assets/images/logo_1.png" class="img-fluid" alt="">
						</div>
						<p>Quisque orci nisl, viverra et sem ac, tincidunt egestas massa. Morbi est arcu, hendrerit ac vehicula condimentum, euismod nec tortor praesent consequat urna.</p>
						<ul class="social">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget widget_link">
						<div class="widget_title">
							<h4>Links</h4>
						</div>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">cotact us</a></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="widget widget_contact">
						<div class="widget_title">
							<h4>Contact Us</h4>
						</div>
						<div class="contact_info">
							<div class="single_info">
								<div class="icon">
									<i class="fas fa-phone-alt"></i>
								</div>
								<div class="info">
									<p><a href="tel:+919246147999">+962795220138</a></p>
									<p><a href="tel:+919246147999">+962777685153</a></p>
								</div>
							</div>
							<div class="single_info">
								<div class="icon">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="info">
									<p><a href="mailto:BS@info.com">info@BS.com</a></p>

								</div>
							</div>
							<div class="single_info">
								<div class="icon">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="info">
									<p>Um al summaq<span>beside Rawan cake.</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>
    </div>
    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/home.js') }}" defer></script>
    <script src="{{ asset('js/book.js') }}" defer></script>
    <script src="{{ asset('js/testimonial.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
     <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Template Javascript -->
    <!-- Template Javascript -->

</body>
</html>
