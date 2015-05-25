<div class="row no-rutter">
				<div class="col-sm-12">
					<div id="slides">
						<div class="bxslider">
						  @foreach (slideshow() as $val)
						  <li>
						  	{{HTML::image(slide_image_url($val->gambar), 'slide banner')}}
						  	<!--<div class="caption">
						  		<h1><a href="#">Rattan Craft Home Decor</a></h1>
						  		<p>Aenean rutrum ipsum et mauris cursus eget bibendum purus condi mentum. Mauris sapien nunc, aliquet vitae dapibus nec, ultricies vel est. Vivamus eros tortor, interdum sit amet cursus tempus, egestas ullamcorper magna.</p>
						  		<a href="#" class="btn-readmore">Read More</a>
						  	</div> -->
						  </li>
						  @endforeach
						</div>

						<div class="outside">
							<div class="square-link prev-link">
								<a href="#" id="slider-prev"></a>
							</div>
						  	<div class="square-link next-link">
						  		<a href="#" id="slider-next"></a>
						  	</div>
						</div>
					</div>
				</div>
			</div>