<div>
    <div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
        <div class="container">
            <a href="{{ route('front') }}" class="sc_hover">Home</a> / <a href="#" class="sc_hover">{{ $product->warehouse_product()->first()->category->name }}</a> / <span class="color_light">{{ $product->name }}</span>
        </div>
    </div>
    <div class="page_section_offset">
        <div class="container">
            <section>
                <main class="clearfix m_xs_bottom_30">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_15">
                            <div class="wrapper">
                                <div class="d_block relative r_image_container">
                                    <img id="zoom" src="{{ $product->warehouse_product()->first()->image }}" alt="" data-zoom-image="images/p_image1.jpg">
                                    @if (!empty($product->warehouse_product()->first()->special_price))

                                    <div class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase"><i class="d_inline_m">Sale!</i></div>

                                    @endif
                               </div>
                                <!--thumbnails-->
                                <div class="product_thumbnails_wrap relative">
                                    <div class="owl-carousel" id="thumbnails" data-nav="thumbnails_product_" data-owl-carousel-options='{
                                        "responsive" : {
                                            "0" : {
                                                "items" : 3
                                            },
                                            "321" : {
                                                "items" : 5
                                            },
                                            "769" : {
                                                "items" : 3
                                            },
                                            "992" : {
                                                "items" : 5
                                            }
                                        },
                                        "stagePadding" : 40,
                                        "margin" : 10,
                                        "URLhashListener" : false
                                    }'>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_10.jpg')}}" data-zoom-image="images/p_image1.jpg" class="d_block">
                                            <img src="images/product_thumb_1.jpg" alt="">
                                        </a>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_11.jpg')}}" data-zoom-image="images/p_image2.jpg" class="d_block">
                                            <img src="images/product_thumb_2.jpg" alt="">
                                        </a>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_12.jpg')}}" data-zoom-image="images/p_image3.jpg" class="d_block">
                                            <img src="images/product_thumb_3.jpg" alt="">
                                        </a>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_13.jpg')}}" data-zoom-image="images/p_image4.jpg" class="d_block">
                                            <img src="images/product_thumb_4.jpg" alt="">
                                        </a>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_16.jpg')}}" data-zoom-image="images/p_image7.jpg" class="d_block">
                                            <img src="images/product_thumb_5.jpg" alt="">
                                        </a>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_19.jpg')}}" data-zoom-image="images/p_image10.jpg" class="d_block">
                                            <img src="images/product_thumb_6.jpg" alt="">
                                        </a>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_14.jpg')}}" data-zoom-image="images/p_image5.jpg" class="d_block">
                                            <img src="images/product_thumb_7.jpg" alt="">
                                        </a>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_17.jpg')}}" data-zoom-image="images/p_image8.jpg" class="d_block">
                                            <img src="images/product_thumb_8.jpg" alt="">
                                        </a>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_15.jpg')}}" data-zoom-image="images/p_image6.jpg" class="d_block">
                                            <img src="images/product_thumb_9.jpg" alt="">
                                        </a>
                                        <a href="#" data-image="{{ asset('assets/front/images/product_img_18.jpg')}}" data-zoom-image="images/p_image9.jpg" class="d_block">
                                            <img src="images/product_thumb_10.jpg" alt="">
                                        </a>
                                    </div>
                                    <button class="thumbnails_product_prev black_hover type_2 button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-left d_inline_m"></i></button>
                                    <button class="thumbnails_product_next black_hover type_2 button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20">
                            <div class="wrapper">
                                <h3 class="second_font m_bottom_3 f_left product_title"><a href="#" class="sc_hover">{{ $product->name }}</a></h3>
                                {{-- <div class="clearfix f_right">
                                    <a href="#" class="t_align_c button_type_4 black_hover grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></a>
                                    <a href="#" class="t_align_c button_type_4 black_hover grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></a>
                                </div> --}}
                            </div>
                            <ul class="m_bottom_14">
                                <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Manufacturer:</span> <span class="color_dark fw_light">Chanel</span></li>
                                <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Availability:</span> <span class="scheme_color fw_light">in stock</span> <span class="fw_light">{{ $product->warehouse_product()->first()->qty }}</span></li>
                                <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Product Code:</span> <span class="fw_light">{{ $product->warehouse_product()->first()->code }}</span></li>
                            </ul>
                            <hr class="divider_light m_bottom_15">
                            <p class="fw_light m_bottom_14 color_grey">{{ $product->description }}</p>
                            <div class="product_options m_bottom_20">
                                <b class="second_font d_block m_bottom_10">Available Options</b>

                                <hr class="divider_light">
                                <footer class="bg_grey_light_2">
                                    <div class="fs_big second_font m_bottom_17">
                                        @if (!empty($product->warehouse_product()->first()->special_price))
                                        <s class="color_light">{{$product->warehouse_product()->first()->price_sale}}</s>
                                        <b class="scheme_color">{{$product->warehouse_product()->first()->special_price}}</b>
                                        @else
                                        <b class="scheme_color">{{$product->warehouse_product()->first()->price_sale}}</b>
                                        @endif


                                    </div>
                                    <div class="clearfix">
                                        <div class="quantity clearfix t_align_c f_left f_md_none m_right_10 m_md_bottom_3">
                                            <button class="f_left d_block minus black_hover tr_all bg_white">-</button>
                                            <input type="text" value="1" name="" readonly="" class="f_left color_light">
                                            <button class="f_left d_block black_hover tr_all bg_white">+</button>
                                        </div>
                                        <br class="d_md_block d_none">
                                        <button  wire:click.prevent="store( {{$product->id}} , '{{$product->name}}' , 1)" data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_2 d_block f_sm_none m_sm_bottom_3 t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase f_left m_right_3 product_button"><i class="fa fa-shopping-cart d_inline_m m_right_9"></i>Add To Cart</button>
                                        <br class="d_sm_block d_none">
                                        <button  wire:click.prevent="addtowish( {{$product->id}} , '{{$product->name}}' , 1)" class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                 </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </main>

                <div class="d_table m_bottom_5 w_full">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 v_align_m d_table_cell f_none">
                        <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">Related Products</h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 t_align_r d_table_cell f_none">
                        <!--carousel navigation-->
                        {{-- <div class="clearfix d_inline_b">
                            <button class="rp_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
                            <button class="rp_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                        </div> --}}
                    </div>
                </div>
                <hr class="divider_bg m_bottom_15">
                <div class="row">
                    <!--carousel-->
                    <div class="owl-carousel m_bottom_20 m_xs_bottom_0" data-nav="rp_" data-owl-carousel-options='{
                        "stagePadding" : 15,
                        "margin" : 30,
                        "responsive" : {
                                "0" : {
                                    "items" : 1
                                },
                                "321" : {
                                    "items" : 2
                                },
                                "768" : {
                                    "items" : 3
                                },
                                "992" : {
                                    "items" : 4
                                }
                            }
                        }'>
                        @foreach ( $productlikethis as $item )
                        <figure class="relative r_image_container c_image_container qv_container">
                            <div class="relative m_bottom_15">
                                <div>
                                    <img class="c_image_1 tr_all" alt="" src="{{ $item->warehouse_product()->first()->image }}">
                                    <img class="c_image_2 tr_all" alt="" src="images/bestsellers_large_img_8.jpg">
                                </div>
                                <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                            </div>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">{{ $item->name}}</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">{{ $item->warehouse_product()->first()->category->name }}</a></li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">{{ $item->warehouse_product()->first()->price_sale }}</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
