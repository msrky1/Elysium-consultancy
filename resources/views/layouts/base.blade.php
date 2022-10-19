<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ELYSİUM DANIŞMANLIK</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets')}}/images/favicon.png" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&amp;display=swap"
      rel="stylesheet"
    />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/line-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/animated-headline.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/chosen.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css" />
  </head>
  <body>
    <!-- start per-loader -->
    {{-- <div class="loader-container">
      <div class="loader-ripple">
        <div></div>
        <div></div>
      </div>
    </div> --}}
    <!-- scrollToTop ending here -->
    
    <livewire:project.menu-component />


    {{ $slot }}

    <livewire:project.footer-component />

    <!-- Footer Section Start Here -->

    <!-- Footer Section Ending Here -->

       <!-- Template JS Files -->
    <script src="{{asset('assets')}}/js/jquery-3.4.1.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery-ui.js"></script>
    <script src="{{asset('assets')}}/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{asset('assets')}}/js/animated-headline.js"></script>
    <script src="{{asset('assets')}}/js/chosen.min.js"></script>
    <script src="{{asset('assets')}}/js/moment.min.js"></script>
    <script src="{{asset('assets')}}/js/datedropper.min.js"></script>
    <script src="{{asset('assets')}}/js/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery-rating.js"></script>
    <script src="{{asset('assets')}}/js/tilt.jquery.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery-supperslides.min.js"></script>
    <script src="{{asset('assets')}}/js/superslider-script.js"></script>
    <script src="{{asset('assets')}}/js/jquery.lazy.min.js"></script>
    <script src="{{asset('assets')}}/js/main.js"></script>
  </body>
</html>