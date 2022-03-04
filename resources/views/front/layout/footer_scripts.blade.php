


<script src="{{ asset('assets/front/plugins/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/front/plugins/flexslider/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/jackbox/js/jackbox-packed.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/twitter/jquery.tweet.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/flickr.js') }}"></script>
<script src="{{ asset('assets/front/plugins/afterresize.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/jquery.elevateZoom-3.0.8.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-622115a6c40d8d44"></script>

{{-- <script src="{{ asset('assets/front/js/retina.min.js') }}"></script> --}}
<script src="{{ asset('assets/front/plugins/colorpicker/colorpicker.js') }}"></script>
<script src="{{ asset('assets/front/js/styleswitcher.js') }}"></script>

<!--theme initializer-->
<script src="{{ asset('assets/front/js/themeCore.js') }}"></script>
<script src="{{ asset('assets/front/js/theme.js') }}"></script>


        <script src="{{ asset('assets/front/plugins/jquery.appear.js') }}"></script>
		<script src="{{ asset('assets/front/plugins/jquery.easytabs.min.js') }}"></script>
		<script src="{{ asset('assets/front/plugins/twitter/jquery.tweet.min.js') }}"></script>

		<script src="{{ asset('assets/front/plugins/jackbox/js/jackbox-packed.min.js') }}"></script>
        <script src="{{ asset('assets/front/plugins/countdown/jquery.plugin.min.js') }}"></script>
        <script src="{{ asset('assets/front/plugins/countdown/jquery.countdown.min.js') }}"></script>
        <script>

            $(function () {
              var url = window.location;
              // for single sidebar menu
              $('ul.main_menu a').filter(function () {
                  return this.href == url;
              }).parents('li').addClass('current');

            //   $('ul.categories_list a').filter(function () {
            //       return this.href == url;
            //   }).addClass('fw_bold scheme_color bg_grey_light_2');

              // for sidebar menu and treeview
            //   $('ul.d_none a').filter(function () {
            //       return this.href == url;
            //   }).parentsUntil(".categories_list > .d_none")
            //       .css({'display': 'block'})
            //       .addClass('button').prev('button')
            //       .addClass('active').prev('a')
            //       .addClass('active');
          });
            </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          @yield('js')
