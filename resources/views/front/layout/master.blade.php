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

   <!--popup-->
    <div class="init_popup" id="quick_view">
        <div class="popup init">
            <div class="clearfix">
                <div class="product_preview f_left f_xs_none wrapper m_xs_bottom_15">
                    <div class="d_block relative r_image_container">
                        <img id="zoom" src="{{ asset('assets/front/images/530x530_img3.jpg') }}" alt="" data-zoom-image="{{ asset('assets/front/images/530x530_img3.jpg')}}">
                        <div class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase"><i class="d_inline_m">Sale!</i></div>
                    </div>
                    <!--thumbnails-->
                    <div class="product_thumbnails_wrap relative m_bottom_3">
                        <div class="owl-carousel" id="thumbnails" data-nav="thumbnails_product_" data-owl-carousel-options='{
                                "responsive" : {
                                    "0" : {
                                        "items" : 3
                                    },
                                    "321" : {
                                        "items" : 4
                                    },
                                    "769" : {
                                        "items" : 2
                                    },
                                    "992" : {
                                        "items" : 3
                                    }
                                },
                                "stagePadding" : 40,
                                "margin" : 10,
                                "URLhashListener" : false
                            }'>
                            <a href="#" data-image="{{ asset('assets/front/images/530x530_img3.jpg') }}" data-zoom-image="{{ asset('assets/front/images/530x530_img3.jpg')}}" class="d_block">
                                <img src="{{ asset('assets/front/images/100x100_img1.jpg') }}" alt="">
                            </a>
                            <a href="#" data-image="{{ asset('assets/front/images/530x530_img2.jpg') }}" data-zoom-image="{{ asset('assets/front/images/530x530_img2.jpg')}}" class="d_block">
                                <img src="{{ asset('assets/front/images/100x100_img2.jpg') }}" alt="">
                            </a>
                            <a href="#" data-image="{{ asset('assets/front/images/530x530_img1.jpg') }}" data-zoom-image="{{ asset('assets/front/images/530x530_img1.jpg')}}" class="d_block">
                                <img src="{{ asset('assets/front/images/100x100_img3.jpg') }}" alt="">
                            </a>
                            <a href="#" data-image="{{ asset('assets/front/images/530x530_img3.jpg') }}" data-zoom-image="{{ asset('assets/front/images/530x530_img3.jpg')}}" class="d_block">
                                <img src="{{ asset('assets/front/images/100x100_img1.jpg') }}" alt="">
                            </a>
                            <a href="#" data-image="{{ asset('assets/front/images/530x530_img2.jpg') }}" data-zoom-image="{{ asset('assets/front/images/530x530_img2.jpg')}}" class="d_block">
                                <img src="{{ asset('assets/front/images/100x100_img2.jpg') }}" alt="">
                            </a>
                            <a href="#" data-image="{{ asset('assets/front/images/530x530_img1.jpg') }}" data-zoom-image="{{ asset('assets/front/images/530x530_img1.jpg')}}" class="d_block">
                                <img src="{{ asset('assets/front/images/100x100_img3.jpg') }}" alt="">
                            </a>
                        </div>
                        <button class="thumbnails_product_prev black_hover button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-left d_inline_m"></i></button>
                        <button class="thumbnails_product_next black_hover button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                    </div>
                    <p class="d_inline_m m_right_5 fw_light m_md_bottom_3">Share this:</p>
                    <div class="d_inline_m addthis_widget_container">
                        <!-- AddThis Button BEGIN -->

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>

                        {{-- <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                            <a class="addthis_button_preferred_1"></a>
                            <a class="addthis_button_preferred_2"></a>
                            <a class="addthis_button_preferred_3"></a>
                            <a class="addthis_button_preferred_4"></a>
                            <a class="addthis_button_compact"></a>
                            <a class="addthis_counter addthis_bubble_style"></a>
                        </div> --}}
                        <!-- AddThis Button END -->
                    </div>
                </div>
                <div class="product_description f_left f_xs_none">
                    <h3 class="second_font m_bottom_3 product_title"><a href="#" class="sc_hover">Sed in lacus ut enim</a></h3>
                    <div class="relative m_bottom_18">
                        <ul class="rating_list wrapper hr_list d_inline_m tr_all m_right_5">
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li><i class="fa fa-star tr_all"></i></li>
                            <li><i class="fa fa-star tr_all"></i></li>
                        </ul>
                        <span class="color_light d_inline_m m_top_2">
                                <a href="#" class="sc_hover fs_medium fw_light">3 Review(s)</a> | <a href="#" class="color_dark sc_hover fs_medium fw_light">Add Your Review</a>
                            </span>
                    </div>
                    <ul class="m_bottom_14">
                        <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Manufacturer:</span> <span class="color_dark fw_light">Chanel</span></li>
                        <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Availability:</span> <span class="scheme_color fw_light">in stock</span> <span class="fw_light">20 items(s)</span></li>
                        <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Product Code:</span> <span class="fw_light">PS06</span></li>
                    </ul>
                    <hr class="divider_light m_bottom_15">
                    <p class="fw_light m_bottom_14 color_grey">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>
                    <div class="product_options">
                        <b class="second_font d_block m_bottom_10">Available Options</b>
                        <p class="second_font m_bottom_3">Size:</p>
                        <div class="styled_select size_select relative m_bottom_15">
                            <div class="select_title type_2 fs_medium fw_light color_light relative d_none tr_all">Queen</div>
                            <select>
                                    <option value="Queen">Queen</option>
                                    <option value="King">King</option>
                                    <option value="Grand">Grand</option>
                                </select>
                            <ul class="options_list d_none tr_all hidden bg_grey_light_2"></ul>
                        </div>
                        <p class="second_font">Color:</p>
                        <ul class="hr_list m_bottom_17">
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_red tr_all"></button></li>
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_blue tr_all"></button></li>
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_green tr_all"></button></li>
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_grey tr_all"></button></li>
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_yellow tr_all"></button></li>
                        </ul>
                        <hr class="divider_light">
                        <footer class="bg_grey_light_2">
                            <div class="fs_big second_font m_bottom_17"><s class="color_light">$1 302.00</s> <b class="scheme_color">$1 102.00</b></div>
                            <div class="clearfix">
                                <div class="quantity clearfix t_align_c f_left f_md_none m_right_10 m_md_bottom_3">
                                    <button class="f_left d_block minus black_hover tr_all bg_white">-</button>
                                    <input type="text" value="1" name="" readonly="" class="f_left color_light">
                                    <button class="f_left d_block black_hover tr_all bg_white">+</button>
                                </div>
                                <br class="d_md_block d_none">
                                <button class="button_type_2 d_block f_sm_none m_sm_bottom_3 t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase f_left m_right_3 product_button"><i class="fa fa-shopping-cart d_inline_m m_right_9"></i>Add To Cart</button>
                                <br class="d_sm_block d_none">
                                <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <button class="close_popup fw_light fs_large tr_all">x</button>
        </div>
    </div>
    <livewire:front.footer/>
    {{-- @include('livewire.front.footer') --}}
</div>
@livewireScripts
@include('front.layout.footer_scripts')

</body>
</html>
