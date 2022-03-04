<aside class="col-lg-3 col-md-3 col-sm-3">
    <!--categories widget-->
    <section class="m_bottom_30 animated hidden" data-animation="fadeInDown">
        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">{{ __('tran.categories') }}</h5>
        <hr class="divider_bg m_bottom_23">
        <ul class="categories_list second_font w_break">
            @foreach ( $category as $item )
            <li class="relative">
                <a href="#" wire:click="productbycategory('{{$item->slug}}')" class="fs_large_0 d_inline_b">{{ $item->name }}</a>
                @isset($item->childrens)
                    <button class="open_sub_categories fs_medium"></button>
                    <ul class="d_none">
                    @foreach ( $item->childrens as $item2 )
                <!--second level-->
                    <li class="relative"><a href="#" wire:click.prevent="productbycategory('{{$item2->slug}}')" class="tr_delay d_inline_b">{{ $item2->name }}</a>
                        @isset($item2->childrens)
                            <button class="open_sub_categories fs_medium"></button>
                            <!--third level-->

                            <ul class="d_none fs_small categories_third_level_list">
                                @foreach ( $item2->childrens as $item3)
                                 <li><a href="#" wire:click="productbycategory('{{$item3->slug}}')" class="tr_delay sc_hover bg_grey_light_2_hover">{{ $item3->name }}</a></li>
                                 @endforeach
                            </ul>
                        @endisset
                    </li>

                 @endforeach
                    </ul>
                @endisset

            </li>
            @endforeach

        </ul>
    </section>
    <!--compare products widget-->
    {{-- <section class="m_bottom_40 m_xs_bottom_30 animated hidden" data-animation="fadeInDown">
        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Compare Products</h5>
        <hr class="divider_bg m_bottom_25">
        <ul>
            <li class="relative m_bottom_15 t_sm_align_c t_xs_align_l">
                <div class="clearfix lh_small">
                    <a href="#" class="f_left m_right_15 d_block d_sm_inline_b f_sm_none m_sm_right_0 m_xs_right_15 f_xs_left d_xs_block m_sm_bottom_10 m_xs_bottom_0"><img src="{{ asset('assets/front/images/compare_img_1.jpg')}}" alt=""></a>
                    <a href="#" class="fs_medium second_font color_dark sc_hover d_block m_bottom_4 d_sm_inline_b d_xs_block p_top_4">Ut tellus dolor<br> dapibus</a>
                </div>
                <hr class="m_top_15 m_bottom_0">
                <span class="close_widget fs_small color_light tr_all color_dark_hover fw_light">x</span>
            </li>
            <li class="relative">
                <div class="clearfix lh_small t_sm_align_c t_xs_align_l">
                    <a href="#" class="f_left m_right_15 d_block d_sm_inline_b f_sm_none m_sm_right_0 m_xs_right_15 f_xs_left d_xs_block m_sm_bottom_10 m_xs_bottom_0"><img src="{{ asset('assets/front/images/compare_img_2.jpg')}}" alt=""></a>
                    <a href="#" class="fs_medium second_font color_dark sc_hover d_block m_bottom_4 d_sm_inline_b d_xs_block p_top_4">Elementum vel</a>
                </div>
                <span class="close_widget fs_small color_light tr_all color_dark_hover fw_light">x</span>
            </li>
        </ul>
        <a href="compare_products.html" class="button_type_2 d_block t_align_c grey state_2 tr_all second_font fs_medium tt_uppercase m_top_15"><i class="fa fa-arrow-right d_inline_m fs_"></i><i class="fa fa-arrow-left d_inline_m m_right_9 fs_"></i>Go To Compare</a>
    </section> --}}
    <!--Bestsellers widget-->
    <section class="m_bottom_40 m_xs_bottom_30 animated hidden" data-animation="fadeInDown">
        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Bestsellers</h5>
        <hr class="divider_bg m_bottom_25">
        <ul>
            <li class="relative m_bottom_15 t_sm_align_c t_xs_align_l">
                <div class="clearfix lh_small">
                    <a href="#" class="f_left m_right_15 d_block d_sm_inline_b f_sm_none m_sm_right_0 m_xs_right_15 f_xs_left d_xs_block m_sm_bottom_10 m_xs_bottom_0"><img src="{{ asset('assets/front/images/compare_img_1.jpg')}}" alt=""></a>
                    <a href="#" class="fs_medium second_font color_dark sc_hover d_block m_bottom_4 d_sm_inline_b d_xs_block p_top_4">Ut tellus dolor dapibus</a>
                    <ul class="rating_list hr_list wrapper m_bottom_10 d_sm_inline_b d_xs_block">
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                    </ul>
                    <b class="second_font scheme_color fs_medium d_sm_block d_xs_inline_b">$430.00</b>
                </div>
                <hr class="m_top_15 m_bottom_0">
            </li>
            <li class="relative m_bottom_15 t_sm_align_c t_xs_align_l">
                <div class="clearfix lh_small">
                    <a href="#" class="f_left m_right_15 d_block d_sm_inline_b f_sm_none m_sm_right_0 m_xs_right_15 f_xs_left d_xs_block m_sm_bottom_10 m_xs_bottom_0"><img src="{{ asset('assets/front/images/compare_img_2.jpg')}}" alt=""></a>
                    <a href="#" class="fs_medium second_font color_dark sc_hover d_block m_bottom_4 d_sm_inline_b d_xs_block p_top_4">Elementum vel</a>
                    <ul class="rating_list hr_list wrapper m_bottom_10 d_sm_inline_b d_xs_block">
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                    </ul>
                    <b class="second_font scheme_color fs_medium d_sm_block d_xs_inline_b">$1 050.00</b>
                </div>
                <hr class="m_top_15 m_bottom_0">
            </li>
            <li class="relative t_sm_align_c t_xs_align_l">
                <div class="clearfix lh_small">
                    <a href="#" class="f_left m_right_15 d_block d_sm_inline_b f_sm_none m_sm_right_0 m_xs_right_15 f_xs_left d_xs_block m_sm_bottom_10 m_xs_bottom_0"><img src="{{ asset('assets/front/images/bestsellers_img_1.jpg')}}" alt=""></a>
                    <a href="#" class="fs_medium second_font color_dark sc_hover d_block m_bottom_4 d_sm_inline_b d_xs_block p_top_4">Pellentesque sed dolor</a>
                    <ul class="rating_list hr_list wrapper m_bottom_10 d_sm_inline_b d_xs_block">
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                    </ul>
                    <b class="second_font scheme_color fs_medium d_sm_block d_xs_inline_b">$990.00</b>
                </div>
            </li>
        </ul>
    </section>
</aside>
