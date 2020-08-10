<!DOCTYPE html>
<html>
<head>
  <title>NobleUI Laravel Admin Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/select2/select2.min.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}"> 
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}" class="loaded nimbus-is-editor settings-open sidebar-dark">
<link rel="stylesheet" href="{{asset('assets/js/spinner.js') }}">
  

  <div class="main-wrapper" id="app">
    @include('multiauth::layouts.sidebar')
    <div class="page-wrapper">
      @include('multiauth::layouts.header')
      <div class="page-content">
        @yield('content')
      </div>
      @include('multiauth::layouts.footer')
    </div>
  </div>

    <!-- base js -->
    <script src="{{asset('js/app.js') }}"></script>
    <script src="{{asset('/assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{asset('assets/plugins/feather-icons/feather.min.js') }}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    <script src="{{asset('assets/js/template.js') }}"></script>
    
    <!-- end common js -->

    @stack('custom-scripts')
    @include('sweetalert::alert')
</body>
</html>