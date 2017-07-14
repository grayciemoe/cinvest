<section class="section_offset image_bg_2" >
			<div class="container t_align_c">
			<h3 class="color_light t_align_c m_bottom_15 fw_light" data-appear-animation="bounceInLeft">Featured Industries</h3>
			</div>
				<div class="container clearfix">
					<div class="row">
						<!--item portfolio-->
						@foreach ($industries as $industry)
						<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30 m_bottom_50">
							<figure>
								<!--image-->
								<div class="popup_wrap relative r_corners wrapper m_bottom_20 db_xs_centered">
									<img src="/images/1499780418.png" alt="">
									<div class="popup_buttons tr_all_long">
										<a href="images/1499780418.png" data-group="portfolio" data-title="Title 1" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left m_right_10">
											<i class="icon-plus"></i>
										</a>
										<a href="#" class="icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>
								<!--description-->
								<figcaption>
									<h4 class="fw_light fs_middle"><a href="/industry/{{$industry->id}}" class="color_dark tr_all">{{$industry->name}}</a></h4>
									<!--project's info-->
								</figcaption>
							</figure>
						</div>
						@endforeach
					</div>
				</div>
			</section>