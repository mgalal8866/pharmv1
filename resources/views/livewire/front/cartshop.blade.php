<div>
    <div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
        <div class="container color_dark">
            <a href="{{ route('front') }}" class="sc_hover">{{ __('tran.home') }}</a> / <span class="color_light">{{ __('tran.shopcart') }}</span>
        </div>
    </div>
    <!--main content-->
    <div class="page_section_offset">
        <div class="container numbered_title_init">
            <h2 class="fw_light second_font color_dark m_bottom_27 tt_uppercase">{{ __('tran.shopcart') }}</h2>
            <table class="w_full shopping_cart_table m_bottom_38 m_xs_bottom_30">
                <thead class="d_xs_none">
                    <tr class="bg_grey_light_2 second_font">
                        <th><b>{{ __('tran.product') . __('tran.image') }}</b></th>
                        <th><b>{{ __('tran.product') . __('tran.name') }}</b></th>
                        <th><b>{{ __('tran.code') }}</b></th>
                        <th><b>{{ __('tran.price') }}</b></th>
                        <th><b>{{ __('tran.qty') }}</b></th>
                        <th><b>{{ __('tran.total') }}</b></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (Cart::instance('cart')->count() > 0)
                    @foreach (Cart::instance('cart')->content() as  $item)
                    <tr>
                        <td data-cell-title="Product Image"><img  width="100" height="100" src="{{ $item->model->warehouse_product()->first()->image}}"  class="w_full" alt=""></td>
                        <td data-cell-title="Product Name">
                            <a href="#" class="sc_hover second_font fs_large d_inline_b m_bottom_4">{{ $item->name}}</a>
                            {{-- <ul class="fw_light fs_small lh_small color_light">
                                <li>Size: <span class="color_dark">2-Seat Sofa</span>,</li>
                                <li>Color: <span class="color_dark">Red</span></li>
                            </ul> --}}
                        </td>
                        <td data-cell-title="Price" class="second_font">{{$item->model->warehouse_product()->first()->code}}</td>
                        <td data-cell-title="SKU" class="second_font lh_small">
                            @if ($item->model->warehouse_product()->first()->special_price)
                            <s class="color_light d_inline_b m_top_4 m_bottom_2">{{ $item->model->warehouse_product()->first()->price_sale }}</s><br>
                            @endif
                            <span class="color_dark">{{($item->model->warehouse_product()->first()->special_price)?? $item->model->warehouse_product()->first()->price_sale}}</span>
                        </td>
                        <td data-cell-title="Quantity">
                            <div class="quantity clearfix t_align_c">
                                <button wire:click.prevent="decreaseQty('{{$item->rowId}}')" class="f_left d_block minus black_hover tr_all">&#45;</button>
                                <input type="text" class="f_left color_light" readonly name="" value="{{$item->qty}}">
                                <button wire:click.prevent="increaseQty('{{$item->rowId}}')" class="f_left d_block black_hover tr_all">&#43;</button>
                            </div>
                        </td>
                        <td data-cell-title="Total" class="second_font"><b class="color_dark">{{  Cart::instance('cart')->total()}}</b></td>
                        <td class="t_align_c">
                            <button wire:click.prevent="destroy('{{$item->rowId}}')" class="button_type_8 black_hover grey state_2 m_xs_bottom_0 tr_all color_dark t_align_c vc_child m_bottom_5"><i class="fa fa-times fs_large d_inline_m"></i></button><br class="d_xs_none">
                            {{-- <button class="button_type_8 black_hover grey state_2 m_xs_bottom_0 tr_all color_dark t_align_c vc_child"><i class="fa fa-check fs_large d_inline_m"></i></button> --}}
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7">
                         <CENTER>
                            <b>No Product Here</b>
                        </CENTER>
                        </td>
                    </tr>
                    @endif
                </tbody>
                <tfoot>
                    <tr class="bg_grey_light_2">
                        <td colspan="7">
                            <a href="{{ route('front') }}" class="button_type_2 d_block tt_uppercase fs_medium second_font f_left tr_all f_xs_none t_align_c m_xs_bottom_5 lbrown state_2"><span class="d_inline_b m_left_10 m_right_10">{{ __('tran.continueshopping') }}</span></a>
                            <button wire:click="clearcart()" class="button_type_2 tt_uppercase fs_medium second_font f_right tr_all t_align_c f_xs_none w_xs_full grey state_2"><span class="d_inline_b m_left_10 m_right_10">{{ __('tran.clearcart') }}</span></button>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div class="row">
                {{-- <section class="col-lg-3 col-md-3 col-sm-3 m_bottom_40 m_xs_bottom_30">
                    <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Discount Codes</h5>
                    <hr class="divider_bg m_bottom_23">
                    <p class="second_font m_bottom_15">Enter your coupon code if you have one.</p>
                    <form>
                        <ul>
                            <li class="m_bottom_10">
                                <input type="text" name="" class="w_full tr_all fw_light fs_medium">
                            </li>
                            <li>
                                <button class="button_type_2 tt_uppercase fs_medium second_font w_full tr_all t_align_c black state_2">Apply Coupon</button>
                            </li>
                        </ul>
                    </form>
                </section>
                <section class="col-lg-5 col-md-5 col-sm-5 m_bottom_40 m_xs_bottom_30">
                    <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Estimate Shipping and Tax</h5>
                    <hr class="divider_bg m_bottom_23">
                    <p class="second_font m_bottom_10">Enter your destination to get a shipping estimate.</p>
                    <form>
                        <ul>
                            <li class="m_bottom_15">
                                <label class="required second_font d_inline_b m_bottom_5">Country</label>
                                <div class="styled_select relative">
                                    <div class="select_title fs_medium fw_light color_light relative d_none tr_all">United States</div>
                                    <select>
                                        <option value="United States">United States</option>
                                        <option value="England">England</option>
                                        <option value="Australia">Australia</option>
                                        <option value="France">France</option>
                                    </select>
                                    <ul class="options_list d_none tr_all hidden bg_grey_light_2"></ul>
                                </div>
                            </li>
                            <li class="m_bottom_10">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-7 m_xs_bottom_15">
                                        <label class="second_font d_inline_b m_bottom_5">State/Province</label>
                                        <div class="styled_select relative">
                                            <div class="select_title fs_medium fw_light color_light relative d_none tr_all ellipsis">Please select region, state or province</div>
                                            <select>
                                                <option value="State 1">State 1</option>
                                                <option value="State 2">State 2</option>
                                                <option value="State 3">State 3</option>
                                                <option value="State 4">State 4</option>
                                            </select>
                                            <ul class="options_list d_none tr_all hidden bg_grey_light_2"></ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                        <label for="zip_postal_code" class="second_font d_inline_b m_bottom_5 clickable">Zip/Postal Code</label>
                                        <input type="text" class="w_full tr_all fw_light fs_medium" name="" id="zip_postal_code">
                                    </div>
                                </div>
                            </li>
                            <li><button class="button_type_2 tt_uppercase fs_medium second_font tr_all t_align_c black state_2"><span class="d_inline_b m_left_20 m_right_20">Get A Quote</span></button></li>
                        </ul>
                    </form>
                </section> --}}
                <section class="col-lg-4 col-md-4 col-sm-4 m_bottom_40 m_xs_bottom_30">
                    <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">{{ __('tran.total') }}</h5>
                    <hr class="divider_bg m_bottom_25">
                    <table class="w_full total_sc_table second_font type_2 t_xs_align_c">
                        <tbody>
                            {{-- <tr>
                                <td><b>Subtotal</b></td>
                                <td><b class="color_dark fs_large">$6 550.00</b></td>
                            </tr> --}}
                            <tr class="scheme_color">
                                <td><b>{{ __('tran.total') }}</b></td>
                                <td><b class="fs_large">{{  Cart::instance('cart')->total()}}</b></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="bg_grey_light_2 t_align_c">
                                <td colspan="2">
                                    <a href="{{(Cart::instance('cart')->count()>0)?route('checkout'): '#'}}" class="button_type_2 tt_uppercase fs_medium second_font tr_all lbrown d_block w_full m_top_10 m_bottom_15">{{ __('tran.procedcheck') }}</a>
                                    {{-- <a href="#" class="fs_small sc_hover d_inline_b m_bottom_5">Checkout with Multiple Addresses</a> --}}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </section>
            </div>
            {{-- <section>
                <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Crosssell Products</h5>
                <hr class="divider_bg m_bottom_25">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_35 m_xs_bottom_30">
                        <figure class="relative r_image_container c_image_container">
                            <a href="#" class="d_block m_bottom_20 relative">
                                <img src="images/home_img_4.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/home_v3_img_3.jpg" alt="" class="c_image_2 tr_all">
                            </a>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Sed ut perspiciatis</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Sofas</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$1 102.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_35 m_xs_bottom_30">
                        <figure class="relative r_image_container c_image_container">
                            <a href="#" class="d_block m_bottom_20 relative">
                                <img src="images/home_v3_img_4.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/home_img_5.jpg" alt="" class="c_image_2 tr_all">
                            </a>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Unde omnis iste natus</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Tables</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$730.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_35 m_xs_bottom_30">
                        <figure class="relative r_image_container c_image_container">
                            <a href="#" class="d_block m_bottom_20 relative">
                                <img src="images/home_img_6.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/home_v3_img_5.jpg" alt="" class="c_image_2 tr_all">
                            </a>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">Fusce euismod consequat ante</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Beds</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$279.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_35 m_xs_bottom_30">
                        <figure class="relative r_image_container c_image_container">
                            <div class="product_label fs_ex_small circle color_white bg_scheme_color t_align_c vc_child tt_uppercase"><i class="d_inline_m">New!</i></div>
                            <a href="#" class="d_block m_bottom_20 relative">
                                <img src="images/home_img_7.jpg" alt="" class="c_image_1 tr_all">
                                <img src="images/home_v3_img_6.jpg" alt="" class="c_image_2 tr_all">
                            </a>
                            <figcaption class="t_align_c">
                                <ul>
                                    <li><a href="#" class="second_font sc_hover">In pede mi aliquet</a></li>
                                    <li class="m_bottom_7"><a href="#" class="color_light sc_hover fw_light d_inline">Chairs</a></li>
                                    <li>
                                        <ul class="rating_list hr_list d_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </li>
                                    <li class="m_bottom_16"><b class="fs_large second_font scheme_color">$199.00</b></li>
                                    <li>
                                        <div class="clearfix d_inline_b">
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                            <button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                            <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_8 tr_all lbrown state_2 f_left color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-shopping-cart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Cart</span></button>
                                        </div>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section> --}}
        </div>
    </div>
</div>
