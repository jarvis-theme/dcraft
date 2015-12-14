<li class="open-shop" id="shoppingcartplace">
	<a href="{{url('checkout')}}"><img src="{{url(dirTemaToko().'dcraft/assets/img/shop-chart.png')}}" class="shop-chart" alt="cart"></i></a>
	<span class="chart-list">
		@if(Shpcart::cart()->total_items() > 0)
		<p>Total : {{ price(Shpcart::cart()->total() )}}</p>
		@else
		<p>Keranjang masih kosong</p>
		@endif
	</span>
</li>