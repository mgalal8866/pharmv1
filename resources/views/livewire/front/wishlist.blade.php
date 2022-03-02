<div>
  	<!--breadcrumbs-->
      <div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
        <div class="container">
            <a href="{{ route('front') }}" class="sc_hover">{{ __('tran.home') }}</a> / <span class="color_light">{{ __('tran.wishlist') }}</span>
        </div>
    </div>
    <!--main content-->
    <div class="page_section_offset">
        <div class="container">
            <div class="row">
                <main class="col-lg-12 col-md-12 col-sm-12 m_bottom_30 m_xs_bottom_10">
                    <h2 class="fw_light second_font color_dark tt_uppercase m_bottom_27">Wishlist</h2>
                    <hr class="m_bottom_30 divider_light">
                    <table class="w_full wishlist_table m_bottom_30">
                        <thead class="bg_grey_light_2 d_xs_none second_font">
                            <tr>
                                <th><b>{{ __('tran.productimage') }}</b></th>
                                <th><b>{{ __('tran.productnameandcategory') }}</b></th>
                                <th><b>{{ __('tran.price') }}</b></th>
                                <th><b>{{ __('tran.quantity') }}</b></th>
                                <th><b>{{ __('tran.action') }}</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (Cart::instance('wishlist')->count() > 0)
                            @foreach (Cart::instance('wishlist')->content() as  $item)
                            <tr>
                                <td data-cell-title="Product Image"><img src="{{ $item->model->warehouse_product()->first()->image}}" alt="" width="100" height="100"></td>
                                <td data-cell-title="Product Name and Category">
                                    <div class="lh_small m_bottom_7">
                                        <a href="#" class="sc_hover second_font d_inline_b m_bottom_5 fs_large">{{  $item->name }}</a><br>
                                        <a href="#" class="fw_light color_light sc_hover">{{ $item->model->warehouse_product()->first()->category->name}}</a>
                                    </div>
                                </td>
                                <td data-cell-title="Price" class="second_font fs_large">
                                    @if ($item->model->warehouse_product()->first()->special_price)
                                    <s class="color_light">{{  $item->model->warehouse_product()->first()->price_sale }}</s><br>
                                    @endif

                                    <b class="scheme_color">{{($item->model->warehouse_product()->first()->special_price)?? $item->model->warehouse_product()->first()->price_sale}}</b>
                                </td>
                                <td data-cell-title="Quantity">
                                    <div class="quantity clearfix t_align_c">
                                        <button wire:click.prevent="decreaseQty('{{$item->rowId}}')" class="f_left d_block minus black_hover tr_all">&#45;</button>
                                        <input type="text" class="f_left color_light" readonly name=""  value="{{$item->qty}}">
                                        <button wire:click.prevent="increaseQty('{{$item->rowId}}')" class="f_left d_block black_hover tr_all">&#43;</button>
                                    </div>
                                </td>
                                <td data-cell-title="Action">
                                    <button wire:click.prevent="addtocart('{{$item->rowId}}')" data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp" class="button_type_2 compare_button m_bottom_5 lbrown state_2 tr_all d_block second_font fs_medium tt_uppercase"><i class="fa fa-shopping-cart d_inline_m m_right_9"></i>Add To Cart</button>
                                    <button wire:click.prevent="destroy('{{$item->rowId}}')" class="button_type_2 compare_button m_bottom_9 grey state_2 tr_all d_block second_font fs_medium tt_uppercase w_md_full w_xs_auto"><i class="fa fa-times d_inline_m m_right_9 m_xs_right_5 m_md_right_0"></i><br class="d_none d_md_block d_xs_none">Remove</button>
                                </td>
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
                        </tbody>
                    </table>

                </main>
            </div>
        </div>
    </div>
</div>
