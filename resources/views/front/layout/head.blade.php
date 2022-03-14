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
      @stack('styles')
      <style>
        .main-gambo-model {
    background-image: -webkit-linear-gradient(left, rgba(60, 178, 187, 0.9), rgba(26, 116, 122, 0.9));
    background-image: linear-gradient(to right, rgba(60, 178, 187, 0.9), rgba(26, 116, 122, 0.9))
}

.search-header {
    position: relative;
    width: 100%;
    border-bottom: 1px solid #efefef
}

.search-header input {
    width: 100%;
    border: 0;
    /* padding: 20px; */
    position: relative
}

.search-header button {
    position: absolute;
    right: 0;
    background: transparent;
    border: 0;
    padding: 17px;
    font-size: 10px;
    /* padding-right: 26rem; */
}

.search-by-cat {
    width: 100%;
    height: 321px;
    overflow: hidden scroll
}

.search-by-cat .single-cat {
    -ms-filter: "alpha(opacity=85)";
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-bottom: 0;
    -webkit-transition: all .25s;
    transition: all .25s;
    padding: 15px 20px
}

.search-by-cat .single-cat .icon {
    background-color: #f9f9f9;
    border-radius: 5%;
    color: #fff;
    font-size: 22px;
    height: 50px;
    line-height: 47px;
    text-align: center;
    width: 50px
}

.search-by-cat .single-cat .icon img {
    width: 30px
}

.search-by-cat .single-cat .text {
    color: #2b2f4c;
    font-weight: 400;
    padding-right: 20px;
    font-size: 16px
}

.search-by-cat .single-cat:hover .text {
    color: #2666CF
}

.category-area-inner .modal-header {
    border-bottom: 0
}

.category-area-inner .btn-close {
    color: #fff!important;
    opacity: 1!important;
    padding: 30px 0 15px!important;
    font-size: 30px!important;
    cursor: pointer!important
}

.category-model-content {
    background: #fff;
    border: 0!important;
    border-radius: 0!important
}
.noScroll
{
    background: yellow;
    position:fixed;
    height: 50px; /*Whatever you want*/
    width: 100%; /*Whatever you want*/
    top:0;
    left:0;
    display:none;
}

/*Use this class when you want your content to be shown after some scroll*/
.scrolled
{
display: block !important;
}

.parent {
/* something to ensure that the parent container is scrollable */
height: 200vh;
}

</style>
        @if (App::getLocale() == 'ar')
        <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/front/css/rtl.css') }}">
        @endif

        <script src="{{ asset('assets/front/js/jquery-2.1.1.min.js') }}"></script>
		<script src="{{ asset('assets/front/js/modernizr.js') }}"></script>
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
        @yield('css')

