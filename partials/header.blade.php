<div class="row">
	<div class="col-md-12">
		<div id="menus">
			<div id="hamburger-icon" class="btn-hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<ul id="menus-top-section">
				@foreach(main_menu()->link as $key=>$link)
                <li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>
                @endforeach
				<li style="float:right;">
					<form action="{{URL::to('search')}}" method="post" class="form-search ">
						<input type="text" placeholder="Search" name="search" class="input-text" required>
						<button class="btn-search"><i class="fa fa-search"></i></button>
					</form>
				</li>
			</ul>
		</div>
	</div><!-- end navigation menu -->
</div><!-- end row -->