@if(Session::has('msg'))
<div class="success" id='message' style='display:none'>
	<p>Terima kasih, testimonial anda sudah terkirim.</p>
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	Terjadi kesalahan dalam menyimpan data.<br>
	<ul>
	@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
	@endforeach
	</ul>
</div>
@endif

<div class="container" style="margin-top:-50px;">
    <div class="row mp">
        <div class="col-sm-3">
            <div class="navigation-left sidey">
                <ul id="category" class="sidenav">
                @foreach(list_category() as $side_menu)
                    @if($side_menu->parent == '0')
                    <li>
                        <a href="{{category_url($side_menu)}}">{{$side_menu->nama}}</a>
                        @if($side_menu->anak->count() != 0)
                        <ul id="submenu-left">
                            @foreach($side_menu->anak as $submenu)
                            @if($submenu->parent == $side_menu->id)
                            <li>
                                <a href="{{category_url($submenu)}}" style="background-color:transparent">{{$submenu->nama}}</a>
                                @if($submenu->anak->count() != 0)
                                <ul>
                                    @foreach($submenu->anak as $submenu2)
                                    @if($submenu2->parent == $submenu->id)
                                    <li>
                                        <a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endif
                @endforeach
                </ul>
            </div>
            <div class="left-section">
                <div class="header-left-section">
                    <h1>Best Selling</h1>
                </div>
                <ul id="tab-best-selling">
                  @foreach(best_seller(3) as $bestproduk )
                    <li>
                        <a href="{{product_url($bestproduk)}}">
                            <div class="best-selling">
                                {{HTML::image(product_image_url($bestproduk->gambar1,'thumb'))}}
                                <h3 class="product-name">{{short_description($bestproduk->nama,25)}}</h3>
                                <h3 class="price">{{price($bestproduk->hargaJual)}}</h3>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <a href="{{url('produk')}}" class="link-more-news">View More</a>
            </div>

            <div class="left-section">
                <div class="header-left-section">
                    <h1>Lates News</h1>
                </div>
                <ul id="tab-lates-news">
                    @foreach(list_blog(3,@$blog_category) as $blog)
                    <li>
                        <a href="{{blog_url($blog)}}">
                            <div class="best-selling">
                                <h3>{{shortDescription($blog->judul,26)}}</h3>
                            </div>
                        </a>
                        <p>{{shortDescription($blog->isi,134)}}<a href="{{blog_url($blog)}}" class="more-read">Read More</a></p>
                        <span class="date">{{waktuTgl($blog->updated_at)}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            @foreach(vertical_banner() as $banners)
            <div class="banner-left">
                <a href="{{url($banners->url)}}">
                    {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'270','height'=>'388','class'=>'img-responsive'))}}
                </a>
            </div>
            @endforeach

            {{ Theme::partial('subscribe') }}
        </div>
        <div class="col-sm-9">
            <div class="single-page">
                <div class="single-page">
                    <h1>Testimoni</h1>
                    @foreach (list_testimonial() as $items)  
                    <blockquote>
                        <p class="quote"></p>
                        <p>
                            <h4>{{$items->nama}}</h4>
                            {{$items->isi}}
                        </p>
                    </blockquote>
                    @endforeach
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            {{list_testimonial()->links()}}
                        </div>
                    </div>

                    <div class="respond col-md-6">
                        <h3 style="margin-top: 1px;margin-bottom: 20px;">Buat Testimonial</h3>
                        <form method="post" action="{{url('testimoni')}}" role="form">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" name="nama" id="name" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Testimonial</label>
                                <textarea name="testimonial" class="form-control" rows="3" placeholder="Enter Massage" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Kirim Testimonial</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>