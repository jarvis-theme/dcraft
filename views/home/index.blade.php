<div class="container">
	<div class="row no-rutter">
		<div id="product-category">
			
		</div>
	</div><!-- end row -->
</div><!-- end container -->

<div class="container">
	<div class="row mp no-rutter">
		<div class="product-full wow fadeInUp">
			@foreach(list_product(6, @$category) as $produk)
			<div class="item">
				<div class="product product-default bg-grey1">
					{{HTML::image(product_image_url($produk->gambar1))}}
					<div class="tab-title-default">
						<h2>{{short_description($produk->nama,20)}}</h2>
						<h3>{{price($produk->hargaJual)}}</h3>
					</div>
					<span class="caption-product-default fade-caption">
				        <a href="{{product_url($produk)}}"><h3>{{short_description($produk->nama,20)}}</h3></a>
				        <h2>{{price($produk->hargaJual)}}</h2>
				        <div class="tab-rating">
				        </div>
				        <p>{{short_description($produk->deskripsi,134)}}</p>
				        <a href="{{product_url($produk)}}" class="btn-chart">Add to Chart</a>
			        </span>
				</div>
			</div>
			@endforeach  

		</div>
	</div><!-- end row -->
</div><!-- end container -->



<div class="container container-cstm">
	<div class="row no-rutter mb">
		<div class="product-other ">
			<div class="col-sm-8">
				<div class="tab-title">
					<h1><img src="{{url(dirTemaToko().'dcraft/assets/img/bs-icon.png')}}" class="icon-title"> Best seller</h1>
				</div>
				<div class="product-lates wow fadeInUp">
					@foreach(best_seller(4) as $besproduk )
					<div class="item2">
						<div class="product product-default bg-grey5">
							{{HTML::image(product_image_url($besproduk->gambar1))}}
							<div class="tab-title-default">
								<h2>{{short_description($besproduk->nama,25)}}</h2>
								<h3>{{price($besproduk->hargaJual)}}</h3>
							</div>
							<span class="caption-product-related fade-caption">
								<a href="#"><h3>{{short_description($besproduk->nama,25)}}</h3></a>
								<h2>{{price($besproduk->hargaJual)}}</h2>
								<div class="tab-rating">
								</div>
								<p>{{short_description($besproduk->deskripsi,134)}}</p>

								<a href="{{product_url($besproduk)}}" class="btn-chart">Add to Chart</a>
							</span>
						</div>
					</div>	
					 @endforeach


				</div>
			</div>
			<div class="col-sm-4">
				<div class="tab-title">
					<h1><img src="{{url(dirTemaToko().'dcraft/assets/img/hn-icon.png')}}" class="icon-title"> Hot News</h1>
				</div>
				<div class="hot-news wow fadeInUp">
					<ul>
						@if(count(list_blog(3,@$blog_category)) > 0)
						@foreach(list_blog(3,@$blog_category) as $blog)
						<li>
							<h1><a href="blog_url($blog)}}">{{$blog->judul}}</a></h1>
							<p>{{shortDescription($blog->isi,134)}}</p>
							<a href="{{blog_url($blog)}}" class="read-more-news">Read More</a>
							<div class="clearfix"></div>
						</li>
						@endforeach
						<div class="pagination">
		                {{list_blog(5,@$blog_category)->links()}}
		                </div>
		                @else
		                <article style="font-style:italic; text-align:center;">
		                <small>Blog tidak ditemukan.</small>
		                </article>
		                @endif
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!-- end container -->