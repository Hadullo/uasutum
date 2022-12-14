
       @extends("layouts.frontend")
	   @section('content')
		 <div class="menu-spacing">
            <div class="container">
                <div class="row">
                    <div class="mobile-menu-area visible-xs visible-sm">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="main">
                                    <li><a class="main-a" href="">Shirt</a></li>
                                    <li><a class="main-a" href="">Pant</a></li>
                                    <li class="active"><a class="main-a" href="#">Bourkha</a>
                                        <ul>
                                            <li><a href="#">Hijab</a></li>
                                            <li><a href="#">Scarf</a></li>
                                            <li><a href="#" class="main-a">Shirt</a>
                                                <ul>
                                                    <li><a href="#">T-Shirt</a></li>
                                                    <li><a href="#">Trousers</a></li>
                                                    <li><a href="#">Jackets & sweater</a></li>
                                                    <li><a href="#">3 Piece</a></li>
                                                </ul>
                                            </li>
                                        </ul>	
                                    </li>
                                    <li><a class="main-a" href="">Shawl</a></li>
                                    <li><a class="main-a" href="">Other</a></li>
                                </ul>
                            </nav>
                        </div>	
                    </div>
                </div>
            </div>
        </div>

        <!--
        |========================
        |  SLIDER
        |========================
        -->
        <section class="xt-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 category-hidden padding-right-o"></div>
                    <div class="col-md-9 col-md-offset-3 padding-o padding-sm">
                        <div class="flexslider xt-slider-inner">
                          <ul class="slides">
                            <li>
                              <img src="{{ asset('assets/lgfe/images/model-five.jpg') }} " alt="" />
                              <div class="slide_text">
                                <span class="slide-category">Fashion</span>
                                <h2 class="slide_title">Spring Summer <br> Fashion Collection</h2>
                                <p class="slide_byline "> Lorem ipsum dolor sit amet, consectetur adipis
                                    cing elit, sed do eiusmod tempor incididunt ut labore 
                                    et dolore magna aliqua ut enim ad minim.</p>
                                <a href="" class="btn btn-fill ">Shop Now</a>
                              </div>
                            </li>
                            <li>
                              <img src="{{ asset('assets/lgfe/images/model-four.jpg') }} " alt="" />
                              <div class="slide_text">
                                <span class="slide-category">Style</span>
                                <h2 class="slide_title ">Winter Autumn <br> Jacket Collection</h2>
                                <p class="slide_byline "> Usher in the summer months with showerproof jackets
                                    and lightweight boys' coats. Items are great to be presented
                                     loved ones and the reasonable price makes the collection suitable.</p>
                                <a href="" class="btn btn-fill ">Shop Now</a>
                              </div>
                            </li>
                            <li>
                              <img src="{{ asset('assets/lgfe/images/model-three.jpg') }} " alt="" />
                              <div class="slide_text">
                                <span class="slide-category">Spring Collection</span>
                                <h2 class="slide_title ">Spring Upcomming <br> New Collection</h2>
                                <p class="slide_byline "> Bags, Glasses and belts are all of the best quality
                                    and are made by famous brands in this area. Vitrine helped 
                                    them to show their products better and sell more.</p>
                                <a href="" class="btn btn-fill ">Shop Now</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="flexslider-controls">
                          <ol class="flex-control-nav">
                            <li>
                                <img src="{{ asset('assets/lgfe/images/model-five-thumb.jpg') }} " alt="" /> 
                                <div class="nav-title">
                                    <span>Fashion</span>
                                    <h3>Spring Summer Fashion Collection</h3>
                                </div>
                            
                            </li>                            
                            <li>
                                <img src="{{ asset('assets/lgfe/images/model-four-thumb.jpg') }} " alt="" /> 
                                <div class="nav-title">
                                    <span>Style</span>
                                    <h3>Winter Autumn Jacket COllection</h3>
                                </div>
                            
                            </li>                            
                            <li>
                                <img src="{{ asset('assets/lgfe/images/model-three-thumb.jpg') }} " alt="" /> 
                                <div class="nav-title">
                                    <span>Spring</span>
                                    <h3>Spring New Collection 2018</h3>
                                </div>
                            
                            </li>
                          </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        |========================
        |  FEATURED SECTION
        |========================
        -->
        <section class="xt-deal-section">
            <div class="container">
                <div class="row section-separator">
                    <div class="xt-each-deal">
                        <div class="col-md-8 col-sm-6">
                            <div class="xt-spring-deal cover-bg white xt-deal" style="background-image: url({{ asset('assets/lgfe/images/f1.jpg);') }} ">
                                <div class="xt-overlay"></div>
                                <span>fresh your soul</span>
                                <h2>spring summer <br> fashion collection</h2>
                                <a href="" class="btn btn-fill">Shop now</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="xt-summer-deal cover-bg white xt-deal" style="background-image: url({{ asset('assets/lgfe/images/f2.jpg);') }}">
                                <div class="xt-overlay"></div>
                                <span>SAVE 35% ON DESIGNER</span>
                                <h2>hot summer collection</h2>
                                <a href="" class="btn btn-fill">Shop now</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="xt-off-deal cover-bg white xt-deal xt-color-bg">
                                <span>summer collection 2017</span>
                                <h2 class="xt-deal-price">66<span>%<br>off</span></h2>
                                <a href="" class="btn btn-border">Shop now</a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="xt-summer-deal cover-bg white xt-deal" style="background-image: url({{ asset('assets/lgfe/images/f3.jpg);') }}">
                                <div class="xt-overlay"></div>
                                <span>Winter COllection</span>
                                <h2>Winter Autumn <br> Jacket Collection</h2>
                                <a href="" class="btn btn-fill">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        |========================
        |  PRODUCT
        |========================
        -->
        <section class="xt-feature-product">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                        <span class="xt-title-bg"></span>
                    </div>
                    <div class="xt-each-feature">
                        <div class="col-md-4 col-sm-4">
                            <div class="xt-feature">
                                <div class="product-img">
                                    <img src="{{ asset('assets/lgfe/images/2.jpg') }} " alt="" class="img-responsive">
                                    <span class="product-tag xt-uppercase">sale!</span>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Sweater</span>
                                        <span class="name xt-semibold">Red Color</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="xt-featured-caption">
                                        <div class="product-title">
                                            <span class="category xt-uppercase">Sweater</span>
                                            <span class="name xt-semibold">Red Color</span>
                                        </div>
                                        <div class="price-tag pull-right">
                                            <span class="old-price"><del>$280</del></span>
                                            <span class="new-price xt-semibold">$260</span>
                                        </div>
                                        <div class="add-cart">
                                            <a href="" class="btn btn-fill">Add to cart</a>
                                            <ul class="reaction">
                                                <li><a href=""><i class="fa fa-search"></i></a></li>
                                                <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="xt-feature">
                                <div class="product-img">
                                    <img src="{{ asset('assets/lgfe/images/1.jpg') }} " alt="" class="img-responsive">
                                    <span class="product-tag xt-uppercase">sale!</span>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">T-Shirt</span>
                                        <span class="name xt-semibold">2017 Model</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="xt-featured-caption">
                                        <div class="product-title">
                                            <span class="category xt-uppercase">T-Shirt</span>
                                            <span class="name xt-semibold">2017 Model</span>
                                        </div>
                                        <div class="price-tag pull-right">
                                            <span class="old-price"><del>$280</del></span>
                                            <span class="new-price xt-semibold">$260</span>
                                        </div>
                                        <div class="add-cart">
                                            <a href="" class="btn btn-fill">Add to cart</a>
                                            <ul class="reaction">
                                                <li><a href=""><i class="fa fa-search"></i></a></li>
                                                <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="xt-feature">
                                <div class="product-img">
                                    <img src="{{ asset('assets/lgfe/images/3.jpg') }} " alt="" class="img-responsive">
                                    <span class="product-tag xt-uppercase">sale!</span>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">New Look</span>
                                        <span class="name xt-semibold">2018 Model Coming Soon</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="xt-featured-caption">
                                        <div class="product-title">
                                            <span class="category xt-uppercase">New Look</span>
                                            <span class="name xt-semibold">2018 Model Coming Soon</span>
                                        </div>
                                        <div class="price-tag pull-right">
                                            <span class="old-price"><del>$280</del></span>
                                            <span class="new-price xt-semibold">$260</span>
                                        </div>
                                        <div class="add-cart">
                                            <a href="" class="btn btn-fill">Add to cart</a>
                                            <ul class="reaction">
                                                <li><a href=""><i class="fa fa-search"></i></a></li>
                                                <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="xt-feature">
                                <div class="product-img">
                                    <img src="{{ asset('assets/lgfe/images/4.jpg') }} " alt="" class="img-responsive">
                                    <span class="product-tag xt-uppercase">sale!</span>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Lipstick</span>
                                        <span class="name xt-semibold">Imported From U.S.</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="xt-featured-caption">
                                        <div class="product-title">
                                            <span class="category xt-uppercase">Lipstick</span>
                                            <span class="name xt-semibold">Imported From U.S.</span>
                                        </div>
                                        <div class="price-tag pull-right">
                                            <span class="old-price"><del>$280</del></span>
                                            <span class="new-price xt-semibold">$260</span>
                                        </div>
                                        <div class="add-cart">
                                            <a href="" class="btn btn-fill">Add to cart</a>
                                            <ul class="reaction">
                                                <li><a href=""><i class="fa fa-search"></i></a></li>
                                                <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="xt-feature">
                                <div class="product-img">
                                    <img src="{{ asset('assets/lgfe/images/b2.jpg') }} " alt="" class="img-responsive">
                                    <span class="product-tag xt-uppercase">sale!</span>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Shirt</span>
                                        <span class="name xt-semibold">Exclusive Design</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="xt-featured-caption">
                                        <div class="product-title">
                                            <span class="category xt-uppercase">Shirt</span>
                                            <span class="name xt-semibold">Exclusive Design</span>
                                        </div>
                                        <div class="price-tag pull-right">
                                            <span class="old-price"><del>$280</del></span>
                                            <span class="new-price xt-semibold">$260</span>
                                        </div>
                                        <div class="add-cart">
                                            <a href="" class="btn btn-fill">Add to cart</a>
                                            <ul class="reaction">
                                                <li><a href=""><i class="fa fa-search"></i></a></li>
                                                <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="xt-feature">
                                <div class="product-img">
                                    <img src="{{ asset('assets/lgfe/images/b1.jpg') }}" alt="" class="img-responsive">
                                    <span class="product-tag xt-uppercase">sale!</span>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <span class="category xt-uppercase">Tops</span>
                                        <span class="name xt-semibold">Spring Collection</span>
                                    </div>
                                    <div class="price-tag pull-right">
                                        <span class="old-price"><del>$280</del></span>
                                        <span class="new-price xt-semibold">$260</span>
                                    </div>
                                    <div class="xt-featured-caption">
                                        <div class="product-title">
                                            <span class="category xt-uppercase">Tops</span>
                                            <span class="name xt-semibold">Spring Collection</span>
                                        </div>
                                        <div class="price-tag pull-right">
                                            <span class="old-price"><del>$280</del></span>
                                            <span class="new-price xt-semibold">$260</span>
                                        </div>
                                        <div class="add-cart">
                                            <a href="" class="btn btn-fill">Add to cart</a>
                                            <ul class="reaction">
                                                <li><a href=""><i class="fa fa-search"></i></a></li>
                                                <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		@endsection

        