<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{ asset('assets/frontend/')}}/img/favicon.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/frontend/')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend/')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend/')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend/')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('assets/frontend/')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/frontend/')}}/css/style.css" rel="stylesheet">
    @stack('css')
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
    @include('frontend.layouts.header')
  <!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/frontend/')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('assets/frontend/')}}/vendor/aos/aos.js"></script>
  <script src="{{ asset('assets/frontend/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/frontend/')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('assets/frontend/')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('assets/frontend/')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets/frontend/')}}/vendor/typed.js/typed.min.js"></script>
  <script src="{{ asset('assets/frontend/')}}/vendor/waypoints/noframework.waypoints.js"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/frontend/')}}/js/main.js"></script>
  @stack('script')
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
