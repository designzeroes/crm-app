<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap is a free yet feature-rich and powerful CSS framework containing code to smoothly support the Front-End Web Development process." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Roomedia – SEO & Digital Marketing Responsive HTML Template</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="{{asset('front-assets')}}/img/favicon.ico" type="image/x-icon" />

  <!--== Main Style CSS ==-->
  <link href="{{asset('front-assets')}}/css/style.css" rel="stylesheet" />
</head>

<body>

  <!--wrapper start-->
<div class="wrapper home-default-wrapper">
    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
        <div class="preloader">
          <span class="dot"></span>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!--== End Preloader Content ==-->
      @include('includes.guest.header')
        <!-- Content -->     
        @yield('content')
        <!-- Content --> 

    <!--== End Side Menu ==-->
</div>

</body>
  <!--=======================Javascript============================-->

  <!--=== Modernizr Min Js ===-->
  <script src="{{asset('front-assets')}}/js/modernizr.js"></script>
  <!--=== jQuery Min Js ===-->
  <script src="{{asset('front-assets')}}/js/jquery-main.js"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="{{asset('front-assets')}}/js/jquery-migrate.js"></script>
  <!--=== Popper Min Js ===-->
  <script src="{{asset('front-assets')}}/js/popper.min.js"></script>
  <!--=== Bootstrap Min Js ===-->
  <script src="{{asset('front-assets')}}/js/bootstrap.min.js"></script>
  <!--=== jquery UI Min Js ===-->
  <script src="{{asset('front-assets')}}/js/jquery-ui.min.js"></script>
  <!--=== Plugin Collection Js ===-->
  <script src="{{asset('front-assets')}}/js/plugincollection.js"></script>
  <!--=== Isotope Min Js ===-->
  <script src="{{asset('front-assets')}}/js/isotope.pkgd.min.js"></script>


  <!--=== Custom Js ===-->
  <script src="{{asset('front-assets')}}/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
