@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>
</div>
@endif

<div class="container" style="margin-top:50px;margin-bottom:50px;" >
	<div class="row mp" style="margin: 0 30px">
		<div class="col-xs-12 col-sm-8">
			<h2 style="margin-top:0">Konfirmasi Order</h2>
			<hr>
			<p>Silahkan masukkan kode order yang ingin anda cari!</p>
			{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
				<input style="float:left;" type="text" class="form-control" placeholder="Kode Order" name='kodeorder' required>
				<button type="submit" style="margin-left:10px;" class="btn btn-success"><span> Cari Kode</span></button>
			{{Form::close()}}
		</div>
		<div class="col-xs-12 col-sm-4">
			@foreach(vertical_banner() as $banners)
			<a href="{{url($banners->url)}}">
    			{{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'272','height'=>'auto','class'=>'img-responsive'))}}
			</a>
			@endforeach
		</div>
	</div><!-- end row -->
</div><!-- end container -->