<!DOCTYPE html>
<html lang="en-US">
	<head>
		{{ Theme::partial('seostuff') }} 
		{{ Theme::partial('defaultcss') }}  
		{{ Theme::asset()->styles() }} 
	</head>
	<body>
		<div id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						@if(@getimagesize( url(logo_image_url()) ))
						<span>
							<a href="{{url('home')}}">
								{{HTML::image(url(logo_image_url()), 'logo', array('class'=>'logo'))}}
							</a>
						</span>
						@else
						<span>
							<a href="{{url('home')}}">
								<strong>{{ short_description(Theme::place('title'),16) }}</strong>
							</a>
						</span>
						@endif
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class="option-right">
							@if( is_login() )
							<ul id="parent-option">
								<li>
									<a href="{{url('member')}}">
										{{short_description(user()->nama, 25)}} <i class="btn-circle fa fa-angle-down"></i>
									</a>
								</li>
								<li>
									<a href="{{url('logout')}}">
										Login <i class="btn-circle fa fa-angle-down"></i>
									</a>
								</li>
								{{shopping_cart()}}
							</ul>
							@else
							<ul id="parent-option">
								<li>
									<a href="{{url('member/create')}}" style="font-style:italic">
										Register <i class="btn-circle fa fa-angle-down"></i>
									</a>
								</li>
								<li>
									<a href="{{url('member')}}">
										Login <i class="btn-circle fa fa-angle-down"></i>
									</a>
								</li>
								{{shopping_cart()}}
							</ul>
							@endif	
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="wrapper" class="single">
			<div class="container">
				{{ Theme::partial('header') }} 
		        {{ Theme::partial('slider') }}	
			</div>
		</div>
		<div class="bottom-texture"></div>

		{{ Theme::place('content') }}  
		{{ Theme::partial('footer') }} 

		{{ Theme::partial('defaultjs') }}
		{{ Theme::asset()->scripts() }}
		{{ Theme::asset()->container('footer')->scripts() }}
		{{ Theme::partial('analytic') }} 
	</body>
</html>