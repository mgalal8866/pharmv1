<div>
    <div class="container numbered_title_init">
        <section class="m_bottom_35 m_xs_bottom_30">
            <div class="d_table w_full m_bottom_5 second_font">
                <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-10">
                    <h5 class="color_dark tt_uppercase fw_light numbered_title d_inline_m ellipsis_mxs w_full">{{ __('tran.signup') }}</h5>
                </div>
                {{-- <div class="d_table_cell col-lg-6 col-md-6 col-sm-6 col-xs-2 t_align_r">
                    <button class="button_type_4 grey state_2 tr_all vc_child d_inline_b black_hover"><i class="fa fa-pencil d_inline_m m_top_0"></i></button>
                </div> --}}
            </div>
            <hr class="divider_bg m_bottom_23">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <form class="b_default_layout" wire:submit.prevent="register" >
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30 m_bottom_15">
                        <ul>
                            <li class="m_bottom_15">
                                <label for="bi_name" class="required clickable d_inline_b m_bottom_5 second_font">{{ __('tran.name') }}</label><br>
                                <input wire:model="name" type="text" id="bi_name" class="tr_all w_full fs_medium color_light">
                                @error('name')
                                <span class="invalid-feedback" style="color: red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </li>
                            <li class="m_bottom_15">
                                <label for="bi_telephone" class="clickable required d_inline_b m_bottom_5 second_font">{{ __('tran.phone') }}</label><br>
                                <input wire:model="phone"   type="number" id="bi_telephone" class="tr_all w_full fs_medium color_light">
                                @error('phone')
                                <span class="invalid-feedback" style="color: red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15 m_xs_bottom_15">
                        <ul>
                            <li class="m_bottom_15">
                            <label for="bi_company" class="clickable d_inline_b m_bottom_5 second_font">{{ __('tran.pharm') }}</label><br>
                            <input  wire:model="pharm"  type="text" id="bi_company" class="tr_all w_full fs_medium color_light">
                            @error('pharm')
                            <span class="invalid-feedback" style="color: red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </li>

                        <li class="m_bottom_15">
                                <label for="bi_email" class="clickable required d_inline_b m_bottom_5 second_font">{{ __('tran.email') }}</label><br>
                                <input  wire:model="email"  type="email" id="bi_email" class="tr_all w_full fs_medium color_light">
                                @error('email')
                                <span class="invalid-feedback" style="color: red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </li>
                        </ul>
                    </div>
                </div>
                <ul>
                    <li class="m_bottom_10">
                        <label for="bi_address" class="required clickable d_inline_b m_bottom_5 second_font">{{ __('tran.address') }}</label><br>
                        <input wire:model="address"  type="text" id="bi_address" class="tr_all w_full fs_medium color_light">
                        @error('address')
                        <span class="invalid-feedback" style="color: red;" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </li>
                    {{-- <li class="m_bottom_15">
                        <input type="text" class="tr_all w_full fs_medium color_light">
                    </li> --}}
                </ul>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_15 m_bottom_12">
                        <ul>

                            <li>
                                <label for="bi_password" class="clickable required d_inline_b m_bottom_5 second_font">{{ __('tran.password') }}</label><br>
                                <input  wire:model="password"  type="password" id="bi_password" class="tr_all w_full fs_medium color_light">
                                @error('password')
                                <span class="invalid-feedback" style="color: red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_12 m_xs_bottom_15">
                        <ul>


                            <li>
                                <label for="bi_password2" class="clickable required d_inline_b m_bottom_5 second_font">{{ __('tran.confirmepassword') }}</label><br>
                                <input  wire:model="password2"  type="password" id="bi_password2" class="tr_all w_full fs_medium color_light">
                                @error('password2')
                                <span class="invalid-feedback" style="color: red;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </li>
                        </ul>

                    </div>

                </div>
                <ul>
                    <li class="m_bottom_10">
                        <label for="bi_address" class="required clickable d_inline_b m_bottom_5 second_font">{{ __('tran.license') }}</label><br>
                        <input wire:model="license"  type="file" id="bi_address" class="tr_all w_full fs_medium color_light">
                        @error('license')
                        <span class="invalid-feedback" style="color: red;" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </li>
                    {{-- <li class="m_bottom_15">
                        <input type="text" class="tr_all w_full fs_medium color_light">
                    </li> --}}
                </ul>
                <div class="t_align_r second_font">
                    <div class="m_bottom_8 fs_medium small"><span class="required"></span> {{ __('tran.requiredfields') }}</div>
                    <button type="submit" class="button_type_2 tt_uppercase fs_medium second_font t_align_c black state_2 m_bottom_5 tr_all"><span class="d_inline_b m_left_10 m_right_10">{{ __('tran.regist') }}</span></button>
                </div>
            </form>
        </section>
    </div>
</div>

