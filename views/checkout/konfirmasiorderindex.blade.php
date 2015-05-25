

<div class="container" style="margin-top:50px;margin-bottom:50px;" >
<div class="row mp">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-9">
    	@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>					
</div>		
@endif

<div class="single-full">
	<div class="contact-form">
		<h3>Silakan masukkan kode order yang mau anda cari!</h3>
		{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
		<input style="float:left;" type="text" class="form-control" placeholder=" Kode Order" name='kodeorder' required>
		<button type="submit" style="margin-left:10px;" class="btn btn-success"><span> Cari Kode</span></button>
		{{Form::close()}}
	</div>
</div>
</div>
</div><!-- end row -->
</div><!-- end container -->