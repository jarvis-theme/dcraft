<br>
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
								<!--	<img src="assets/img/support1.png"> -->
									<h3>{{short_description($testimonial->nama,10)}}</h3>
									<p>{{$testimonial->isi}}</p>
								</div>
								</div>
							</div>
                         @endforeach
					</div><!-- end row -->
					<a href="{{url('testimoni')}}" class="link-more-testimonial">View More</a>
				</div><!-- end header support -->

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
								<h3>Information</h3>
								<ul>
									@foreach($quickLink as $link_menu)
                                      @if($menu->id == $link_menu->tautanId)
									<li>
										@if($link_menu->halaman == '1')
                                            @if($link_menu->linkTo == 'halaman/about-us')
                                            <a href="{{url(strtolower($link_menu->linkTo))}}">{{$link_menu->nama}}</a>
                                            @else
                                            <a href='{{url("halaman/".strtolower($link_menu->linkTo))}}'>{{$link_menu->nama}}</a>
                                            @endif
                                        @elseif($link_menu->halaman == '2')
                                            <a href='{{url("blog/".strtolower($link_menu->linkTo))}}'>{{$link_menu->nama}}</a>

                                        @elseif($link_menu->url == '1')
                                            <a href="{{url(strtolower($link_menu->linkTo))}}">{{$link_menu->nama}}</a>
                                        @else
                                            <a href="{{url(strtolower($link_menu->linkTo))}}">{{$link_menu->nama}}</a>
                                        @endif
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
									@if($kontak->fb)
									<a href="{{url($kontak->fb)}}">
										<span class="icon-sm"><i class="fa fa-facebook icn"></i></span>
									</a>
									@endif
									@if($kontak->tw)
									<a href="{{url($kontak->tw)}}">
										<span class="icon-sm"><i class="fa fa-twitter icn"></i></span>
									</a>
									@endif
									@if($kontak->gp)
									<a href="{{url($kontak->gp)}}">
										<span class="icon-sm"><i class="fa fa-google-plus icn"></i></span>
									</a>
									@endif
									@if($kontak->pt)
									<a href="{{$kontak->pt}}">
										<span class=" icon-sm"><i class="fa fa-pinterest icn"></i></span>
									</a>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- end footer support -->
		</div><!-- end row -->
	</div><!-- end container -->
	<div class="section-author">
		<p>&copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a style="text-decoration: none;" target="_blank" href="http://jarvis-store.com">Jarvis Store</a></p>
	</div>
</div><!-- end footer -->