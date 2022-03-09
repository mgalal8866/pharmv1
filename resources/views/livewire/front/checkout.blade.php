<div>
    <div class="page_section_offset">
        <div class="container numbered_title_init">
            <h2 class="fw_light second_font color_dark m_bottom_27 tt_uppercase">{{ __('tran.checkout') }}</h2>
            <!--checkout method-->
                {{-- <section class="m_bottom_35 m_xs_bottom_30">
                    <div class="d_table w_full m_bottom_5 second_font">
                        <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <h5 class="color_dark tt_uppercase fw_light numbered_title d_inline_m ellipsis_mxs w_full">Checkout Method</h5>
                        </div>
                        <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-2 t_align_r">
                            <button class="button_type_4 grey state_2 tr_all vc_child d_inline_b black_hover"><i class="fa fa-pencil d_inline_m m_top_0"></i></button>
                        </div>
                    </div>
                    <hr class="divider_bg m_bottom_23">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 second_font">
                            <b class="d_block color_dark m_bottom_20">Checkout as a Guest or Register</b>
                            <form id="register" class="m_bottom_13">
                                <fieldset>
                                    <legend class="color_dark m_bottom_3">Register with us for future convenience:</legend>
                                    <ul>
                                        <li class="m_bottom_2"><input type="radio" id="radio_2" name="radio_1" checked><label for="radio_2" class="second_font m_right_17 m_top_2 d_inline_b">Checkout as Guest</label></li>
                                        <li><input type="radio" id="radio_3" name="radio_1"><label for="radio_3" class="second_font m_top_2 d_inline_b">Register</label></li>
                                    </ul>
                                </fieldset>
                            </form>
                            <mark class="fs_large bg_transparent scheme_color d_block m_bottom_20">Register and save time!</mark>
                            <p class="m_bottom_15">Register with us for future convenience:</p>
                            <ul class="vr_list_type_2 m_bottom_15">
                                <li><i class="fa fa-check scheme_color"></i>Fast and easy check out</li>
                                <li><i class="fa fa-check scheme_color"></i>Easy access to your order history and status</li>
                            </ul>
                            <button type="submit" form="register" class="button_type_2 tt_uppercase fs_medium second_font tr_all t_align_c black state_2"><span class="d_inline_b m_left_10 m_right_10">Continue</span></button>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                            <b class="d_block color_dark m_bottom_20 second_font">Login</b>
                            <p class="m_bottom_10 color_dark second_font">Already registered? Please log in below:</p>
                            <form>
                                <ul>
                                    <li class="m_bottom_15">
                                        <label for="reg_email" class="required clickable d_inline_b m_bottom_5 second_font">Email Address</label><br>
                                        <input type="email" id="reg_email" class="tr_all w_full fs_medium color_light">
                                    </li>
                                    <li class="m_bottom_10">
                                        <label for="reg_pass" class="required clickable d_inline_b m_bottom_5 second_font">Password</label><br>
                                        <input type="password" id="reg_pass" class="tr_all w_full fs_medium color_light">
                                    </li>
                                    <li class="clearfix second_font">
                                        <button type="submit" class="button_type_2 tt_uppercase fs_medium f_left t_align_c black state_2 m_bottom_5 tr_all"><span class="d_inline_b m_left_10 m_right_10">Login</span></button>
                                        <div class="f_right t_align_r fs_medium lh_small">
                                            <div class="m_bottom_5"><span class="required"></span> Required Fields</div>
                                            <a href="#" class="sc_hover">Forgot your password?</a>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </section> --}}
            <!--billing information-->
                {{-- <section class="m_bottom_35 m_xs_bottom_30">
                    <div class="d_table w_full m_bottom_5 second_font">
                        <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <h5 class="color_dark tt_uppercase fw_light numbered_title d_inline_m ellipsis_mxs w_full">Billing Information</h5>
                        </div>
                        <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-2 t_align_r">
                            <button class="button_type_4 grey state_2 tr_all vc_child d_inline_b black_hover"><i class="fa fa-pencil d_inline_m m_top_0"></i></button>
                        </div>
                    </div>
                    <hr class="divider_bg m_bottom_23">
                    <form class="b_default_layout">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 m_bottom_15">
                                <ul>
                                    <li class="m_bottom_15">
                                        <label for="bi_name" class="required clickable d_inline_b m_bottom_5 second_font">First Name</label><br>
                                        <input type="text" id="bi_name" class="tr_all w_full fs_medium color_light">
                                    </li>
                                    <li>
                                        <label for="bi_company" class="clickable d_inline_b m_bottom_5 second_font">Company</label><br>
                                        <input type="text" id="bi_company" class="tr_all w_full fs_medium color_light">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15 m_xs_bottom_15">
                                <ul>
                                    <li class="m_bottom_15">
                                        <label for="bi_last_name" class="required clickable d_inline_b m_bottom_5 second_font">Last Name</label><br>
                                        <input type="text" id="bi_last_name" class="tr_all w_full fs_medium color_light">
                                    </li>
                                    <li>
                                        <label for="bi_email" class="clickable required d_inline_b m_bottom_5 second_font">Email Address</label><br>
                                        <input type="email" id="bi_email" class="tr_all w_full fs_medium color_light">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul>
                            <li class="m_bottom_10">
                                <label for="bi_address" class="required clickable d_inline_b m_bottom_5 second_font">Address</label><br>
                                <input type="text" id="bi_address" class="tr_all w_full fs_medium color_light">
                            </li>
                            <li class="m_bottom_15">
                                <input type="text" class="tr_all w_full fs_medium color_light">
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_15 m_bottom_12">
                                <ul>
                                    <li class="m_bottom_15">
                                        <label for="bi_city" class="required clickable d_inline_b m_bottom_5 second_font">City</label><br>
                                        <input type="text" id="bi_city" class="tr_all w_full fs_medium color_light">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="bi_code" class="clickable required d_inline_b m_bottom_5 second_font">Zip/Postal Code</label><br>
                                        <input type="text" id="bi_code" class="tr_all w_full fs_medium color_light">
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="bi_telephone" class="clickable required d_inline_b m_bottom_5 second_font">Telephone</label><br>
                                        <input type="text" id="bi_telephone" class="tr_all w_full fs_medium color_light">
                                    </li>
                                    <li>
                                        <label for="bi_password" class="clickable required d_inline_b m_bottom_5 second_font">Password</label><br>
                                        <input type="password" id="bi_password" class="tr_all w_full fs_medium color_light">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_12 m_xs_bottom_15">
                                <ul>
                                    <li class="m_bottom_15">
                                        <label class="required clickable d_inline_b m_bottom_5 second_font">State/Province</label><br>
                                        <div class="styled_select relative m_bottom_15">
                                            <div class="select_title fs_medium fw_light color_light relative d_none tr_all">&nbsp;</div>
                                            <select>
                                                <option value="State 1">State 1</option>
                                                <option value="State 2">State 2</option>
                                                <option value="State 3">State 3</option>
                                                <option value="State 4">State 4</option>
                                            </select>
                                            <ul class="options_list d_none tr_all hidden bg_grey_light_2"></ul>
                                        </div>
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="bi_email" class="clickable required d_inline_b m_bottom_5 second_font">Country</label><br>
                                        <div class="styled_select relative m_bottom_15">
                                            <div class="select_title fs_medium fw_light color_light relative d_none tr_all">&nbsp;</div>
                                            <select>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="England">England</option>
                                                <option value="France">France</option>
                                            </select>
                                            <ul class="options_list d_none tr_all hidden bg_grey_light_2"></ul>
                                        </div>
                                    </li>
                                    <li class="m_bottom_15">
                                        <label for="bi_fax" class="clickable d_inline_b m_bottom_5 second_font">Fax</label><br>
                                        <input type="text" id="bi_fax" class="tr_all w_full fs_medium color_light">
                                    </li>
                                    <li>
                                        <label for="bi_password2" class="clickable required d_inline_b m_bottom_5 second_font">Confirm Password</label><br>
                                        <input type="password" id="bi_password2" class="tr_all w_full fs_medium color_light">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="m_bottom_13 second_font">
                            <li class="m_bottom_2"><input type="radio" id="radio_4" name="ship_to" checked><label for="radio_4" class="second_font m_right_17 m_top_2 d_inline_b">Ship to this address</label></li>
                            <li><input type="radio" id="radio_5" name="ship_to"><label for="radio_5" class="second_font m_top_2 d_inline_b">Ship to different address</label></li>
                        </ul>
                        <div class="t_align_r second_font">
                            <div class="m_bottom_8 fs_medium small"><span class="required"></span> Required Fields</div>
                            <button class="button_type_2 tt_uppercase fs_medium second_font t_align_c black state_2 m_bottom_5 tr_all"><span class="d_inline_b m_left_10 m_right_10">Continue</span></button>
                        </div>
                    </form>
                </section> --}}
            <!--shipping information-->
                {{-- <section class="second_font m_bottom_30">
                    <h5 class="color_dark tt_uppercase second_font fw_light numbered_title type_2 d_inline_m m_bottom_5 ellipsis_mxs w_full">Shipping Information</h5>
                    <hr class="divider_bg">
                </section> --}}
            <!--shipping method-->
                {{-- <section class="second_font m_bottom_35 m_xs_bottom_30">
                    <div class="d_table w_full m_bottom_5">
                        <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <h5 class="color_dark tt_uppercase second_font fw_light numbered_title d_inline_m ellipsis_mxs w_full">Shipping Method</h5>
                        </div>
                        <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-2 t_align_r">
                            <button class="button_type_4 grey state_2 tr_all vc_child d_inline_b black_hover"><i class="fa fa-pencil d_inline_m m_top_0"></i></button>
                        </div>
                    </div>
                    <hr class="divider_bg m_bottom_23">
                    <form>
                        <b class="d_block m_bottom_3">Free Shipping</b>
                        <input type="radio" id="radio_6" name="shipping_method" checked><label for="radio_6" class="second_font m_right_17 m_top_2 d_inline_b">Free <b class="scheme_color">$0</b></label>
                        <hr class="m_top_11 m_bottom_10 divider_light">
                        <b class="d_block m_bottom_3">Flat Rate</b>
                        <input type="radio" id="radio_7" name="shipping_method"><label for="radio_7" class="second_font m_top_2 d_inline_b">Standard Shipping <b class="scheme_color">$5.00</b></label>
                        <div class="clearfix m_top_10 m_xs_top_15">
                            <button class="button_type_2 tt_uppercase fs_medium second_font f_right t_align_c black state_2 m_bottom_5 tr_all"><span class="d_inline_b m_left_10 m_right_10">Continue</span></button>
                        </div>
                    </form>
                </section> --}}
            <!--payment information-->
                {{-- <section class="second_font m_bottom_35 m_xs_bottom_30">
                    <div class="d_table w_full m_bottom_5">
                        <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <h5 class="color_dark tt_uppercase second_font fw_light numbered_title d_inline_m ellipsis_mxs w_full">Payment Information</h5>
                        </div>
                        <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-2 t_align_r">
                            <button class="button_type_4 grey state_2 tr_all vc_child d_inline_b black_hover"><i class="fa fa-pencil d_inline_m m_top_0"></i></button>
                        </div>
                    </div>
                    <hr class="divider_bg m_bottom_23">
                    <form>
                        <b class="d_block m_bottom_3">Free Shipping</b>
                        <ul>
                            <li class="m_bottom_3">
                                <input type="radio" id="radio_8" name="payment_info" checked><label for="radio_8" class="second_font m_right_17 m_top_2 d_inline_b">Check / Money order</label>
                            </li>
                            <li class="m_bottom_17">
                                <input type="radio" id="radio_9" name="payment_info"><label for="radio_9" class="second_font m_top_2 d_inline_b">Credit card (saved)</label>
                            </li>
                            <li class="clearfix">
                                <button class="button_type_2 tt_uppercase fs_medium second_font f_right t_align_c black state_2 m_bottom_5 tr_all"><span class="d_inline_b m_left_10 m_right_10">Continue</span></button>
                            </li>
                        </ul>
                    </form>
                </section> --}}
            <!--order review-->
            <section class="second_font m_bottom_35 m_xs_bottom_30">
                <h5 class="color_dark tt_uppercase second_font fw_light numbered_title d_inline_m m_bottom_5 ellipsis_mxs w_full">{{ __('tran.orderreview') }}</h5>
                <hr class="divider_bg m_bottom_30">
                <table class="w_full second_font order_review_table m_bottom_38 m_xs_bottom_30">
                    <thead class="d_xs_none">
                        <tr class="bg_grey_light_2">
                            <th><b>{{ __('tran.productname') }}</b></th>
                            <th><b>{{ __('tran.code') }}</b></th>
                            <th><b>{{ __('tran.price') }}</b></th>
                            <th><b>{{ __('tran.qty') }}</b></th>
                            <th><b>{{ __('tran.total') }}</b></th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (Cart::instance('cart')->count() > 0)
                        @foreach (Cart::instance('cart')->content() as  $item)


                        <tr>
                            <td data-cell-title="Product Name">
                                <a href="#" class="sc_hover fs_large d_inline_b m_bottom_4">{{  $item->name }}</a>
                                <ul class="fs_small color_light fw_light lh_small">
                                    {{-- <li>Size: <span class="color_dark">2-Seat Sofa</span>,</li>
                                    <li>Color: <span class="color_dark">Red</span></li> --}}
                                </ul>
                            </td>
                            <td data-cell-title="SKU">{{$item->model->code}}</td>
                            <td data-cell-title="Price" class="fs_large">
                                @if ($item->model->special_price)
                                <s class="color_light">{{ $item->model->price_sale}}</s>
                                <br>
                                @endif

                                <span class="color_dark">{{($item->model->special_price)?? $item->model->price_sale}}</span>



                            </td>
                            <td data-cell-title="Qty">{{$item->qty}}</td>
                            <td data-cell-title="Total" class="fs_large"><span class="color_dark">{{$item->qty * ( ($item->model->special_price)??$item->model->price_sale) }}</span></td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5">
                             <CENTER>
                                <b>No Product Here</b>
                            </CENTER>
                            </td>
                        </tr>
                        @endif
                        <tr class="t_xs_align_c">
                            <td colspan="4"><b>{{ __('tran.subtotal') }}</b></td>
                            <td colspan="1" class="fs_large color_dark"><b>{{  Cart::instance('cart')->total()}}</b></td>
                        </tr>
                        {{-- <tr class="t_xs_align_c">
                            <td colspan="4"><b>Shipping &amp; Handling (Flat Rate - Fixed)</b></td>
                            <td colspan="1" class="fs_large color_dark"><b>$5.00</b></td>
                        </tr> --}}
                    </tbody>
                    <tfoot class="t_xs_align_c">
                        <tr>
                            <td colspan="4"><b class="scheme_color fs_ex_large">{{ __('tran.grandtotal') }}</b></td>
                            <td colspan="1" class="v_align_m"><b class="scheme_color fs_big_4">{{  Cart::instance('cart')->total()}}</b></td>
                        </tr>
                        <tr class="bg_grey_light_2">
                            <td colspan="3" class="br_none v_align_m">Forgot an item? <a href="{{route('shopping.cart') }}" class="sc_hover">{{ __('tran.editcart') }}</a></td>
                            <td colspan="2" class="t_align_r t_xs_align_c">
                                <a @if(Cart::instance('cart')->count() > 0 )wire:click="sendorder()"@endif href="#" class="button_type_2 tt_uppercase fs_medium second_font d_inline_b t_align_c lbrown tr_all">
                                <span class="d_inline_b m_left_10 m_right_10">{{ __('tran.placeorder') }}</span></a></td>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </div>
</div>
