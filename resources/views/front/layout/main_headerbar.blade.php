<header role="banner" class="w_inherit">
    <!--top part-->
    <div class="header_top_part p_top_0 p_bottom_0">
        <div class="container">
            <div class="d_table d_xs_block w_full">
                <div class="col-lg-8 col-md-7 col-sm-8 f_none d_table_cell d_xs_block v_align_m t_xs_align_c m_xs_bottom_10">
                    <div class="clearfix d_inline_m t_align_l">
                            <!--language-->
                            <div class="f_right relative transform3d">
                                <button class="tr_all second_font color_dark type_2" data-open-dropdown="#language">
                                    @if (App::getLocale() == 'ar')
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                     <img src="{{ asset('assets/front/images/flag_eg.png')}}" alt="" class="d_inline_m m_right_10"><i class="fa fa-angle-down d_inline_m fs_small"></i>
                                    @else
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <img src="{{ asset('assets/front/images/flag_en.jpg')}}" alt="" class="d_inline_m m_right_10"><i class="fa fa-angle-down d_inline_m fs_small"></i>
                                    @endif
                                </button>
                                <ul id="language" data-show="wicket" data-hide="wicketout" class="sub_menu dropdown type_2 fs_medium bg_grey_light second_font animated">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                                  @endforeach
                                    {{-- <li>
                                        <a href="#" class="sc_hover">
                                            <img src="{{ asset('assets/front/images/flag_en.jpg')}}" alt="" class="d_inline_m m_right_7">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="sc_hover">
                                            <img src="{{ asset('assets/front/images/flag_eg.png')}}" alt="" class="d_inline_m m_right_7">
                                            Arabic
                                        </a>
                                    </li> --}}

                                </ul>
                            </div>
                    </div>
                        <div class="d_inline_m t_xs_align_c fw_light color_light fs_small">
                            {{-- <span class="scheme_color fw_medium">Free shipping</span> on orders over $100. Need Help? <span class="scheme_color fw_medium">866.526.3979</span> --}}
                        </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-4 f_none d_table_cell d_xs_block v_align_m t_align_r t_xs_align_c m_xs_bottom_10">
                    <!--shop nav-->
                    @if(Auth::guard('brandaccount')->check())
                    <nav class="d_inline_b">
                        <ul class="hr_list second_font si_list fs_small">
                            <li><a class="sc_hover tr_delay" href="account.html">My Account</a></li>
                            <li><a class="sc_hover tr_delay" href="orders_list.html">Orders List</a></li>
                            <li><a class="sc_hover tr_delay" href="wishlist.html">Wishlist</a></li>
                            <li><a class="sc_hover tr_delay" href="{{ route('checkout') }}">Checkout</a></li>
                        </ul>
                    </nav>

                    @endif
                    <div class=" d_inline_b f_right relative transform3d">



                        <button class="tr_all second_font color_dark type_2 m_sm_top_10 m_xs_top_0" data-open-dropdown="#login"><i class="fa fa-user d_inline_m m_right_5"></i> <span class="fs_small">{{ __('tran.login') }}</span></button>
                        <div id="login" data-show="fadeInUp" data-hide="fadeOutDown" class="dropdown bg_grey_light login_dropdown animated">
                            <form class="m_bottom_15">
                                <ul>
                                    <li class="m_bottom_15">
                                        <label for="username" class="second_font m_bottom_4 d_inline_b fs_medium">Username</label>
                                        <input type="text" name="" id="username" class="w_full tr_all">
                                    </li>
                                    <li class="m_bottom_20">
                                        <label for="password" class="second_font m_bottom_4 d_inline_b fs_medium">Password</label>
                                        <input type="password" name="" id="password" class="w_full tr_all">
                                    </li>
                                    <li class="m_bottom_20">
                                        <input type="checkbox" name="" id="remember_me">
                                        <label for="remember_me" class="second_font fs_medium">Remember me</label>
                                    </li>
                                    <li>
                                        <button class="t_align_c tt_uppercase w_full second_font d_block fs_medium button_type_2 lbrown tr_all">Log In</button>
                                    </li>
                                </ul>
                            </form>
                            <div class="m_bottom_14 t_align_c">
                                <a href="#" class="second_font sc_hover fs_small">Forgot your password?</a><br>
                                <a href="#" class="second_font sc_hover fs_small">Forgot your username?</a>
                            </div>
                            <hr class="divider_white m_bottom_25">
                            <h5 class="color_dark tt_uppercase second_font t_align_c m_bottom_15 fw_light">New Customer?</h5>
                            <a href="#" role="button" class="button_type_2 tt_uppercase fs_medium second_font d_block t_align_c black state_2">Create An Account</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr>
    <div class="header_middle_part type_2 t_xs_align_c">
        <div class="container">
            <div class="d_table w_full d_xs_block">
                <div class="col-lg-4 col-md-4 col-sm-4 d_table_cell d_xs_block f_none v_align_m m_xs_bottom_15">
                    <!--searchform-->
                    <form role="search" class="relative db_xs_centered button_in_input">
                        <input type="text" name="" tabindex="1" placeholder="Search" class="fs_medium color_light fw_light w_full tr_all">
                        <button class="color_dark tr_all color_lbrown_hover"><i class="fa fa-search d_inline_m"></i></button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 d_table_cell t_align_c d_xs_block f_none v_align_m m_xs_bottom_15">
                    <!--logo-->
                    <a href="index.html" class="d_inline_b">
                        <img src="{{ asset('assets/front/images/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 d_table_cell d_xs_block f_none v_align_m t_align_r t_xs_align_c">
                    <ul class="hr_list si_list shop_list f_right f_sm_none d_sm_inline_b t_align_l">
                        <li>
                          <livewire:front.countwish/>
                        </li>
                        {{-- <li>
                            <a href="#" class="color_lbrown_hover vc_child">
                                <span class="d_inline_m">
                                    <i class="fa fa-arrow-right fs_small"></i><i class="fa fa-arrow-left fs_small"></i><sup class="color_dark">2</sup>
                                </span>
                            </a>
                        </li> --}}
                        <!--shopping cart-->
                        <li class="">
                            <button class="color_dark active_lbrown tr_all" data-open-dropdown="#shopping_cart">
                               <livewire:front.countcart/>
                            </button>
                            <div id="shopping_cart" data-show="fadeInUp" data-hide="fadeOutDown" class="relative open_mini_shopping_cart bg_grey_light dropdown animated">
                                <div class="sc_header fs_small fw_light">Recently added item(s)</div>
                                <hr class="divider_white">
                                <ul class="shopping_cart_list m_bottom_4">
                                    <li class="relative">
                                        <div class="clearfix lh_small">
                                            <a href="#" class="f_left m_right_10 d_block"><img src="{{ asset('assets/front/images/sc_img_1.jpg')}}" alt=""></a>
                                            <a href="#" class="fs_medium second_font color_dark sc_hover d_block m_bottom_4">Cursus eleifend elit aenean</a>
                                            <p class="fs_medium">1 x <b class="color_dark">$499.00</b></p>
                                        </div>
                                        <hr class="divider_white m_top_15 m_bottom_0">
                                        <span class="close fs_small color_light tr_all color_dark_hover fw_light">x</span>
                                    </li>
                                    <li class="relative">
                                        <div class="clearfix lh_small">
                                            <a href="#" class="f_left m_right_10 d_block"><img src="{{ asset('assets/front/images/sc_img_2.jpg')}}" alt=""></a>
                                            <a href="#" class="fs_medium second_font color_dark sc_hover d_block m_bottom_4">Auctor wisi et urna</a>
                                            <p class="m_bottom_4 fs_medium">1 x <b class="color_dark">$1,599.00</b></p>
                                            <ul class="fw_light fs_small lh_small">
                                                <li>Size: <span class="color_dark">2-Seat Sofa</span>,</li>
                                                <li>Color: <span class="color_dark">Red</span></li>
                                            </ul>
                                        </div>
                                        <hr class="divider_white m_top_15 m_bottom_0">
                                        <span class="close fs_small color_light tr_all color_dark_hover fw_light">x</span>
                                    </li>
                                    <li class="relative">
                                        <div class="clearfix lh_small">
                                            <a href="#" class="f_left m_right_10 d_block"><img src="{{ asset('assets/front/images/sc_img_3.jpg')}}" alt=""></a>
                                            <a href="#" class="fs_medium second_font color_dark sc_hover d_block m_bottom_4">Aliquam erat volut</a>
                                            <p class="fs_medium">2 x <b class="color_dark">$99.00</b></p>
                                        </div>
                                        <hr class="divider_white m_top_15 m_bottom_0">
                                        <span class="close fs_small color_light tr_all color_dark_hover fw_light">x</span>
                                    </li>
                                </ul>
                                <ul class="fs_medium second_font color_dark m_bottom_15">
                                    <li><span class="d_inline_b total_title">Tax:</span><span class="fw_light">$0.00</span></li>
                                    <li><span class="d_inline_b total_title">Discount:</span><span class="fw_light">$37.00</span></li>
                                    <li><b><span class="d_inline_b total_title">Total:</span>$999.00</b></li>
                                </ul>
                                <a href="#" role="button" class="button_type_2 tt_uppercase fs_medium second_font d_block t_align_c black state_2 m_bottom_5">View Cart</a>
                                <a href="#" role="button" class="t_align_c tt_uppercase w_full second_font d_block fs_medium button_type_2 lbrown tr_all">Checkout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom_part bg_white w_inherit">
        <div class="container t_align_c">
            <hr class="divider_black">
            <button id="mobile_menu_button" class="vc_child d_xs_block db_xs_centered d_none m_bottom_10 m_top_15 bg_lbrown color_white tr_all"><i class="fa fa-navicon d_inline_m"></i></button>
            <!--main menu-->
            <nav role="navigation" class="d_xs_none t_align_c t_xs_align_l">
                <ul class="main_menu hr_list d_inline_b d_xs_block t_sm_align_l relative second_font fs_medium t_align_l">
                    <li class="current">
                        <a href="index.html" class="tt_uppercase tr_delay">{{ __('tran.home') }}</a>
                    </li>
                    <li>
                        <a href="index.html" class="tt_uppercase tr_delay">{{ __('tran.shop') }} </a>
                    </li>

                    <li>
                        <a class="tt_uppercase tr_delay">Shop <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5"></i></a>
                        <div class="mega_menu bg_grey_light tr_all">
                                    <div class="row">
                                        <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                            <h6 class="color_dark m_bottom_13"><b class="second_font ">Living Rooms</b></h6>
                                            <img src="{{ asset('assets/front/images/mega_menu_img_1.jpg')}}" alt="" class="m_bottom_3">
                                            <ul class="mega_menu_list">
                                                <li><a href="#" class="d_block sc_hover tr_delay">Sofas</a></li>
                                                <li><a href="#" class="d_block sc_hover tr_delay">Chairs</a></li>
                                                <li><a href="#" class="d_block sc_hover tr_delay">Ottomans</a></li>
                                            </ul>
                                        </section>
                                        <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                            <h6 class="color_dark m_bottom_13"><b class="second_font ">Bedrooms</b></h6>
                                            <img src="{{ asset('assets/front/images/mega_menu_img_2.jpg')}}" alt="" class="m_bottom_3">
                                            <ul class="mega_menu_list">
                                                <li><a href="#" class="d_block sc_hover tr_delay">Beds</a></li>
                                                <li><a href="#" class="d_block sc_hover tr_delay">Dressers/Chests</a></li>
                                                <li><a href="#" class="d_block sc_hover tr_delay">Nightstands</a></li>
                                            </ul>
                                        </section>
                                        <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                            <h6 class="color_dark m_bottom_13"><b class="second_font ">Dining Rooms</b></h6>
                                            <img src="{{ asset('assets/front/images/mega_menu_img_3.jpg')}}" alt="" class="m_bottom_3">
                                            <ul class="mega_menu_list">
                                                <li><a href="#" class="d_block sc_hover tr_delay">Tables</a></li>
                                                <li><a href="#" class="d_block sc_hover tr_delay">Dining Chairs</a></li>
                                                <li><a href="#" class="d_block sc_hover tr_delay">China Cabinets</a></li>
                                            </ul>
                                        </section>
                                        <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">
                                            <h6 class="color_dark m_bottom_13"><b class="second_font ">Home Office</b></h6>
                                            <img src="{{ asset('assets/front/images/mega_menu_img_4.jpg')}}" alt="" class="m_bottom_3">
                                            <ul class="mega_menu_list">
                                                <li><a href="#" class="d_block sc_hover tr_delay">Desks &amp; Tables</a></li>
                                                <li><a href="#" class="d_block sc_hover tr_delay">Office Chairs</a></li>
                                                <li><a href="#" class="d_block sc_hover tr_delay">Workspace Storage</a></li>
                                            </ul>
                                        </section>
                                    </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
