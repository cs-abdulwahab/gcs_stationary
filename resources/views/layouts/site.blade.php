<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Easy Stationary</title>
	<link rel="icon" href="{{asset('public/front-end/img/tabicon.png')}}">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/front-end/css/bootstrap.min.css')}}" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/front-end/css/slick.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('public/front-end/css/slick-theme.css')}}" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/front-end/css/nouislider.min.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('public/front-end/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/front-end/css/style.css')}}" />
	
	<!-- links for cart page -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

	
</head>
<body>
    <div id="app">
       
        <main class="py-4">
          
            @yield('content')
            @include('shared.footer')
        </main>
    </div>

    <script src="{{asset('public/front-end/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/slick.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/nouislider.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/main.js')}}"></script>

	@yield('script')
</body>
</html>
