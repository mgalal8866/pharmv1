<div>
    <section class="section_offset">
    <div  class="page_section_offset p_top_0">
        <div class="container ">

            <div class="row">

                @include('livewire.front.categoyside')
              {{-- <livewire:front.categoyside/> --}}
                {{-- <main class="col-lg-9 col-md-9 col-sm-9">
                    <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_13 animated " data-animation="fadeInDown">{{ __('tran.featured') }}</h5>

                    <hr class="divider_bg m_bottom_30 animated " data-animation="fadeInDown" data-animation-delay="100">
                    <div class="row">
                        @foreach ( $product as  $item)
                        <div  class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30 m_bottom_40 animated " data-animation="fadeInDown" data-animation-delay="200"> --}}
                            <!--product-->

                            {{-- <figure class="product_item type_2 c_image_container relative frame_container t_sm_align_c r_image_container qv_container"> --}}
                                <!--image & buttons & label-->
                                {{-- <div class="relative">
                                    <div>
                                        <img src="{{$item->first()->image}}" alt="" class="c_image_1 tr_all">
                                        <img src="{{ asset('assets/front/images/home_v3_img_3.jpg')}}" alt="" class="c_image_2 tr_all">
                                    </div>
                                    @if (!empty($item->warehouse_product()->first()->special_price))
                                    <div class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase"><i class="d_inline_m">Sale!</i></div>
                                    @endif
                                    <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a>
                                </div>
                                <figcaption class="bg_white relative p_bottom_0">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 m_bottom_9">
                                            <a class="second_font sc_hover d_xs_block" href="{{ route('singelproduct',['slug'=> $item->slug]) }}">{{ $item->name }}</a>
                                            <div class="relative">
                                                <a class="fw_light color_light sc_hover">{{ $item->warehouse_product()->first()->category->name }}</a> --}}
                                                {{-- <ul class="rating_list hr_list d_sm_inline_b tr_all">
                                                    <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                                    <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                                    <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                                    <li><i class="fa fa-star tr_all"></i></li>
                                                    <li><i class="fa fa-star tr_all"></i></li>
                                                </ul> --}}
                                            {{-- </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 color_light fs_large second_font t_align_r t_sm_align_c m_bottom_9">
                                            @if ($item->warehouse_product()->first()->special_price)
                                                <s>{{$item->warehouse_product()->first()->price_sale}}</s>
                                            @endif
                                                 <b class="scheme_color d_block">{{($item->warehouse_product()->first()->special_price)?? $item->warehouse_product()->first()->price_sale}}</b>
                                        </div>
                                    </div>
                                     <button  wire:click.prevent="store( {{$item->warehouse_product()->first()->id}} , '{{$item->name}}' , {{($item->warehouse_product()->first()->special_price)?? $item->warehouse_product()->first()->price_sale}}  )" data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_2 m_bottom_9 d_block w_full t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase"><i class="fa fa-shopping-cart d_inline_m m_right_9"></i>Add To Cart</button>

                                    <div class="clearfix t_sm_align_c t_xs_align_l">
                                        <button  wire:click.prevent="addtowish( {{$item->id}} , '{{$item->name}}' , 1)" class="second_font f_sm_none d_sm_inline_b f_xs_left fs_medium sc_hover f_left">Add to Wishlist</button> --}}
                                        {{-- <a href="#" class="second_font f_sm_none d_sm_inline_b f_xs_right fs_medium sc_hover f_right">Add to Compare</a> --}}
                                    {{-- </div>
                                </figcaption>
                            </figure>
                        </div>
                        @endforeach
                    </div>
                </main> --}}
                <main class="col-lg-9 col-md-9 col-sm-9 m_bottom_30 m_xs_bottom_10">
                    <h2 class="fw_light second_font color_dark tt_uppercase m_bottom_27">{{ ($bycat)??'All Product' }}</h2>

                 <div   class="d_table w_full m_bottom_5">
                        <div class="col-lg-6 col-md-6 col-sm-6 d_xs_block v_align_m d_table_cell f_none fs_medium color_light fw_light m_xs_bottom_5">
                            <div class="d_inline_m m_right_5">Sort by:</div>
                            {{-- <div class="styled_select relative d_inline_m m_right_2"> --}}

                                <div class="select_title type_3 fs_medium fw_light color_light relative d_none tr_all">Product name</div>
                                <select wire:model="sortmin">
                                        <option selected value="Min Price">Min Price</option>
                                        <option value="Max Price">Max Price</option>
                                        <option value="The most recent">The most recent</option>
                                        <option value="The Oldest">The Oldest</option>
                                </select>
                                <div class="d_inline_m m_right_8">Show:</div>
                                     <select wire:model="pagesize">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                {{-- <ul class="options_list d_none tr_all hidden bg_grey_light_2"></ul> --}}
                            {{-- </div> --}}
                            {{-- <button class="button_type_4 grey state_2 tr_all second_font tt_uppercase vc_child black_hover"><i class="fa fa-sort-amount-asc d_inline_m m_top_0"></i></button> --}}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 d_xs_block v_align_m d_table_cell f_none t_align_r t_xs_align_l p_xs_left_0">
                            <p class="fw_light fs_medium d_inline_m m_right_5 color_light">View as:</p>
                            <div class="clearfix d_inline_m">
                                <button data-isotope-layout="grid" data-isotope-container="#can_change_layout" class="button_type_4 f_left grey state_2 m_right_5 tr_all second_font tt_uppercase vc_child black_button_active"><i class="fa fa-th m_top_0 d_inline_m"></i></button>
                                <button data-isotope-layout="list" data-isotope-container="#can_change_layout" class="button_type_4 f_left grey state_2 tr_all second_font tt_uppercase vc_child black_hover"><i class="fa fa-th-list m_top_0 d_inline_m"></i></button>
                            </div>
                        </div>
                 </div>
                    <hr class="divider_light m_bottom_5">
                    <div class="d_table w_full m_bottom_15">
                        {{-- <div class="col-lg-6 col-md-6 col-sm-6 d_xs_block v_align_m d_table_cell f_none fs_medium color_light fw_light m_xs_bottom_5">
                            <div class="d_inline_m m_right_17">Results 1 - 5 of 45</div>

                        </div> --}}
                        <div class="col-lg-6 col-md-6 col-sm-6 d_xs_block v_align_m d_table_cell f_none t_align_r t_xs_align_l p_xs_left_0">
                            <!--pagination-->

                                {!! $product->links('livewire.pag') !!}

                        </div>
                    </div>
                    <hr class="divider_light m_bottom_5">
                    <!--isotope-->
                    <div id="can_change_layout" style="" class="category_isotope_container three_columns wrapper m_bottom_10 m_xs_bottom_0" data-isotope-options='{
                            "itemSelector": ".category_isotope_item",
                              "layoutMode": "fitRows" }'>
                        <!--isotope item-->
                        {{-- <div data-instance="{{ $iteration }}"> --}}


                        {{-- </div> --}}
                         @foreach ( $product as  $item)
                        <div  class="category_isotope_item" style="">

                            <figure    class="product_item type_2 c_image_container relative frame_container t_sm_align_c r_image_container qv_container">
                                <!--image & buttons & label-->
                                <div class="relative">
                                    <div>
                                        <img src="{{$item->image}}" alt="" class="c_image_1 tr_all">
                                        {{-- <img src="{{ asset('assets/front/images/home_v3_img_3.jpg')}}" alt="" class="c_image_2 tr_all"> --}}
                                    </div>
                                    @if (!empty($item->special_price))
                                    <div class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase"><i class="d_inline_m">Sale!</i></div>
                                    @endif
                                    {{-- <a data-popup="#quick_view" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="tr_all color_white second_font qv_style_button quick_view tt_uppercase t_align_c d_block clickable d_xs_none"><i class="fa fa-eye d_inline_m m_right_10"></i><span class="fs_medium">Quick View</span></a> --}}
                                </div>
                                <figcaption class="bg_white relative p_bottom_0">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 m_bottom_9">
                                            <a class="second_font sc_hover d_xs_block" href="{{ route('singelproduct',['slug'=> $item->product->slug]) }}">{{ $item->product->name }}</a>
                                            <div class="relative">
                                                <a class="fw_light color_light sc_hover">{{ $item->category->name }}</a>
                                            </div>
                                            <hr class="d_none divider_light m_bottom_15">
                                            <p class="fw_light d_none m_bottom_14 color_grey">{{$item->product->description}}</p>
                                            <hr class="d_none divider_light m_bottom_15">
                                        </div>
                                        <div class="col-lg-5 col-md-5 color_light fs_large second_font t_align_r t_sm_align_c m_bottom_9">
                                            @if ($item->special_price)
                                                <s>{{$item->price_sale}}</s>
                                            @endif
                                                 <b class="scheme_color d_block">{{($item->special_price)?? $item->price_sale}}</b>
                                        </div>
                                    </div>
                                    <button  wire:click.prevent="store( {{$item->id}} , '{{$item->product->name}}' , {{($item->special_price)?? $item->price_sale}}  )" data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_2 m_bottom_9 d_block w_full t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase"><i class="fa fa-shopping-cart d_inline_m m_right_9"></i>Add To Cart</button>
                                    <div class="clearfix t_sm_align_c t_xs_align_l">
                                    <button  wire:click.prevent="addtowish( {{$item->id}} , '{{$item->product->name}}' , 1)" class="second_font f_sm_none d_sm_inline_b f_xs_left fs_medium sc_hover f_left">Add to Wishlist</button>
                                    </div>
                                </figcaption>
                            </figure>

                        </div>

                         @endforeach

                    </div>
                    <hr class="divider_light m_bottom_5">
                    <div class="d_table w_full m_bottom_15">
                        <div class="col-lg-6 col-md-6 col-sm-6 d_xs_block v_align_m d_table_cell f_none t_align_r t_xs_align_l p_xs_left_0">
                            <!--pagination-->
                                {!! $product->links('livewire.pag') !!}
                        </div>
                    </div>
                    <hr class="divider_light m_bottom_5">

                </main>

            </div>
        </div>
    </div>
    </section>
</div>


@push('scripts')
<script>
$(function () {

    var url = window.location;

    $('ul.main_menu a').filter(function () {
        return this.href == url;
    }).parents('li').addClass('current');

         $('ul.categories_list a').filter(function () {
             return this.href == url;
         }).addClass('fw_bold scheme_color bg_grey_light_2');


         $('ul.d_none a').filter(function () {
             return this.href == url;
         }).parentsUntil(".categories_list > .d_none")
             .css({'display': 'block'})
             .addClass('button').prev('button')
             .addClass('active').prev('a')
             .addClass('active');
   });
</script>
@endpush
