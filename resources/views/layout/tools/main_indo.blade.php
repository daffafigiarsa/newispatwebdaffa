<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href= "{{ asset('assets/img/title2.png') }}" type="images/x-icon">
    <title>ISPAT INDO</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }} " />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{ asset('assets/css/font-awesome.min.css') }} " rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('assets/css/responsive.css') }}" rel rel="stylesheet" />
</head>

<body class="{{ $class }}">
    @include('layout.tools.navbar_indo')

    @yield('content')

    @include('layout.tools.footer')

      <!-- jQery -->
  <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}" ></script>
  <!-- bootstrap js -->
  <script src= "{{ asset('assets/js/bootstrap.js') }}" ></script>
  <!-- custom js -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
