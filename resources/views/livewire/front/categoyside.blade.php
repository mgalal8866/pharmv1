<div>
    <aside class="col-lg-3 col-md-3 col-sm-3 p_top_4">
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
        {{-- <figure class="relative wrapper scale_image_container m_bottom_40 r_image_container m_xs_bottom_30">
            <img src="images/banner_img_1.jpg" alt="" class="tr_all scale_image">
            <!--caption-->
            <figcaption class="caption_type_1 tr_all">
                <div class="d_inline_b color_white fw_light caption_title tt_uppercase bg_lbrown_translucent">
                    Special Offer
                </div>
                <div class="caption_inner">
                    <h3 class="color_white second_font fw_light m_bottom_5 w_break">Your Bedroom Lives Here. <a href="#" class="color_lbrown color_white_hover second_font fw_light fs_ex_small">Buy Now!</a></h3>
                </div>
            </figcaption>
        </figure> --}}
        <!--subscribe widget-->
        {{-- <section class="m_bottom_40 m_xs_bottom_30">
            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Newsletter Sign Up</h5>
            <hr class="divider_bg m_bottom_25">
            <p class="second_font m_bottom_15">Get exclusive deals you will not find anywhere else straight to your inbox!</p>
            <form class="newsletter">
                <input type="email" placeholder="Enter your email address" name="newsletter-email" class="tr_all fw_light w_full fs_medium m_bottom_10">
                <button class="second_font w_full tt_uppercase fs_medium button_type_2 black state_2 d_block tr_all">Subscribe</button>
            </form>
        </section> --}}
    </aside>
</div>
