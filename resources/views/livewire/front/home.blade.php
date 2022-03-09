<div wire:ignore >
    @if($banner->where('type','header')->count() !=0)
        <div class="container">
            <!--flexslider-->
            <div class="flexslider" >
                {{-- style="height: 750px;" --}}
                <ul class="slides" >
                    @foreach ( $banner->where('type','header') as  $itembanner)
                    <li>
                        <img src="{{  $itembanner->image}}" height="" width="{{ ($itembanner->width)}}" alt="">
                        <div class="flex_caption  d_xs_none t_align_l" style="left:100px;top:22%;">
                            {{-- <a href="{{  $itembanner->link }}" class="d_inline_b d_xs_none button_type_5 bg_transparent slider_button color_dark tt_uppercase fw_light fs_ex_large">Shop Now!</a> --}}
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    @endif
    <!--main content-->
    @if($banner->where('type','offer')->count() !=0)
        <section class="section_offset">
            <div class="container">
                <div class="row">
                    @foreach ($banner->where('type','offer') as $itemoffer)


                    <div class="col-lg-4 col-md-4 col-sm-6 m_sm_bottom_30 animated hidden" data-animation="fadeInDown">
                        <!--banner-->
                        <figure class="relative wrapper scale_image_container r_image_container">
                            <img src="{{  $itemoffer->image }}" width="{{ ($itemoffer->width)}}" alt="" class="tr_all scale_image">
                            <!--caption-->
                            <figcaption class="caption_type_1 pos_2 tr_all">
                                <div class="d_inline_b color_white fw_light caption_title tt_uppercase bg_lbrown_translucent">
                                    {{ $itemoffer->header}}
                                </div>
                                <div class="caption_inner">
                                    <h3 class="color_white second_font fw_light m_bottom_5 w_break"> {{ $itemoffer->titel }}</h3>
                                    <p class="color_light fw_light color_light_2">{{  $itemoffer->dis }}<a href="{{  $itemoffer->link }}" class="color_lbrown color_white_hover">Buy Now!</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!--bestsellers-->
    @if($flashproduct->count() !=0)
        <div class="section_offset p_bottom_0 p_top_0">
            <div class="container">
                <div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInDown">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 v_align_m d_table_cell f_none">
                        <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">Flash Sell</h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 t_align_r d_table_cell f_none">
                        <!--carousel navigation-->
                        <div class="clearfix d_inline_b">
                            <button class="bestsellers_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
                            <button class="bestsellers_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                        </div>
                    </div>
                </div>
                <hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInDown" data-animation-delay="100">
                <div class="row">
                    <div class="owl-carousel" data-nav="bestsellers_" data-owl-carousel-options='{
                                    "stagePadding" : 15,
                                    "margin" : 30,
                                    "responsive" : {
                                            "0" : {
                                                "items" : 1
                                            },
                                            "320" : {
                                                "items" : 2
                                            },
                                            "550" : {
                                                "items" : 3
                                            },
                                            "992" : {
                                                "items" : 4
                                            }
                                        }
                                    }'>
                        <!--owl item-->

                        @foreach ($flashproduct->where('special_enddate', '>',  date('Y-m-d')) as $itemflash)
                        <div class="animated hidden offer_wrap" data-animation="fadeInDown" data-animation-delay="500">
                            <!--product-->
                            <figure class="relative r_image_container c_image_container qv_container">
                                    @if($itemflash->qty  == 0 )
                                    <div class="product_label fs_ex_small circle color_white bg_grey t_align_c vc_child tt_uppercase lh_small"><i class="d_inline_m">Out Of<br>Stock!</i></div>
                                    @else
                                    <div class="product_label fs_ex_small circle color_white bg_blue t_align_c vc_child tt_uppercase"><i class="d_inline_m">Offer</i></div>
                                    @endif


                                <div class="offer_container">
                                    <div class="d_block m_bottom_15 relative">
                                        <img src="{{$itemflash->image}}" alt="" class="c_image_1 tr_all">
                                        {{-- <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a> --}}
                                    </div>
                                    <!--offer-->
                                    <div class="offer color_white lh_small hidden">
                                        <p class="fs_small fw_light m_bottom_2">{{ __('tran.expiresin') }}</p>
                                        <div class="second_font">
                                            <div class="countdown" data-year="  {{ date('Y', strtotime($itemflash->special_enddate));   }}"
                                            data-month="  {{ date('m', strtotime($itemflash->special_enddate))   }}"
                                            data-day="  {{ date('d', strtotime($itemflash->special_enddate))  }}"
                                                data-hours="0"
                                            data-minutes="0"
                                            >
                                            </div>
                                        </div>
                                        <hr class="divider_light_2 m_top_7 m_bottom_6">
                                        <p class="fs_medium fw_light">Hurry! Only <b>{{ $itemflash->qty }} item(s) left!</b></p>
                                    </div>
                                </div>
                                <figcaption class="t_align_c">
                                    <ul>

                                        <li><a href="{{ route('singelproduct',['slug'=> $itemflash->product->slug]) }}" class="second_font sc_hover">{{ $itemflash->product->name }}</a></li>
                                        <li class="m_bottom_7"><a href="{{ route('category',$itemflash->category->slug) }}" class="color_light sc_hover fw_light d_inline">{{ $itemflash->category->name }}</a></li>
                                        <li class="m_bottom_16"> <div class="col-lg-5 col-md-5 color_light fs_large second_font  t_sm_align_c m_bottom_9">
                                            @if ($itemflash->special_price)
                                                <s>{{$itemflash->price_sale}}</s></br>
                                            @endif
                                                <b class="fs_large second_font scheme_color">{{($itemflash->special_price)?? $itemflash->price_sale}}</b>
                                        </div>
                                    </li>
                                        <li>

                                           <div class="clearfix d_inline_b">
                                                <button @if($itemflash->qty == 0 ) disabled @endif wire:click.prevent="addtowish( {{$itemflash->id}} , '{{$itemflash->name}}' ,  {{($itemflash->special_price)?? $itemflash->price_sale}} )"  class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                                <button {{ ($itemflash->qty == 0 )? 'disabled' :'' }} wire:click.prevent="store( {{$itemflash->id}} , '{{$itemflash->name}}' , {{($itemflash->special_price)?? $itemflash->price_sale}}  )"  data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                            </div>

                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <!--owl item-->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    @endif

    <!--brands carousel-->
    @if($banner->where('type','brand')->count() !=0)
        <div class="section_offset p_top_0 p_bottom_0 m_bottom_27">
            <section class="container m_bottom_10">
                <div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInDown">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 v_align_m d_table_cell f_none">
                        <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">Brands</h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 t_align_r d_table_cell f_none">
                        <!--carousel navigation-->
                        <div class="clearfix d_inline_b">
                            <button class="brands_carousel_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
                            <button class="brands_carousel_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                        </div>
                    </div>
                </div>
                <hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInDown" data-animation-delay="100">
                <!--carousel-->
                <div class="row">
                    <div class="owl-carousel" data-nav="brands_carousel_" data-owl-carousel-options='{
                                "stagePadding" : 15,
                                "margin" : 30,
                                "responsive" : {
                                        "0" : {
                                            "items" : 2
                                        },
                                        "320" : {
                                            "items" : 3
                                        },
                                        "550" : {
                                            "items" : 4
                                        },
                                        "768" : {
                                            "items" : 4
                                        },
                                        "992" : {
                                            "items" : 5
                                        },
                                        "1200" : {
                                            "items" : 6
                                        }
                                    }
                                }'>
                        @foreach ($banner->where('type','brand') as $itembrand)
                        <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="200">
                            <a href="{{ $itembrand->link}}" class="d_block frame_container">
                                <img src="{{ $itembrand->image}}" alt="">
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
        </div>
    @endif

    <!--new products-->
    @if($newproduct->count() !=0)
        <div wire:ignore class="section_offset p_bottom_0 m_bottom_27">
            <div class="container">
                <div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInDown">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 v_align_m d_table_cell f_none">
                        <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">New</h5>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 t_align_r d_table_cell f_none">
                        <!--carousel navigation-->
                        <div class="clearfix d_inline_b">
                            <button class="new_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i class="fa fa-angle-left d_inline_m"></i></button>
                            <button class="new_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
                        </div>
                    </div>
                </div>
                <hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInDown" data-animation-delay="100">
                <div class="row">
                    <div class="owl-carousel" data-nav="new_" data-owl-carousel-options='{
                                    "stagePadding" : 15,
                                    "margin" : 30,
                                    "responsive" : {
                                            "0" : {
                                                "items" : 1
                                            },
                                            "320" : {
                                                "items" : 2
                                            },
                                            "550" : {
                                                "items" : 3
                                            },
                                            "992" : {
                                                "items" : 4
                                            }
                                        }
                                    }'>
                        <!--owl item-->

                            @foreach ($newproduct as $itemnewprod)

                                <div class="animated hidden" data-animation="fadeInDown" data-animation-delay="200">
                                    <!--product-->
                                    <figure class="relative r_image_container c_image_container qv_container">
                                        <div class="product_label fs_ex_small circle color_white bg_scheme_color t_align_c vc_child tt_uppercase"><i class="d_inline_m">New!</i></div>
                                        <div class="d_block m_bottom_15 relative">
                                            <img src="{{$itemnewprod->image}}" alt="" class="c_image_1 tr_all">
                                            {{-- <img src="{{ asset('assets/front/images/new_img_8.jpg')}}" alt="" class="c_image_2 tr_all"> --}}
                                            {{-- <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a> --}}
                                        </div>
                                        <figcaption class="t_align_c">
                                            <ul>
                                                <li><a href="{{ route('singelproduct',['slug'=> $itemnewprod->product->slug]) }}" class="second_font sc_hover">{{ $itemnewprod->product->name }}</a></li>
                                                <li class="m_bottom_7"><a href="{{ route('category',$itemnewprod->category->slug) }}" class="color_light sc_hover fw_light d_inline">{{ $itemnewprod->category->name }}</a></li>
                                                <li class="m_bottom_16">
                                                    <div class="col-lg-5 col-md-5 color_light fs_large second_font  t_sm_align_c m_bottom_9">
                                                        @if ($itemnewprod->special_price)
                                                            <s>{{$itemnewprod->price_sale}}</s></br>
                                                        @endif
                                                            <b class="fs_large second_font scheme_color">{{($itemnewprod->special_price)?? $itemnewprod->price_sale}}</b>
                                                    </div>
                                                {{-- <div class="">
                                                    @if ($itemnewprod->special_price)
                                                        <s>{{$itemnewprod->price_sale}}</s>
                                                    @endif
                                                        <b class="fs_large second_font scheme_color">{{($itemnewprod->warehouse_product()->first()->special_price)?? $itemnewprod->warehouse_product()->first()->price_sale}}</b>
                                                </div> --}}
                                                {{-- <b class="fs_large second_font scheme_color">$1 102.00</b> --}}
                                            </li>
                                                <li>
                                                    <div class="clearfix d_inline_b">
                                                        <button wire:click.prevent="addtowish( {{$itemnewprod->id}} , '{{$itemnewprod->product->name}}' , {{($itemnewprod->special_price)?? $itemnewprod->price_sale}} )"  class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                                        <button  wire:click.prevent="store( {{$itemnewprod->id}} , '{{$itemnewprod->product->name}}' , {{($itemnewprod->special_price)?? $itemnewprod->price_sale}}  )" data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>

                             @endforeach

                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
