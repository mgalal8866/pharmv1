<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--add responsive layout support-->
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
  @include('front.layout.head')
  @livewireStyles
</head>
<body class="sticky_menu">

  <!-- Preloader -->
  <div id="preloader"></div>
  {{-- <div id="fb-root"></div> --}}
  {{-- <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script> --}}

<div class="wide_layout db_centered bg_white">
    @include('front.layout.main_headerbar')
    {{-- @include('front.layout.main_sidebar') --}}

    {{$slot}}


    @include('front.layout.footer')
</div>
@livewireScripts
@include('front.layout.footer_scripts')

</body>
</html>
