<div class="container" style="margin-top:-50px;">
        <div class="row mp">
            <div class="col-sm-3">
                <div class="navigation-left">
                    <ul id="category">
                    @foreach(category_menu() as $key=>$menu)
                        @if($menu->parent=='0')
                         <li>
                            <a href={{category_url($menu)}}>{{$menu->nama}}<i class="vnavright fa fa-caret-right"></i></a>
                            @if($menu->anak->count()!=0)
                            <ul id="submenu-left">
                                @foreach($menu->anak as $key => $submenu)
                                <li><a href="{{category_url($submenu)}}">{{$submenu->nama}}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endif
                    @endforeach
                    </ul>


                </div><!-- end navigation -->
                <div class="left-section">
                    <div class="header-left-section">
                        <h1>Best Selling</h1>
                    </div>
                    <ul id="tab-best-selling">
                      @foreach(best_seller(3) as $besproduk )
                        <li>
                            <a href="{{product_url($besproduk)}}">
                                <div class="best-selling">
                                    {{HTML::image(product_image_url($besproduk->gambar1))}}
                                    <h3 class="product-name">{{short_description($besproduk->nama,25)}}</h3>
                                    <h3 class="price">{{price($besproduk->hargaJual)}}</h3>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{url('produk')}}" class="link-more-news">View More</a>
                </div><!-- end left section -->
                <!-- end best seller -->

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
                </div><!-- end left section -->
                @foreach(vertical_banner() as $banners)
                <div class="banner-left">
                    <a href="{{URL::to($banners->url)}}">
                        {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'270','height'=>'388','class'=>'img-responsive'))}}
                    </a>
                </div><!-- end banner -->
                @endforeach
                <div class="subscribe">
                    <h1>News Letter</h1>
                    <h3>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</h3>
                    <span>
                        <img src="{{url(dirTemaToko().'dcraft/assets/img/mail.png')}}">
                        <form action="{{@$mailing->action}}" method="post" class="form-subscribe">
                            <div class="form-group">
                                <input type="text" name="email" class="email-field" {{ @$mailing->action==''?'disabled="disabled"':'' }} placeholder="Enter your email" name="EMAIL" class="input-medium required email" id="newsletter mce-EMAIL" >
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="sibscribe" class="btn-subscribe" {{ @$mailing->action==''?'disabled="disabled"':'' }}>
                            </div>
                        </form>
                    </span>
                </div><!-- end subscribe -->


            </div>
            <div class="col-sm-9">
                <div class="product-categories">
                    @if($jumlahCari != 0)
                    <div class="row np">
                        @foreach($hasilpro as $produks)
                        <div class="col-sm-4">
                            <div class="product-categories-list">
                                {{HTML::image(product_image_url($produks->gambar1))}}
                                <div class="tab-title">
                                    <h3 class="title">{{ short_description($produks->nama,22)}}</h3>
                                    <h3 class="price">{{price($produks->hargaJual)}}</h3>
                                </div>
                                <span class="caption-product-list fade-caption">
                                    <h3>{{ short_description($produks->nama,22)}}</h3>
                                    <h2>{{price($produks->hargaJual)}}</h2>
                                    <i class="fa fa-star rating"></i>
                                    <i class="fa fa-star rating"></i>
                                    <i class="fa fa-star rating"></i>
                                    <i class="fa fa-star rating"></i>
                                    <i class="fa fa-star rating"></i>
                                    <p>{{short_description($produks->deskripsi,143)}}</p>
                                 
                                    <a href="{{product_url($produks)}}" class="btn-chart">Add to Chart</a>
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                  
                    @else
                    <article class="text-center">
                        <i>Hasil pencarian tidak ditemukan</i>
                    </article>
                    @endif
                </div><!-- end product categories -->
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-3">
                           {{$hasilpro->links()}}
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->