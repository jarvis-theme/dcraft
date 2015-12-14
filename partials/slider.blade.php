<div class="row no-rutter">
	<div class="col-sm-12">
		<div id="slides">
			<div class="bxslider">
				@foreach (slideshow() as $val)
				<li>
					@if($val->text == '')
			  		<a href="#">
			  		@else
			  		<a href="{{filter_link_url($val->text)}}" target="_blank">
			  		@endif
						{{HTML::image(slide_image_url($val->gambar), 'slide banner')}}
					</a>
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