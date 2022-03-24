<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href={{ asset('https://fonts.googleapis.com') }}>
    <link rel="preconnect" href={{ asset('https://fonts.gstatic.com') }} crossorigin>
    <link href={{ asset('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap') }} rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href={{asset ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }} rel="stylesheet">
    <link href={{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }} rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href={{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }} rel="stylesheet">
    <link href={{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }} rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{ asset('/admin/css/bootstrap.min.css') }} rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href={{asset ('/admin/css/style.css') }} rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href={{ url('/admin/index') }} class="navbar-brand mx-4 mb-3">
                    <h3 style=" color: #d259a1!important;" class="text-primary"><i class="fa fa-hashtag me-2"></i>BS  dashboard</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">

                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">

                        <h6  style=" color: #d259a1!important;"class="mb-0">{{ $adminName[0]->name }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('/admin/index') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href={{ url('users') }} class="nav-link "><i style=" color: #d259a1!important;" class="fa fa-users me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">



                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href={{ url('categories') }} class="nav-link "><i style=" color: #d259a1!important;" class="fa fa-object-ungroup me-2"></i>Category</a>
                        <div class="dropdown-menu bg-transparent border-0">


                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href={{ url('servicess') }} class="nav-link "><i style=" color: #d259a1!important;" class="fa fa-cubes me-2"></i>Service</a>
                        <div class="dropdown-menu bg-transparent border-0">


                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href={{ url('admin/contact') }} class="nav-link "><i style=" color: #d259a1!important;" class="fa fa-book me-2"></i>Contact</a>
                        <div class="dropdown-menu bg-transparent border-0">

                        </div>
                    </div>


                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">


                    <div class="nav-item ">


                            <span class="d-none d-lg-inline-flex"> welcome {{ $adminName[0]->name }}</span>


                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


        @yield('content')
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src={{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}></script>
    <script src={{asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}></script>
    <script src={{asset ('lib/chart/chart.min.js') }}></script>
    <script src={{asset ("lib/easing/easing.min.js") }}></script>
    <script src={{ asset('lib/waypoints/waypoints.min.js') }}></script>
    <script src={{asset (' lib/owlcarousel/owl.carousel.min.js') }}></script>
    <script src={{asset ('lib/tempusdominus/js/moment.min.js') }}></script>
    <script src={{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}></script>
    <script src={{asset ('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}></script>

    <!-- Template Javascript -->
    <script src={{asset ('admin/js/main.js') }}></script>
</body>

</html>
