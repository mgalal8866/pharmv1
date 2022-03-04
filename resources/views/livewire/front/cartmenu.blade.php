<div>
    <div id="shopping_cart" data-show="fadeInUp" data-hide="fadeOutDown" class=" bg_grey_light dropdown animated">
        <div class="sc_header fs_small fw_light">{{ __('tran.recentadd') }})</div>
        <hr class="divider_white">
        <ul class="shopping_cart_list m_bottom_4">
            @if (Cart::instance('cart')->count() > 0)
                @foreach (Cart::instance('cart')->content() as  $item)
                <li class="relative">
                    <div class="clearfix lh_small">
                        <a href="#" class="f_left m_right_10 d_block"><img src="{{ $item->model->warehouse_product()->first()->image}}" alt="" width="60" height="60"></a>
                        <a href="#" class="fs_medium second_font color_dark sc_hover d_block m_bottom_4">{{  $item->name }}</a>
                        <p class="fs_medium">{{  $item->qty }} x <b class="color_dark">{{($item->model->warehouse_product()->first()->special_price)?? $item->model->warehouse_product()->first()->price_sale}}</b></p>
                    </div>
                    <hr class="divider_white m_top_15 m_bottom_0">
                    <span wire:click.prevent="destroy('{{$item->rowId}}')" class="close fs_small color_light tr_all color_dark_hover fw_light">x</span>
                </li>
                @endforeach
            @endif
        </ul>
        <ul class="fs_medium second_font color_dark m_bottom_15">
            {{-- <li><span class="d_inline_b total_title">Tax:</span><span class="fw_light">$0.00</span></li>
            <li><span class="d_inline_b total_title">Discount:</span><span class="fw_light">$37.00</span></li> --}}
            <li><b><span class="d_inline_b total_title">{{ __('tran.total') }}</span>{{  Cart::instance('cart')->total()}}</b></li>
        </ul>
        <a href="{{ route('shopping.cart') }}" role="button" class="button_type_2 tt_uppercase fs_medium second_font d_block t_align_c black state_2 m_bottom_5">{{ __('tran.viewcart') }}</a>
        <a href="{{ route('checkout') }}" role="button" class="t_align_c tt_uppercase w_full second_font d_block fs_medium button_type_2 lbrown tr_all">{{ __('tran.checkout') }}</a>
    </div>
</div>
