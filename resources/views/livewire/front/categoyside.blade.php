  <div >
    <aside class="col-lg-3 col-md-3 col-sm-3 p_top_4">

        <!--categories widget-->
        <section class="m_bottom_30 animated " data-animation="fadeInDown">
            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">{{ __('tran.categories') }}</h5>
            <hr class="divider_bg m_bottom_23">
            <ul class="categories_list second_font w_break">
                @foreach ( $category as $item )
                <li class="relative">
                    {{-- wire:click="productbycategory('{{$item->slug}}')" --}}
                    <a  wire:click="qt('{{$item->slug}}')"  class="fs_large_0 d_inline_b">{{ $item->name }}</a>
                    @isset($item->childrens)
                        <button class="open_sub_categories fs_medium"></button>
                        <ul class="d_none">
                        @foreach ( $item->childrens as $item2 )
                    <!--second level-->
                    {{-- {{ route('category',$item2->slug) }} --}}
                        <li class="relative"><a wire:click="qt('{{$item2->slug}}')" class="tr_delay d_inline_b">{{ $item2->name }}</a>
                            @isset($item2->childrens)
                                <button class="open_sub_categories fs_medium"></button>
                                <!--third level-->

                                <ul class="d_none fs_small categories_third_level_list">
                                    @foreach ( $item2->childrens as $item3)
                                     <li><a href="#"  wire:click="qt('{{$item3->slug}}')" class="tr_delay sc_hover bg_grey_light_2_hover">{{ $item3->name }}</a></li>
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
        <section class="m_bottom_38 m_xs_bottom_30">
            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Filter</h5>
            <hr class="divider_bg m_bottom_23">
            <form>
                {{-- <div class="relative">
                    <fieldset>
                        <legend class="second_font m_bottom_10 w_full"><b>Manufacturers</b></legend>
                        <ul>
                            <li class="m_bottom_9">
                                <input type="checkbox" name="" id="checkbox_1">
                                <label for="checkbox_1" class="fw_light fs_">Chanel</label>
                            </li>
                            <li class="m_bottom_9">
                                <input type="checkbox" name="" id="checkbox_2" checked>
                                <label for="checkbox_2" class="fw_light fs_">Calvin Klein</label>
                            </li>
                            <li class="m_bottom_15">
                                <input type="checkbox" name="" id="checkbox_3">
                                <label for="checkbox_3" class="fw_light fs_">Prada</label>
                            </li>
                        </ul>
                        <span class="close fieldset_c  fs_small color_light tr_all color_dark_hover fw_light">x</span>
                        <hr class="divider_light m_bottom_10">
                    </fieldset>
                </div> --}}
                <div class="relative">
                    <fieldset>
                        <legend class="second_font m_bottom_15 w_full"><b>{{ __('tran.price') }}</b></legend>
                        <div wire:ignore class="range_slider relative bg_grey_light_2 m_bottom_10"></div>
                        <div class="clearfix m_bottom_10">
                            <input type="text" class="f_left range_min half_column fw_light" readonly>
                            <input type="text" class="f_right range_max half_column t_align_r fw_light" readonly>
                        </div>
                        {{-- <span class="close fieldset_c  fs_small color_light tr_all color_dark_hover fw_light">x</span> --}}
                        <hr class="divider_light m_bottom_10">
                    </fieldset>
                </div>
                {{-- <div class="relative">
                    <fieldset>
                        <legend class="second_font m_bottom_10 w_full"><b>Size</b></legend>
                        <ul>
                            <li class="m_bottom_9">
                                <input type="radio" id="radio_1" name="size"><label for="radio_1" class="d_inline_b fw_light p_top_0 p_bottom_0">S</label>
                            </li>
                            <li class="m_bottom_9">
                                <input type="radio" id="radio_2" name="size" checked><label for="radio_2" class="d_inline_b fw_light p_top_0 p_bottom_0">M</label>
                            </li>
                            <li class="m_bottom_15">
                                <input type="radio" id="radio_3" name="size"><label for="radio_3" class="d_inline_b fw_light p_top_0 p_bottom_0">L</label>
                            </li>
                        </ul>
                        <span class="close fieldset_c  fs_small color_light tr_all color_dark_hover fw_light">x</span>
                        <hr class="divider_light m_bottom_10">
                    </fieldset>
                </div> --}}
                {{-- <div class="relative">
                    <fieldset>
                        <legend class="second_font m_bottom_10 w_full"><b>Color</b></legend>
                        <ul class="hr_list m_bottom_12">
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_red tr_all"></button></li>
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_blue tr_all"></button></li>
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_green tr_all"></button></li>
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_grey tr_all"></button></li>
                            <li class="m_right_5 m_bottom_3"><button class="color_button bg_light_yellow tr_all"></button></li>
                        </ul>
                        <span class="close fieldset_c  fs_small color_light tr_all color_dark_hover fw_light">x</span>
                        <hr class="divider_light m_bottom_10">
                    </fieldset>
                </div> --}}
                {{-- <div class="relative m_bottom_15">
                    <fieldset>
                        <legend class="second_font m_bottom_10 w_full"><b>Weight</b></legend>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_10">
                                <input type="text" class="w_full fs_medium tr_all filter_input">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" class="w_full fs_medium tr_all filter_input">
                            </div>
                        </div>
                        <span class="close fieldset_c  fs_small color_light tr_all color_dark_hover fw_light">x</span>
                    </fieldset>
                </div>
                {{-- <button type="reset" class="button_type_2 d_block w_full t_align_c grey state_2 tr_all second_font fs_medium tt_uppercase filter_reset"><i class="fa fa-refresh d_inline_m m_right_9 fs_"></i>Reset</button> --}}
            </form>
        </section>

    </aside>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            var slid = $(".range_slider");
            slid.slider({
            range: true,
                    min: 1,
                    max: 1000,
                    values: [1, 1000],
                    slide: function(event, ui) {
                        $(this).next().children('.range_min').val("$" + ui.values[0])
                            .next().val("$" + ui.values[1]);

                            @this.set('min_price', ui.values[0]);
                           @this.set('max_price', ui.values[1]);
                    },
                    create: function(event, ui) {
                        var $this = $(this);


                        $this.next().children('.range_min').val("$" + $this.slider("values", 0))
                            .next().val("$" + $this.slider("values", 1));
                        $this.attr({
                            'data-first-value': $this.slider("values", 0),
                            'data-second-value': $this.slider("values", 1),

                        });

                    }
                  });
                //   slid.slider.on('update',function(value){


                //   })
    });


        //  var slid = document.getElementsByClassName('range_slider');


        // slid.slider({
        //             range: true,
        //             min: 0,
        //             max: 5400,
        //             values: [0, 5250],
        //             slide: function(event, ui) {
        //                 $(this).next().children('.range_min').val("$" + ui.values[0])
        //                     .next().val("$" + ui.values[1]);
        //             },
        //             create: function(event, ui) {
        //                 var $this = $(this);
        //                 $this.next().children('.range_min').val("$" + $this.slider("values", 0))
        //                     .next().val("$" + $this.slider("values", 1));
        //                 $this.attr({
        //                     'data-first-value': $this.slider("values", 0),
        //                     'data-second-value': $this.slider("values", 1)
        //                 });
        //             }
        //         });


            //  });
             </script>
@endpush
