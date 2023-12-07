<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
  <!--plugins-->
  <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
  <!-- loader-->
  <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('assets/js/pace.min.js') }}"></script>
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

  @stack('css')
  <title>Siwalatri</title>
</head>

<body>
  <div class="wrapper">

    {{-- Sidebar --}}
    @include('admin._layouts.sidebar')

    {{-- Navbar --}}
    @include('admin._layouts.navbar')

    {{-- Content --}}
    @yield('content')


    {{-- Footer --}}
    @include('admin._layouts.footer')
  </div>

  {{-- Scripts --}}
  @include('admin._layouts.scripts')
</body>

</html>