<div>

    			<!--breadcrumbs-->
			<div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
				<div class="container">
					<a href="{{ route('front') }}" class="sc_hover">{{ __('tran.home') }}</a> / <span class="color_light">{{ __('tran.orderlist') }}</span>
				</div>
			</div>
			<!--main content-->
			<div class="page_section_offset">
				<div class="container">
					<div class="row">

						<section class="col-lg-9 col-md-9 col-sm-9">
							<h2 class="fw_light second_font color_dark m_bottom_27 tt_uppercase">{{ __('tran.orderlist') }}</h2>
							<table class="w_full second_font orders_list_table">
								<thead class="bg_grey_light_2 d_xs_none">
									<tr>
										<th><b>{{ __('tran.ordernumber') }}</b></th>
										<th><b>{{ __('tran.orderdate') }}</b></th>
										<th><b>{{ __('tran.orderstatus') }}</b></th>
										<th><b>{{ __('tran.total') }}</b></th>
									</tr>
								</thead>
								<tbody>
                                    @if ($order->count()>0)
                                    @foreach ($order as  $item)
									<tr>
										<td data-cell-title="Order Number"><a href="#" class="sc_hover">{{ $item->numberorder }}</a></td>
										<td data-cell-title="Order Date">{{ $item->date }}</td>
									     <td data-cell-title="Order Status">Sended</td>  	{{--Confirmed by shopper --}}
										<td data-cell-title="Total"><b class="scheme_color">{{ $item->total }}</b></td>
									</tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="4">
                                         <CENTER>
                                            <b>No Orders Here</b>
                                        </CENTER>
                                        </td>
                                    </tr>
                                    @endif
								</tbody>
							</table>
						</section>
					</div>
				</div>
			</div>
</div>
