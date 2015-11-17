<div class="container confirm">
	<div class="row mp" id="confirm-order">
		<div class="col-xs-12 col-sm-8" id="search-order">
			<br>
			<h2 id="textconfirm">Konfirmasi Order</h2>
			<hr>
			<p>Silahkan masukkan kode order yang ingin anda cari!</p>
			{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
				<input type="text" class="form-control" placeholder="Kode Order" name='kodeorder' required>
				<button type="submit" id="btncode" class="btn btn-success"><span> Cari Kode</span></button>
			{{Form::close()}}
			<br><br>
		</div>
		<div class="col-xs-12 col-sm-4">
			@foreach(vertical_banner() as $banners)
			<a href="{{url($banners->url)}}">
    			{{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('width'=>'272','height'=>'auto','class'=>'img-responsive'))}}
			</a>
			@endforeach
		</div>
	</div>
</div>