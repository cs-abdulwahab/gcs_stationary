
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>Chat App</title>
 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('public/css/chat.css') }}" />
    <!-- theme chat links -->
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
    <!-- end -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script>
        var base_url = '{{ url("/") }}';
    </script>
</head>
<body>
<div class="container-fluid">
    
    @yield('content')
</div>
 
<div id="chat-overlay" class="row"></div>
 
    <audio id="chat-alert-sound" style="display:none;">
        <source src="{{ asset('public/sound/facebook_chat.mp3') }}" />
    </audio>
    @yield('script')
    <!-- them assets -->
    <script src="{{asset('public/front-end/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/slick.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/nouislider.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('public/front-end/js/main.js')}}"></script>
    <!-- end -->
</body>
</html>