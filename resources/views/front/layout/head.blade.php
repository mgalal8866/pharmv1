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
        @toastr_css
        @if (App::getLocale() == 'ar')
        <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/css/rtl.css') }}">
        @endif
        
        <script src="{{ asset('assets/front/js/jquery-2.1.1.min.js') }}"></script>
		<script src="{{ asset('assets/front/js/modernizr.js') }}"></script>
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
        @yield('css')
