<div class="container">
	<div class="row mp no-rutter">
		<div class="advertising">
			@foreach(horizontal_banner() as $banners)
			<div class="col-sm-12">
				<a href="{{url($banners->url)}}">
                	{{HTML::image(banner_image_url($banners->gambar), 'banner', array('width'=>'1168', 'height'=>'200', "class"=>"img-responsive"))}}
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="footer">
	<div class="top-texture"></div>
	<div class="container">
		<div class="row mp no-rutter">
			<div class="footer-support">
				<div class="header-support">
					<h1>Testimonial</h1>
					<div class="row">
						@foreach(random_testimonial(4) as $testimonial)
                        <div class="col-sm-3">
							<div class="content-support">
								<div class="description">
									<p style="margin: 10px 0px -10px -5px; color: #3f3731"><i class="fa fa-user"></i> <strong>{{short_description($testimonial->nama,25)}}</strong></p>
									<blockquote>{{short_description($testimonial->isi,110)}}</blockquote>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
					<div class="col-xs-12 col-sm-12">
						<a href="{{url('testimoni')}}" class="link-more-testimonial">View More</a>
					</div>
				</div>

				<div class="content-support">
					<div class="row">
						<div class="col-sm-5">
							<div class="content-footer-child">
								<h3>About our shop</h3>
								<p>{{short_description($aboutUs[1]->isi,400)}}</p>
							</div>
						</div>
						@foreach($tautan as $key=>$menu)
                            @if($key == '2')
							<div class="col-sm-3">
								<div class="content-footer-child">
									<h3>{{$menu->nama}}</h3>
									<ul>
										@foreach($quickLink as $link_menu)
                                    	@if($menu->id == $link_menu->tautanId)
										<li>
                                            <a href="{{menu_url($link_menu)}}">{{$link_menu->nama}}</a>
										</li>
										@endif
	                                    @endforeach
									</ul>
								</div>
							</div>
							@endif
                        @endforeach
						
						<div class="col-sm-4">
							<div class="content-footer-child">
								<h3>Workshop Address</h3>
								<p>{{@$kontak->alamat}}</p>
								<p>Phone : {{$kontak->telepon}}</p>
								<div class="social-media">
									@if(!empty($kontak->fb))
									<a href="{{url($kontak->fb)}}" target="_blank">
										<span class="icon-sm"><i class="fa fa-facebook icn"></i></span>
									</a>
									@endif
									@if(!empty($kontak->tw))
									<a href="{{url($kontak->tw)}}" target="_blank">
										<span class="icon-sm"><i class="fa fa-twitter icn"></i></span>
									</a>
									@endif
									@if(!empty($kontak->gp))
									<a href="{{url($kontak->gp)}}" target="_blank">
										<span class="icon-sm"><i class="fa fa-google-plus icn"></i></span>
									</a>
									@endif
									@if(!empty($kontak->pt))
									<a href="{{$kontak->pt}}" target="_blank">
										<span class="icon-sm"><i class="fa fa-pinterest icn"></i></span>
									</a>
									@endif
									@if(!empty($kontak->ig))
                                    <a href="{{url($kontak->ig)}}" target="_blank">
                                    	<span class="icon-sm"><i class="fa fa-instagram icn"></i></span>
                                	</a>
                                    @endif
                                    @if(!empty($kontak->tl))
                                    <a href="{{url($kontak->tl)}}" target="_blank">
                                        <span class="icon-sm"><i class="fa fa-tumblr icn"></i></span>
                                    </a>
                                    @endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-author">
			<p>&copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a style="text-decoration: none;" target="_blank" href="http://jarvis-store.com">Jarvis Store</a></p>
		</div>
	</div>
</div>