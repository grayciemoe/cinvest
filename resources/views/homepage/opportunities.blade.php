<section class="section_offset relative">
				<div class="container">
					<h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft">Featured Opportunities</h3>
					<div class="row" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
						<!--projects carousel-->
						<div class="owl-carousel" data-nav="fp_nav_" data-plugin-options='{"itemsCustom" : [[992,3],[768,2],[100,1]], "singleItem" : false}'>
							<!--project-->
							@foreach($opportunities as $opp)
							<figure class="t_xs_align_c col-lg-12">
								<!--image container-->
								<div class="popup_wrap relative r_corners wrapper m_bottom_20 d_xs_inline_b d_mxs_block">
									<img src="/uploads/splash/{{$opp->splash}}" alt="">
								</div>
								<figcaption class="t_xs_align_l">
									<!--project's title-->
									<h4 class="fw_light fs_middle"><a href="/opportunity/{{$opp->id}}" class="color_dark">{{$opp->name}}</a></h4>
									<!--project's info-->
									<ul class="dotted_list m_bottom_5 color_grey_light_2">
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i>{{$opp->location}}</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_grey_light_2 fs_small">
												<i>{{$opp->industry->name}}</i>
											</a>
										</li>
										<li class="m_right_15 relative d_inline_m">
											<a href="#" class="color_red_hover">
												<i class="icon-heart-empty-1 m_right_2 color_grey_light_2 tr_all"></i><i class="fs_medium color_grey tr_all">35</i>
											</a>
										</li>
									</ul>
									<p class="m_bottom_10 fw_light">{{$opp->pitch_summary}}</p>
									<div class="row">
									 	<div class="col-sm-6 col-md-6">
                							<p> {{$opp->total_investment}}</p>
                							<span>Total Investement</span>
              							</div>
              							<div class="col-sm-6 col-md-6">
                							<p> {{$opp->min_investment}}</p>
                							<span>Min. Investment</span>
             							 </div>
            						</div>
									<div class="clearfix">
										<a href="#" class="color_purple color_pink_hover f_left d_block m_right_20">
											<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
												<i class="icon-angle-right"></i>
											</span>
											Read More
										</a>
										<a href="#" class="color_purple color_pink_hover f_left d_block">
											<span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
												<i class="icon-link"></i>
											</span>
											View Project
										</a>
									</div>
								</figcaption>
							</figure>
							@endforeach
						</div>
					</div>
				</div>
				<!--carousel nav-->
				<button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_prev d_md_none">
					<i class="icon-left-open-big"></i>
				</button>
				<button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_next d_md_none">
					<i class="icon-right-open-big"></i>
				</button>
			</section>
			