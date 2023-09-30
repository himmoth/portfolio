<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.carousel.min.css')}}
    ">
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet"href="{{asset('assets/animate.css')}}"/>

    <title>@yield('title','Home')</title>
</head>
<body>
    @include('components.header')

    @yield('css')
    <main>
        @yield('content')
    </main>

    @yield('js')

    
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>
    
    {{-- carousel  --}}
    <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>

    {{-- WOW JS  --}}
    <script src="{{asset('assets/wow.min.js')}}"></script>

    {{-- WOW JS  --}}
    <script>
         new WOW().init();
    </script>
</body>
</html>