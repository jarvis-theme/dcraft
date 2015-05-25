<li class="open-shop" id="shoppingcartplace">
	<a href="{{url('checkout')}}"><img src="{{url(dirTemaToko().'dcraft/assets/img/shop-chart.png')}}" class="shop-chart"></i></a>
	<span class="chart-list">
		<p>{{Shpcart::cart()->total_items()}}</p>
	</span>
</li>
