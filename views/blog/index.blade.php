<!-- <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="banner-top">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</div> -->
<div class="container" style="margin-top:-50px;">
    <div class="row mp">
        <div class="col-xs-12 col-sm-4 col-md-3">
           <div class="navigation-left">
                <div class="header-left-section title-category">
                    <h1>Kategori</h1>
                </div>
                <ul id="side-category">
                @foreach(list_blog_category() as $kat)
                    @if(!empty($kat->nama)) 
                    <span style="text-decoration: underline;"><a href="{{blog_category_url($kat)}}">{{$kat->nama}}</a></span>&nbsp;&nbsp;
                    @endif
                @endforeach
                </ul>
            </div>
            @if(count(best_seller()) > 0)
            <div class="left-section">
                <div class="header-left-section">
                    <h1>Produk Terlaris</h1>
                </div>
                <ul id="tab-best-selling">
                    @foreach(best_seller(3) as $bestproduk )
                    <li>
                        <a href="{{product_url($bestproduk)}}">
                            <div class="best-selling">
                                {{HTML::image(product_image_url($bestproduk->gambar1,'thumb'))}}
                            </div>
                            <h3 class="product-name">{{short_description($bestproduk->nama,50)}}</h3>
                            <h3 class="price">{{price($bestproduk->hargaJual)}}</h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="link-more-news">
                    <a href="{{url('produk')}}" class="btn btn-success">View More</a>
                </div>
            </div>
            @endif
            @foreach(vertical_banner() as $banners)
            <div class="banner-left">
                <a href="{{url($banners->url)}}">
                    {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'270','height'=>'388','class'=>'img-responsive'))}}
                </a>
            </div>
            @endforeach

            {{ Theme::partial('subscribe') }}
        </div>
        <div class="col-xs-12 col-sm-8 col-m-9">
            <div class="single-page">
                <div class="single-page">
                    @if(count(list_blog(null,@$blog_category)) > 0)
                    <div class="row">
                        @foreach(list_blog(null,@$blog_category) as $blogs)
                        <article class="col-lg-12" style="margin-bottom:10px">
                            <a href="{{blog_url($blogs)}}"><h3>{{$blogs->judul}}</h3></a>
                            <p>
                                <small><i class="fa fa-calendar"></i> {{waktuTgl($blogs->updated_at)}}</small>&nbsp;&nbsp;
                                @if(!empty($blogs->kategori->nama))
                                <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$blogs->kategori)}}">{{@$blogs->kategori->nama}}</a></span>
                                @endif
                            </p>
                            <p>
                                {{shortDescription($blogs->isi,300)}}<br>
                                <a href="{{blog_url($blogs)}}" class="theme">Baca Selengkapnya →</a>
                            </p>
                            <hr>
                        </article>
                        @endforeach
                    </div>
                    <div class="pagination">
                        {{list_blog(null,@$blog_category)->links()}}
                    </div>
                    @else
                    <div class="row">
                        <article class="not-found">
                            <h2><small>Blog tidak ditemukan.</small></h2>
                        </article>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>