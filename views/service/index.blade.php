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
                      @foreach(best_seller() as $besproduk )
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
                        @foreach(list_blog(5,@$blog_category) as $blog)
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
                <div class="single-page">
                    <div class="single-page">
                        <h1>service</h1>
                        <article class="col-lg-12 col-md-12 col-xs-12">
                            <h4>Term of Service</h4>
                            <p>{{$service->tos}}</p>
                        </article>
                        <article class="col-lg-12 col-md-12 col-xs-12">
                            <h4>Refund Policy</h4>
                            <p>{{$service->refund}}</p>
                        </article>
                        <article class="col-lg-12 col-md-12 col-xs-12">
                            <h4>Privacy Policy</h4>
                            <p>{{$service->privacy}}</p>
                        </article>
                    </div>
                </div><!-- end product categories -->
          
            </div>
        </div><!-- end row -->
    </div><!-- end container -->