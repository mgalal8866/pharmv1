<title>
    @yield('title', env('APP_NAME'))

</title>

		<!--include favicon-->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/images/fav.png')}}">
		<!--fonts include-->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/plugins/flexslider/flexslider.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/plugins/fancybox/jquery.fancybox.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/plugins/owl-carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/plugins/jackbox/css/jackbox.min.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/css/animate.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/css/style.css') }}">
        {{-- <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/css/rtl.css') }}"> --}}
        <script src="{{ asset('assets/front/js/jquery-2.1.1.min.js') }}"></script>
		{{-- <script src="{{ asset('assets/front/js/modernizr.js') }}"></script> --}}
        @yield('css')
