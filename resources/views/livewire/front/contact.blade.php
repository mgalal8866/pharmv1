<div>
   			<!--breadcrumbs-->
               <div class="breadcrumbs bg_grey_light_2 fs_medium fw_light">
				<div class="container">
					<a href="{{ route('front') }}" class="sc_hover">{{ __('home') }}</a> / <span class="color_light">{{ __('tran.contact') }}</span>
				</div>
			</div>
			<!--main content-->
			<div class="page_section_offset">
				<div class="container">
					<div class="row">
                            <livewire:front.categoyside/>
						<div class="col-lg-9 col-md-9 col-sm-9 m_bottom_30 m_xs_bottom_10">
							{{-- <h2 class="fw_light second_font color_dark tt_uppercase m_bottom_27">Our Location</h2>
							<div class="iframe_map_container m_bottom_38 m_xs_bottom_30">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24192.47098176581!2d-73.9988568586148!3d40.71672046030417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2z0JzQsNC90YXRjdGC0YLQtdC9LCDQndGM0Y4t0JnQvtGA0Lo!5e0!3m2!1sru!2s!4v1406833502695" style="border:0"></iframe>
							</div> --}}
							<div class="row">
								<main class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
									<h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">{{ __('tran.contactus') }}</h5>
									<hr class="divider_bg m_bottom_25">
									<p class="second_font m_bottom_15">{{ $company->address }}</p>
									<ul class="second_font vr_list_type_2 m_bottom_33 m_xs_bottom_30">
										<li><i class="fa fa-phone color_dark fs_large"></i>{{ $company->phone }}</li>
										<li class="w_break" data-icon=""><i class="fa fa-envelope color_dark"></i><a href="mailto:#" class="sc_hover d_inline_b">{{ $company->email }}</a></li>
									</ul>
									{{-- <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Opening Hours</h5>
									<hr class="divider_bg m_bottom_25">
									<ul class="second_font">
										<li>Monday - Friday: 08.00-20.00</li>
										<li>Saturday: 09.00-15.00</li>
										<li>Sunday and holidays: closed</li>
									</ul> --}}
								</main>
								<section class="col-lg-8 col-md-8 col-sm-8">
									<h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">{{ __('tran.contactform') }}</h5>
									<hr class="divider_bg m_bottom_25">
									<p class="second_font m_bottom_14">Send an email. All fields with an <span class="color_red">*</span> are required.</p>
									<form id="contactform" class="b_default_layout" wire:submit.prevent="send">
										<ul>
											<li class="row">
												<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
													<label class="second_font required d_inline_b m_bottom_5 clickable" for="cf_name">{{ __('tran.firstname') }}</label><br>
													<input wire:model="name" type="text" name="cf_name" id="cf_name" class="tr_all w_full fw_light">
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
													<label class="second_font required d_inline_b m_bottom_5 clickable" for="cf_email">{{ __('tran.email') }}</label><br>
													<input wire:model="email"  type="email" name="cf_email" id="cf_email" class="tr_all w_full fw_light">
												</div>
											</li>
											<li class="m_bottom_15">
												<label class="second_font d_inline_b m_bottom_5 clickable" for="cf_telephone">{{ __('tran.phone') }}</label><br>
												<input wire:model="phone" type="text" name="cf_telephone" id="cf_telephone" class="tr_all w_full fw_light">
											</li>
											<li class="m_bottom_5">
												<label class="second_font d_inline_b m_bottom_5 clickable" for="cf_message">{{ __('tran.message') }}</label><br>
												<textarea wire:model="message"  id="cf_message" name="cf_message" rows="6" class="tr_all w_full fw_light"></textarea>
											</li>
											<li>
												<button class="button_type_2 black state_2 tr_all second_font fs_medium tt_uppercase d_inline_b"><span class="m_left_10 m_right_10 d_inline_b">{{ __('tran.submit') }}</span></button>
											</li>
										</ul>
									</form>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
