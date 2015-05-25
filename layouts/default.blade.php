<!DOCTYPE html>
<html lang="en-US">
<head>
	{{ Theme::partial('seostuff') }} 
       <!--defaultcss.blade.php-->
   {{ Theme::partial('defaultcss') }}  
   {{ Theme::asset()->styles() }} 
</head>
<body>
	<!-- Start Header -->
	<div id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					@if(@getimagesize( url(logo_image_url()) ))
					<span><a href="{{url('home')}}">{{HTML::image(logo_image_url(), 'Dcraft', array('class'=>'logo'))}}</a></span>
					@else
					<span><a href="{{url('home')}}"><strong>{{ short_description(Theme::place('title'),16) }}</strong></a></span>
					@endif
				</div>
				<div class="col-md-5 col-md-offset-1">
					<div class="option-right">
						@if( is_login() )
						<ul id="parent-option">
							<li><a href="{{url::to('member/profile/edit')}}">{{user()->nama}}</a></li>
							<li><a href="{{url::to('logout')}}">LOGOUT</a></li>
							{{shopping_cart()}}
						</ul>
						@else
						<ul id="parent-option">
							<li><a href="{{url::to('member/create')}}">REGISTER</a></li>
							<li><a href="{{url::to('member')}}">LOGIN</a></li>
							{{shopping_cart()}}
						</ul>
						@endif
						
					</div>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end row -->

	<div id="wrapper">
		<div class="container">
		{{ Theme::partial('header') }} 
                 
            <!--slider-->
        
         {{-- Theme::partial('slider') --}} 

		</div><!-- end container -->
	</div><!-- end wrapper -->
	<div class="bottom-texture"></div>

	{{ Theme::place('content') }}  



	{{ Theme::partial('footer') }} 

	{{ Theme::partial('defaultjs') }}
  {{ Theme::asset()->scripts() }}
  {{ Theme::asset()->container('footer')->scripts() }}
  {{ Theme::partial('analytic') }} 
</body>
</html>


