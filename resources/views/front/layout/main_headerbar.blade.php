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
                                @endforeach {{--
                                <li>
                                    <a href="#" class="sc_hover">
                                        <img src="{{ asset('assets/front/images/flag_en.jpg')}}" alt="" class="d_inline_m m_right_7"> English
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="sc_hover">
                                        <img src="{{ asset('assets/front/images/flag_eg.png')}}" alt="" class="d_inline_m m_right_7"> Arabic
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
                             {{-- <li><a class="sc_hover tr_delay" href="account.html">{{ __('tran.myaccount') }}</a>{{ Auth::guard('brandaccount')->user()->name }}</li> --}}
                            <li><a class="sc_hover tr_delay" href="{{ route('orderlist') }}">{{ __('tran.orderlist') }}</a></li>
                            <li><a class="sc_hover tr_delay" href="{{ route('wishlist') }}">{{ __('tran.wishlist') }}</a></li>
                            <li><a class="sc_hover tr_delay" href="{{ route('checkout') }}">{{ __('tran.checkout') }}</a></li>
                            <li><a class="sc_hover tr_delay" href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('tran.logout') }}</a></li>

                        </ul>
                    </nav>
                    <form id="logout-form" action="{{ route('logoutfront') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <div class=" d_inline_b f_right relative transform3d">
                        <button class="tr_all second_font color_dark type_2 m_sm_top_10 m_xs_top_0" data-open-dropdown="#login"><i class="fa fa-user d_inline_m m_right_5"></i> <span class="fs_small">{{ __('tran.login') }}</span></button>
                        <div id="login" data-show="fadeInUp" data-hide="fadeOutDown" class="dropdown bg_grey_light login_dropdown animated">
                            <form method="POST" action="{{ route('logoncustmer') }}" class="m_bottom_15">
                                @csrf
                                <ul>
                                    <li class="m_bottom_15">
                                        <label for="email" class="second_font m_bottom_4 d_inline_b fs_medium">{{ __('tran.email') }}</label>
                                        <input type="text" name="email" id="email" class="w_full tr_all"> @error('email')
                                        <span class="text-danger text-right" role="alert">
                                           *{{ $message }}
                                        </span> @enderror
                                    </li>
                                    <li class="m_bottom_20">
                                        <label for="password" class="second_font m_bottom_4 d_inline_b fs_medium">{{ __('tran.password') }}</label>
                                        <input type="password" name="password" id="password" class="w_full tr_all"> @error('password')
                                        <span class="text-danger text-right" role="alert">
                                           *{{ $message }}
                                        </span> @enderror
                                    </li>
                                    <li class="m_bottom_20">
                                        <input type="checkbox" name="remember_me" id="remember_me">
                                        <label for="remember_me" name="remember_me" id="remember_me" class="second_font fs_medium">{{ __('tran.rememberme') }}</label>
                                    </li>
                                    <li>
                                        <button type="submit" class="t_align_c tt_uppercase w_full second_font d_block fs_medium button_type_2 lbrown tr_all">{{ __('tran.login') }}</button>
                                    </li>
                                </ul>
                            </form>
                            {{-- <div class="m_bottom_14 t_align_c">
                                <a href="#" class="second_font sc_hover fs_small">{{ __('tran.forgotyourpassword') }}</a>
                            </div> --}}
                            <hr class="divider_white m_bottom_25">
                            <h5 class="color_dark tt_uppercase second_font t_align_c m_bottom_15 fw_light">{{ __('tran.newcust') }}</h5>
                            <a href="{{ route('signeup') }}" role="button" class="button_type_2 tt_uppercase fs_medium second_font d_block t_align_c black state_2">{{ __('tran.createaccount') }}</a>
                        </div>
                    </div>
                    @endif


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
                    <livewire:front.searchfront/>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 d_table_cell t_align_c d_xs_block f_none v_align_m m_xs_bottom_15">
                    <!--logo-->
                    <a href="{{ route('front') }}" class="d_inline_b">
                        <img src="{{ asset('assets/front/images/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 d_table_cell d_xs_block f_none v_align_m t_align_r t_xs_align_c">
                    <ul class="hr_list si_list shop_list f_right f_sm_none d_sm_inline_b t_align_l">
                        <li>
                            <livewire:front.countwish/>
                        </li>
                        <!--shopping cart-->
                        <li class="">
                            <button class="color_dark active_lbrown tr_all" data-open-dropdown="#shopping_cart">
                               <livewire:front.countcart/>
                            </button>
                            <livewire:front.cartmenu/>
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
                    <li class="n">
                        <a href="{{ route('front') }}" class="tt_uppercase tr_delay">{{ __('tran.home') }}</a>
                    </li>

                    <li class="n">
                        <a href="{{ route('contact') }}" class="tt_uppercase tr_delay">{{ __('tran.contact') }} </a>
                    </li>
                    <li class="n">
                        <a href="{{ route('category') }}" class="tt_uppercase tr_delay">{{ __('tran.shop') }} </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</header>
