@if(Session::has('errorlogin'))
<div class="error" id='message' style='display:none'>
    <p>Maaf, email atau password anda salah.</p>
</div>
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    {{Session::get('error')}}!!!
</div>
@endif
@if(Session::has('errorrecovery'))
<div class="error" id='message' style='display:none'>
    <p>Maaf, email anda tidak ditemukan.</p>
</div>
@endif
@if(Session::has('forget'))
<div class="success" id='message' style='display:none'>
    <p>Cek email untuk me-reset password anda!</p>
</div>  
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    <p>{{Session::get('error')}}</p>
</div>  
@endif 

<div class="container">
    <div class="row mp" style="margin: 0 30px">
        <div class="col-xs-12 col-sm-4 form-inline">
            <h2>Lupa Password</h2><hr><br>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
            </div>
            <button class="btn btn-success" type="button">Reset Password</button>
            <br><br>
        </div>
        <div class="col-xs-12 col-sm-4">
            <h2>Pelanggan Baru</h2><hr><br>
            <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
            <a href="{{url('member/create')}}" class="btn btn-warning">Daftar</a>
            <br><br>
        </div>
        <div class="col-xs-12 col-sm-4">
            {{ Theme::partial('subscribe') }}
        </div>
    </div>
</div>