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
        </div>

        <div class="col-sm-9">
            <form action="#" id="addorder">
            <div class="detail-product">
                <div class="row mp">
                    <div class="col-sm-6">
                        <img id="imgZoom" src="{{product_image_url($produk->gambar1)}}" data-zoom-image="{{product_image_url($produk->gambar1)}}">
                        <div id="product_detail">
                            @if($produk->gambar2 != '')
                            <a href="{{product_image_url($produk->gambar2,'thumb')}}" class="elevatezoom-gallery thumbnail-img" data-update="" data-image="{{product_image_url($produk->gambar2,'thumb')}}" data-zoom-image="{{product_image_url($produk->gambar2)}}">
                            <img id="img-thumbnail" src="{{product_image_url($produk->gambar2,'thumb')}}" width="100"></a>
                            @endif
                            @if($produk->gambar3 != '')
                            <a href="{{product_image_url($produk->gambar3,'thumb')}}" class="elevatezoom-gallery thumbnail-img" data-update="" data-image="{{product_image_url($produk->gambar3,'thumb')}}" data-zoom-image="{{product_image_url($produk->gambar3,'thumb')}}">
                            <img id="img-thumbnail" src="{{product_image_url($produk->gambar3,'thumb')}}" width="100"></a>
                            @endif
                            @if($produk->gambar4 != '')
                            <a href="{{product_image_url($produk->gambar4,'thumb')}}" class="elevatezoom-gallery thumbnail-img" data-update="" data-image="{{product_image_url($produk->gambar4,'thumb')}}" data-zoom-image="{{product_image_url($produk->gambar4,'thumb')}}">
                            <img id="img-thumbnail" src="{{product_image_url($produk->gambar4,'thumb')}}" width="100"></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="product-description">
                            <h3 class="detail-title">{{$produk->nama}}</h3>
                            
                            <h3 class="detail-price">{{price($produk->hargaJual)}}</h3>
                                
                            <div class="tab-rating">
                            {{sosialShare(url(product_url($produk)))}}
                            </div>
                            <h2>Deskripsi Produk</h2>
                           
                            
                           
                            <p>{{$produk->deskripsi}}</p>
                            <div class="tab-quantity">
                                <h3>Quantity</h3><br>
                                    <button type='submit' class='qtyminus' field='quantity' /><i class="fa fa-angle-left"></i></button>
                                    <input type='text' name='qty' value='1' class='qty' />
                                    <button type='button' value='+' class='qtyplus' field='quantity' /><i class="fa fa-angle-right"></i></button>
                                    
                                
                            </div>
                            <div class="avalaible-text">
                                @if($produk->stok > 0)
                                <span>
                                    <i class="ceklist fa fa-check"></i>
                                </span>
                                <span>Tersedia Stok, <span class="text-color">{{$produk->stok}} item</span></span>
                                @else
                                <span class="text-color">Habis</span>
                                @endif
                            </div>
                            @if($opsiproduk->count() > 0)                 
                            <div class="size-list">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Opsi :</label>
                                    <div class="col-sm-5">
                                        <select class="form-control attribute_select" name="opsiproduk">
                                            <option value="">-- Pilih Opsi --</option>
                                            @foreach ($opsiproduk as $key => $opsi)
                                            <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                                {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div><!-- end detail product -->

            <div class="checkout">
                @foreach(list_banks() as $value)
                <img src="{{bank_logo($value)}}">
                @endforeach
                @foreach(list_payments() as $pay)
                @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                <img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" />
                @endif
                @endforeach
                @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                <img src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" />
                @endif
                <div class="btn-detail">
                    <button class="btn btn-success addtocart" type="submit"><i class="fa fa-cart-plus"></i>Add to cart</button>
                </div>
            </div>
            </form>
            <div class="related-page">
                <div class="row">
                    <h3 class="detail-title">Produk Lain</h3>
                    @if(count($produklain) > 0)
                        @foreach($produklain as $relproduk)
                    <div class="col-sm-3">
                        <div class="related-product">
                            <img src="{{product_image_url($relproduk->gambar1)}}">
                            <span class="related-caption-product fade-caption">
                                <h3>{{shortDescription($relproduk->nama,12)}}</h3>
                                <h2>{{price($relproduk->hargaJual)}}</h2>
                                <p>{{shortDescription($produk->deskripsi,26)}}</p>
                                <a href="{{product_url($relproduk)}}" class="btn-chart">Add to Chart</a>
                            </span>
                        </div>
                    </div>
                    @endforeach
                     @else
                    <article class="text-center">
                    <i>Produk tidak ditemukan</i>
                    </article>
                    @endif
                </div>
            </div>
        </div> <!-- end col-sm-9 -->
    </div><!-- end row -->
</div><!-- end container -->