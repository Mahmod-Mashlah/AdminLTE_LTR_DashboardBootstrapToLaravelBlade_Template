{{-- <title>AdminLTE 3 | Dashboard</title> --}}
{{-- Title Yield --}}
<title>@yield('title')</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
{{--   this line below will converted  --}}
{{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
{{-- to --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
{{-- OR --}}
{{-- <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}"> --}}

<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
{{-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
<link rel="stylesheet"
    href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

<!-- iCheck -->
{{-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

<!-- JQVMap -->
{{-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">

<!-- Theme style -->
{{-- <link rel="stylesheet" href="dist/css/adminlte.min.css">  --}}
{{-- it turned to 👇 --}}
<link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">

<!-- overlayScrollbars -->
{{-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

<!-- Daterange picker -->
{{-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">

<!-- summernote -->
{{-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css"> --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">

<!-- PreLoader -->
<link rel="stylesheet" href="{{ asset('assets/css/preloader2.css') }}">

<!-- Css -->@yield('css')
