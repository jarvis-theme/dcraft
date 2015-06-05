<li class="open-shop" id="shoppingcartplace">
	<a href="{{url('checkout')}}"><img src="{{url(dirTemaToko().'dcraft/assets/img/shop-chart.png')}}" class="shop-chart"></i></a>
	<span class="chart-list">
		@if(Shpcart::cart()->total_items() > 0)
		<p>{{Shpcart::cart()->total_items()}}</p>
		@else
		<p>Keranjang masih kosong</p>
		@endif
	</span>
</li>