@extends("layouts.fronted_master")
@section("title", " - Home")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="mobile-category-nav d-lg-none pt-4">
                <!--=======  category menu  =======-->
                <div class="hero-side-category">
                    <!-- Category Toggle Wrap -->
                    <div class="category-toggle-wrap">
                        <!-- Category Toggle -->
                        <button class="more-btn">
                            <span class="lnr lnr-text-align-left"></span> All Categories
                        </button>
                    </div>

                    <!-- Category Menu -->
                    <nav class="category-menu">
                        <ul>
                            <li class="menu-item-has-children menu-item-has-children-1">
                                <a href="#">Accessories &amp; Parts<i class="ion-ios-arrow-down"></i></a>
                                <!-- category submenu -->
                                <ul class="category-mega-menu category-mega-menu-1">
                                    <li><a href="#">Cables &amp; Adapters</a></li>
                                    <li><a href="#">Batteries</a></li>
                                    <li><a href="#">Chargers</a></li>
                                    <li><a href="#">Bags &amp; Cases</a></li>
                                    <li><a href="#">Electronic Cigarettes</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Televisions</a></li>
                            <li class="hidden" style="display: none">
                                <a href="#">Projectors</a>
                            </li>
                            <li>
                                <a href="#" id="more-btn"><i class="ion-ios-plus-empty"></i> More Categories</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Hero Slider Start -->
<section class="hero-section position-relative">
    <div class="container">
        <div class="row mb-n7">
            <div class="col-xl-3 col-lg-4">
                <div class="vertical-menu d-none d-lg-block">
                    <button class="menu-btn d-flex">
                        <span class="lnr lnr-text-align-left"></span>Browse categories
                    </button>
                    <ul class="vmenu-content">
                        <li class="menu-item">
                            <a href="#">Cookware<i class="ion-ios-arrow-right"></i></a>
                            <ul class="verticale-mega-menu flex-wrap">
                                <li>
                                    <a href="#">
                                        <strong> Baking & Pastry Mats</strong>
                                    </a>
                                    <ul class="submenu-item">
                                        <li><a href="#">Baking Cups</a></li>
                                        <li><a href="#">Baking Dishes</a></li>
                                        <li><a href="#">Baking Mats</a></li>
                                        <li><a href="#">Pastry Boards</a></li>
                                        <li><a href="#">Pastry Mats</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span><strong>Chocolate Moulds</strong></span>
                                    </a>
                                    <ul class="submenu-item">
                                        <li><a href="#">Decorating Pens</a></li>
                                        <li><a href="#">Decorating Sets</a></li>
                                        <li><a href="#">Decorating Tips</a></li>
                                        <li><a href="#">Sweetly Does It</a></li>
                                        <li><a href="#">Aprons</a></li>
                                        <li><a href="#">Electric Mixers</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- sub menu -->
                        </li>
                        <li class="menu-item">
                            <a href="#">Appliances<i class="ion-ios-arrow-right"></i></a>
                            <ul class="verticale-mega-menu flex-wrap">
                                <li>
                                    <a href="#">
                                        <strong> Baking & Pastry Mats</strong>
                                    </a>
                                    <ul class="submenu-item">
                                        <li><a href="#">Baking Cups</a></li>
                                        <li><a href="#">Baking Dishes</a></li>
                                        <li><a href="#">Baking Mats</a></li>
                                        <li><a href="#">Pastry Boards</a></li>
                                        <li><a href="#">Pastry Mats</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span><strong>Chocolate Moulds</strong></span>
                                    </a>
                                    <ul class="submenu-item">
                                        <li><a href="#">Decorating Pens</a></li>
                                        <li><a href="#">Decorating Sets</a></li>
                                        <li><a href="#">Decorating Tips</a></li>
                                        <li><a href="#">Sweetly Does It</a></li>
                                        <li><a href="#">Aprons</a></li>
                                        <li><a href="#">Electric Mixers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#">Kitchenair<i class="ion-ios-arrow-right"></i></a>
                            <ul class="verticale-mega-menu flex-wrap">
                                <li>
                                    <a href="#">
                                        <strong> Baking & Pastry Mats</strong>
                                    </a>
                                    <ul class="submenu-item">
                                        <li><a href="#">Baking Cups</a></li>
                                        <li><a href="#">Baking Dishes</a></li>
                                        <li><a href="#">Baking Mats</a></li>
                                        <li><a href="#">Pastry Boards</a></li>
                                        <li><a href="#">Pastry Mats</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span><strong>Chocolate Moulds</strong></span>
                                    </a>
                                    <ul class="submenu-item">
                                        <li><a href="#">Decorating Pens</a></li>
                                        <li><a href="#">Decorating Sets</a></li>
                                        <li><a href="#">Decorating Tips</a></li>
                                        <li><a href="#">Sweetly Does It</a></li>
                                        <li><a href="#">Aprons</a></li>
                                        <li><a href="#">Electric Mixers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#">KitchenAid Artisan<i class="ion-ios-arrow-right"></i></a>
                            <ul class="verticale-mega-menu flex-wrap">
                                <li>
                                    <a href="#">
                                        <strong> Baking & Pastry Mats</strong>
                                    </a>
                                    <ul class="submenu-item">
                                        <li><a href="#">Baking Cups</a></li>
                                        <li><a href="#">Baking Dishes</a></li>
                                        <li><a href="#">Baking Mats</a></li>
                                        <li><a href="#">Pastry Boards</a></li>
                                        <li><a href="#">Pastry Mats</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <span><strong>Chocolate Moulds</strong></span>
                                    </a>
                                    <ul class="submenu-item">
                                        <li><a href="#">Decorating Pens</a></li>
                                        <li><a href="#">Decorating Sets</a></li>
                                        <li><a href="#">Decorating Tips</a></li>
                                        <li><a href="#">Sweetly Does It</a></li>
                                        <li><a href="#">Aprons</a></li>
                                        <li><a href="#">Electric Mixers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#">Ceramic Artisan<i class="ion-ios-arrow-right"></i></a>
                            <ul class="verticale-sub-menu">
                                <li>
                                    <ul class="submenu-item">
                                        <li><a href="#">Pots</a></li>
                                        <li><a href="#">Pans</a></li>
                                        <li><a href="#">Living</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#">Appliances1</a></li>
                        <li class="menu-item"><a href="#">Bakeware</a></li>
                        <li class="menu-item"><a href="#">Knives</a></li>
                        <li class="menu-item"><a href="#">Tableware</a></li>
                        <li class="menu-item"><a href="#">DIY</a></li>
                        <li class="menu-item"><a href="#">Baking Cups</a></li>
                        <li class="menu-item"><a href="#">Decorating Pens</a></li>
                        <li class="menu-item"><a href="#">Sweetly Does It</a></li>
                    </ul>
                    <!-- menu content -->
                </div>

            </div>
            <div class="col-xl-6 col-lg-8">
                <div class="hero-slider position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide start -->
                            <div class="hero-slide-item swiper-slide" style="background-image: url('{{asset('frontend/assets/images/slider/slider1.jpg')}}');background-repeat: no-repeat;background-size: cover;background-position: 0% center;">
                                <div class="hero-slide-content">
                                    <h2 class="title delay1 animated">Cookware Set</h2>
                                    <h2 class="title delay2 animated">New Vidre Digital</h2>
                                    <p class="text animated">
                                        When you buy a selected westinghouse
                                    </p>
                                    <p class="price animated">Only $479.95</p>
                                    <a href="shop-grid-3-column.html" class="btn animated btn-primary text-white btn-hover-warning mb-3 mb-sm-0 text-uppercase">shopping Now</a>
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide start -->
                            <div class="hero-slide-item swiper-slide slide-bg2">
                                <div class="hero-slide-content">
                                    <h2 class="title delay1 animated">New Vidre Digital</h2>
                                    <h2 class="title delay2 animated">Electric Kettle</h2>
                                    <p class="text animated">
                                        Big anti-scald handle match up to human</p>
                                    <p class="price animated">Only $479.95</p>
                                    <a href="shop-grid-3-column.html" class="btn animated btn-primary text-white btn-hover-warning mb-3 mb-sm-0 text-uppercase">shopping Now</a>
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                            <!-- swiper-slide start -->
                            <div class="hero-slide-item swiper-slide slide-bg3">
                                <div class="hero-slide-content">
                                    <h2 class="title delay1 animated">Bonus 3 Piece</h2>
                                    <h2 class="title delay2 animated">Cookware Set</h2>
                                    <p class="text animated">
                                        When you buy a selected
                                    </p>
                                    <p class="price animated">Only $479.95</p>
                                    <a href="shop-grid-3-column.html" class="btn animated btn-primary text-white btn-hover-warning mb-3 mb-sm-0 text-uppercase">shopping Now</a>
                                </div>
                            </div>
                            <!-- swiper-slide end-->
                        </div>
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- swiper navigation -->
                    <div class="swiper-button-prev">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="swiper-button-next">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-3 offset-lg-4 col-lg-8 offset-xl-0 custom-padding">
                <div class="d-flex custom-flex-column">
                    <a class="zoom-in d-block mb-7 me-sm-7 me-0" href="shop-grid-left-sidebar.html">
                        <img src="{{asset('frontend')}}/assets/images/banner/1.jpg" alt="img">
                    </a>
                    <a class="zoom-in d-block mb-7" href="shop-grid-left-sidebar.html">
                        <img src="{{asset('frontend')}}/assets/images/banner/2.jpg" alt="img">
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Hero Slider End -->

<!-- Product tab Start -->
<section class="section">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="title-section text-center text-lg-start">
                    <div class="row">
                        <!-- title section Start -->
                        <div class="col-12 col-lg-4">
                            <h3 class="title">Featured Products</h3>
                        </div>
                        <!-- title section End -->
                        <div class="col-12  col-lg-8">
                            <ul class="nav nav-pills product-tab-links mt-8 mt-lg-0 justify-content-md-center">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#baking">Baking & Pastry Mats</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#chocolate">Chocolate Moulds</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#chopping">Chopping Boards</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="baking">
                        <div class="product-carousel1">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product1.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Graphic Corner</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Scanpan Classic Covered Saute Pan 26cm</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product2.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Scanpan Classic Covered Saute Pan</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product3.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product4.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product5.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product6.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product7.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixer</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product8.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM153 Stand Mixer</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="chocolate">
                        <div class="product-carousel1">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product1.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Graphic Corner</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Scanpan Classic Covered Saute Pan 26cm</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product2.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Scanpan Classic Covered Saute Pan</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product3.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product4.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product5.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product6.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product7.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixer</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product8.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM153 Stand Mixer</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="chopping">
                        <div class="product-carousel1">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product1.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Graphic Corner</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Scanpan Classic Covered Saute Pan 26cm</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product2.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Scanpan Classic Covered Saute Pan</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product3.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product4.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product5.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product6.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product7.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixer</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:380px;">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product8.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM153 Stand Mixer</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Product tab End -->

<!-- Banner Section Start -->
<div class="banner-section section-pt">
    <div class="container">
        <div class="row mb-n7">
            <!-- banner box start -->
            <div class="col-md-4 mb-7">
                <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                    <img src="{{asset('frontend')}}/assets/images/banner/3.jpg" alt="img">
                </a>
            </div>
            <!-- banner box end -->
            <!-- banner box start -->
            <div class="col-md-4 mb-7">
                <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                    <img src="{{asset('frontend')}}/assets/images/banner/4.jpg" alt="img">
                </a>
            </div>
            <!-- banner box end -->
            <!-- banner box start -->
            <div class="col-md-4 mb-7">
                <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                    <img src="{{asset('frontend')}}/assets/images/banner/5.jpg" alt="img">
                </a>
            </div>
            <!-- banner box end -->
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Product tab Start -->
<section class="section-pt">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <ul class="nav nav-pills product-tab-links2">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#newarrival">New Arrival</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#bestseller">Best seller</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#featuredproducts">Featured Products</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="newarrival">
                <div class="row mb-n7">
                    <div class="col-lg-5 col-xl-4 mb-7">
                        <div class="product-card-large">
                            <a class="thumb" href="single-product.html"><img class="d-block mx-auto" src="{{asset('frontend')}}/assets/images/products/product-lg1.jpg" alt="img" />
                            </a>
                            <div class="product-content">
                                <a class="product-category" href="#?">Studio Design</a>
                                <h3 class="product-title">
                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                </h3>
                                <span class="price-lg onsale-price d-block mb-7">$68.30</span>
                                <button class="product-btn-lg btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                    Add to cart
                                </button>
                            </div>
                            <!-- actions links start -->
                            <ul class="actions">
                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                            </ul>
                            <!-- actions links end -->
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8 mb-7 order-first order-lg-last">
                        <div class="product-carousel2">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product1.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product2.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Graphic Corner</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM100 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product3.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product12.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product4.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product5.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product10.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product11.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product6.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product7.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product8.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                        <div class="product-card">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product12.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bestseller">
                <div class="row mb-n7">
                    <div class="col-lg-5 col-xl-4 mb-7">
                        <div class="product-card-large">
                            <a class="thumb" href="single-product.html"><img class="d-block mx-auto" src="{{asset('frontend')}}/assets/images/products/product-lg1.jpg" alt="img" />
                            </a>
                            <div class="product-content">
                                <a class="product-category" href="#?">Studio Design</a>
                                <h3 class="product-title">
                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                </h3>
                                <span class="price-lg onsale-price d-block mb-7">$68.30</span>
                                <button class="product-btn-lg btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                    Add to cart
                                </button>
                            </div>
                            <!-- actions links start -->
                            <ul class="actions">
                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                            </ul>
                            <!-- actions links end -->
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8 mb-7 order-first order-lg-last">
                        <div class="product-carousel2">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product1.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product2.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Graphic Corner</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM100 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product3.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product12.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product4.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product5.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product10.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product11.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product6.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product7.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product8.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                        <div class="product-card">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product12.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="featuredproducts">
                <div class="row mb-n7">
                    <div class="col-lg-5 col-xl-4 mb-7">
                        <div class="product-card-large">
                            <a class="thumb" href="single-product.html"><img class="d-block mx-auto" src="{{asset('frontend')}}/assets/images/products/product-lg1.jpg" alt="img" />
                            </a>
                            <div class="product-content">
                                <a class="product-category" href="#?">Studio Design</a>
                                <h3 class="product-title">
                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                </h3>
                                <span class="price-lg onsale-price d-block mb-7">$68.30</span>
                                <button class="product-btn-lg btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                    Add to cart
                                </button>
                            </div>
                            <!-- actions links start -->
                            <ul class="actions">
                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                            </ul>
                            <!-- actions links end -->
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8 mb-7 order-first order-lg-last">
                        <div class="product-carousel2">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product1.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product2.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Graphic Corner</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM100 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product3.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product12.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product4.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product5.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product10.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product11.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product6.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            <div class="product-card">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product7.jpg" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                    </h3>
                                                    <span class="price regular-price">$68.30</span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product8.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                        <div class="product-card">
                                            <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/product12.jpg" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">Studio Design</a>
                                                <h3 class="product-title">
                                                    <a href="single-product.html">KitchenAid Artisan KSM130 Stand Mixe</a>
                                                </h3>
                                                <span class="price regular-price">$68.30</span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" data-bs-toggle="modal" data-bs-target="#addtowishlist"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Product tab End -->

<!-- Banner Section Start -->
<div class="banner-section section-pt">
    <div class="container">
        <div class="row mb-n7">
            <!-- banner box start -->
            <div class="col-md-4 mb-7">
                <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                    <img src="{{asset('frontend')}}/assets/images/banner/6.jpg" alt="img">
                </a>
            </div>
            <!-- banner box end -->
            <!-- banner box start -->
            <div class="col-md-4 mb-7">
                <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                    <img src="{{asset('frontend')}}/assets/images/banner/7.jpg" alt="img">
                </a>
            </div>
            <!-- banner box end -->
            <!-- banner box start -->
            <div class="col-md-4 mb-7">
                <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                    <img src="{{asset('frontend')}}/assets/images/banner/8.jpg" alt="img">
                </a>
            </div>
            <!-- banner box end -->
        </div>
    </div>
</div>
<!-- Banner Section End -->


<!-- Product tab Start -->
<section class="section-pt">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="title-section text-center text-lg-start">
                    <div class="row">
                        <!-- title section Start -->
                        <div class="col-12 col-lg-4">
                            <h3 class="title">Ceramic Artisan</h3>
                        </div>
                        <!-- title section End -->
                        <div class="col-12 col-lg-6 custom-col1">
                            <ul class="nav nav-pills product-tab-links mt-8 mt-lg-0 justify-content-md-center">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#pots">pots</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#pans">pans</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#living">Living</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab-content">
            <div class="tab-pane fade show active" id="pots">
                <div class="row mb-n7">
                    <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                        <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                            <img src="{{asset('frontend')}}/assets/images/banner/9.jpg" alt="img">
                        </a>
                    </div>
                    <div class="col-lg-8 col-xl-9 custom-col-80 mb-7">
                        <div class="product-list-carousel">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/1.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Scanpan Classic Covered Saute Pan 26cm</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/10.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Scanpan Classic Covered Saute Pan</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/4.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/5.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1815 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/7.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/8.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pans">
                <div class="row mb-n7">
                    <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                        <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                            <img src="{{asset('frontend')}}/assets/images/banner/9.jpg" alt="img">
                        </a>
                    </div>
                    <div class="col-lg-8 col-xl-9 custom-col-80 mb-7">
                        <div class="product-list-carousel">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/1.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Scanpan Classic Covered Saute Pan 26cm</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/10.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Scanpan Classic Covered Saute Pan</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/4.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/5.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1815 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/7.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/8.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="living">
                <div class="row mb-n7">
                    <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                        <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                            <img src="{{asset('frontend')}}/assets/images/banner/9.jpg" alt="img">
                        </a>
                    </div>
                    <div class="col-lg-8 col-xl-9 custom-col-80 mb-7">
                        <div class="product-list-carousel">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/1.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Scanpan Classic Covered Saute Pan 26cm</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/10.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Scanpan Classic Covered Saute Pan</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/4.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/5.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1815 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/7.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/8.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Le Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Essteele Australis 4pc Set w/ Saucepans</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Creuset Signature Cast Iron Round...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product tab End -->


<!-- Product tab Start -->
<section class="section-pt">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="title-section text-center text-lg-start">
                    <div class="row">
                        <!-- title section Start -->
                        <div class="col-12 col-lg-4">
                            <h3 class="title">KitchenAid Artisan</h3>
                        </div>
                        <!-- title section End -->
                        <div class="col-12  col-lg-6">
                            <ul class="nav nav-pills product-tab-links mt-8 mt-lg-0 justify-content-md-center">
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#appliance">Appliances</a></li>
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="pill" href="#tea_towel">Tea Towels</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="pill" href="#kitchen_towel">kitchen Towels</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="appliance">
                <div class="row mb-n7">
                    <div class="order-last order-lg-first col-lg-4 col-xl-3 cu mb-7 custom-col-20">
                        <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                            <img src="{{asset('frontend')}}/assets/images/banner/10.jpg" alt="img">
                        </a>
                    </div>

                    <div class="col-lg-8 col-xl-9 mb-7 custom-col-80">
                        <div class="product-list-carousel2">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/7.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1815 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/8.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->

                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixer1</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/4.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/5.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tea_towel">

                <div class="row mb-n7">
                    <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                        <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                            <img src="{{asset('frontend')}}/assets/images/banner/10.jpg" alt="img">
                        </a>
                    </div>

                    <div class="col-lg-8 col-xl-9 custom-col-80 mb-7">
                        <div class="product-list-carousel2">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/7.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1815 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/8.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->

                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixer1</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/4.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/5.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="kitchen_towel">

                <div class="row mb-n7">
                    <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                        <a class="zoom-in text-center" href="shop-grid-left-sidebar.html">
                            <img src="{{asset('frontend')}}/assets/images/banner/10.jpg" alt="img">
                        </a>
                    </div>

                    <div class="col-lg-8 col-xl-9 custom-col-80 mb-7">
                        <div class="product-list-carousel2">
                            <div class="d-none d-sm-block swiper-navination-arrows">
                                <div class="swiper-button-prev">
                                    <span class="ion-android-arrow-back"></span>
                                </div>
                                <div class="swiper-button-next">
                                    <span class="ion-android-arrow-forward"></span>
                                </div>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1915 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/7.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Royal Doulton 1815 Tableware Pasta Bowl</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/8.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/6.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->

                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM160 Stand Mixer</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">KitchenAid Artisan KSM150 Stand Mixer1</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/4.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/5.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        <!-- media-list -->
                                        <div class="media-list">
                                            <div class="media">
                                                <a class="thumb" href="single-product.html"><img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">Studio Design</a>
                                                    <h3 class="product-title">
                                                        <a href="single-product.html">Leaf & Bean Electric Milk Frother &...</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">$68.30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                    </div>
                                    <!-- single slide End -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Product tab End -->



<!-- Brand Slider Satrt -->

<div class="brand-section section-py">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- single-brand Start -->
                            <div class="swiper-slide">
                                <div class="single-brand">
                                    <a class="thumb" href="#"><img src="{{asset('frontend')}}/assets/images/brand-logo/1.png" alt="brand logo"></a>
                                </div>
                            </div>
                            <!-- single-brand End -->

                            <!-- single-brand Start -->
                            <div class="swiper-slide">
                                <div class="single-brand">
                                    <a class="thumb" href="#"><img src="{{asset('frontend')}}/assets/images/brand-logo/2.png" alt="brand logo"></a>
                                </div>
                            </div>
                            <!-- single-brand End -->

                            <!-- single-brand Start -->
                            <div class="swiper-slide">
                                <div class="single-brand">
                                    <a class="thumb" href="#"><img src="{{asset('frontend')}}/assets/images/brand-logo/3.png" alt="brand logo"></a>
                                </div>
                            </div>
                            <!-- single-brand End -->

                            <!-- single-brand Start -->
                            <div class="swiper-slide">
                                <div class="single-brand">
                                    <a class="thumb" href="#"><img src="{{asset('frontend')}}/assets/images/brand-logo/4.png" alt="brand logo"></a>
                                </div>
                            </div>
                            <!-- single-brand End -->
                            <!-- single-brand Start -->
                            <div class="swiper-slide">
                                <div class="single-brand">
                                    <a class="thumb" href="#"><img src="{{asset('frontend')}}/assets/images/brand-logo/5.png" alt="brand logo"></a>
                                </div>
                            </div>
                            <!-- single-brand End -->
                            <!-- single-brand Start -->
                            <div class="swiper-slide">
                                <div class="single-brand">
                                    <a class="thumb" href="#"><img src="{{asset('frontend')}}/assets/images/brand-logo/6.png" alt="brand logo"></a>
                                </div>
                            </div>
                            <!-- single-brand End -->
                            <!-- single-brand Start -->
                            <div class="swiper-slide">
                                <div class="single-brand">
                                    <a class="thumb" href="#"><img src="{{asset('frontend')}}/assets/images/brand-logo/7.png" alt="brand logo"></a>
                                </div>
                            </div>
                            <!-- single-brand End -->
                            <!-- single-brand Start -->
                            <div class="swiper-slide">
                                <div class="single-brand">
                                    <a class="thumb" href="#"><img src="{{asset('frontend')}}/assets/images/brand-logo/4.png" alt="brand logo"></a>
                                </div>
                            </div>
                            <!-- single-brand End -->
                        </div>
                    </div>
                    <div class="swiper-pagination d-none"></div>
                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brand Slider End -->

<!-- Blog Section Start-->
<section class="blog-section section-py bg-light">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="title-section">
                    <div class="row">
                        <!-- title section Start -->
                        <div class="col-12">
                            <h3 class="title">Latest Blogs</h3>
                        </div>
                        <!-- title section End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-carousel">
                    <div class="d-none d-sm-block swiper-navination-arrows">
                        <div class="swiper-button-prev">
                            <span class="ion-android-arrow-back"></span>
                        </div>
                        <div class="swiper-button-next">
                            <span class="ion-android-arrow-forward"></span>
                        </div>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- single-blog Start -->
                            <div class="swiper-slide">
                                <div class="blog-card">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend')}}/assets/images/blog/1.jpg" alt="img" />
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="title">
                                            <a href="blog-details.html">Top 5 Insanely Popular (& Affordable) Bluetooth1</a>
                                        </h3>
                                        <a href="#"><span class="blog-meta">Jan 10, 2022</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-blog End -->
                            <!-- single-blog Start -->
                            <div class="swiper-slide">
                                <div class="blog-card">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend')}}/assets/images/blog/2.jpg" alt="img" />
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="title">
                                            <a href="blog-details.html">8 Insanely Popular Must-Haves for the Traveller</a>
                                        </h3>
                                        <a href="#"><span class="blog-meta">Jan 10, 2022</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-blog End -->
                            <!-- single-blog Start -->
                            <div class="swiper-slide">
                                <div class="blog-card">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend')}}/assets/images/blog/3.jpg" alt="img" />
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="title">
                                            <a href="blog-details.html">Last 6 months have been phenomenal for me</a>
                                        </h3>
                                        <a href="#"><span class="blog-meta">Jan 10, 2022</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-blog End -->
                            <!-- single-blog Start -->
                            <div class="swiper-slide">
                                <div class="blog-card">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend')}}/assets/images/blog/4.jpg" alt="img" />
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="title">
                                            <a href="blog-details.html">A candid face-time session with the.</a>
                                        </h3>
                                        <a href="#"><span class="blog-meta">Jan 10, 2022</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-blog End -->
                            <!-- single-blog Start -->
                            <div class="swiper-slide">
                                <div class="blog-card">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend')}}/assets/images/blog/5.jpg" alt="img" />
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="title">
                                            <a href="blog-details.html">Top 5 Incredibly Popular (& Affordable) Massagers</a>
                                        </h3>
                                        <a href="#"><span class="blog-meta">Jan 10, 2022</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-blog End -->
                            <!-- single-blog Start -->
                            <div class="swiper-slide">
                                <div class="blog-card">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend')}}/assets/images/blog/6.jpg" alt="img" />
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="title">
                                            <a href="blog-details.html">7 Insanely Popular Must-Have Massagers</a>
                                        </h3>
                                        <a href="#"><span class="blog-meta">Jan 10, 2022</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-blog End -->
                            <!-- single-blog Start -->
                            <div class="swiper-slide">
                                <div class="blog-card">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset('frontend')}}/assets/images/blog/1.jpg" alt="img" />
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="title">
                                            <a href="blog-details.html">Top 5 Insanely Popular (& Affordable) Bluetooth</a>
                                        </h3>
                                        <a href="#"><span class="blog-meta">Jan 10, 2022</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-blog End -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Blog Section End-->

<!-- News letter Section Start -->
<section class="section-py bg-primary">
    <div class="container">
        <div class="row align-items-center mb-n7">
            <div class="col-xl-3 col-lg-5 col-md-6 mb-7 order-first">
                <div class="text-center text-md-start">
                    <h3 class="news-title">Sign Up For Newsletters</h3>
                    <p class="text">Be the First to Know. Sign up for newsletter today</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4 mb-7 order-last order-lg-0">
                <form id="mc-form" action="#">
                    <div class="input-group">
                        <input id="mc-email" type="email" class="form-control border-0" required="" placeholder="Enter your email address" />
                        <div class="input-group-text">
                            <button class="btn-search btn btn-hover-dark" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 mb-7">
                <ul class="social d-flex flex-wrap align-items-center justify-content-center justify-content-md-end">
                    <li class="social-link-item"><a class="social-link" href="{{$profile->facebook}}" target="_blank"><span class="ion-social-facebook"></span></a></li>
                    <li class="social-link-item"><a class="social-link" href="{{$profile->instagram}}" target="_blank"><span class="ion-social-instagram"></span></a></li>
                    <li class="social-link-item"><a class="social-link" href="{{$profile->linkedin}}" target="_blank"><span class="ion-social-linkedin"></span></a></li>
                    <li class="social-link-item"><a class="social-link" href="{{$profile->twitter}}" target="_blank"><span class="ion-social-twitter"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- News letter Section End -->


<!-- Modals -->
<!-- quick view modal -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="quickview" tabindex="-1" aria-labelledby="quickview">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body my-6">
                <div class="row mb-n10">
                    <div class="col-xl-6 col-lg-6 mb-10">
                        <div class="product-detail_img vertical-slider_wrap">
                            <div class="swiper-container pd-vertical_slider lightgallery">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-img">
                                            <img src="{{asset('frontend')}}/assets/images/products/product2.jpg" alt="Product Image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-img">
                                            <img src="{{asset('frontend')}}/assets/images/products/product3.jpg" alt="Product Image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-img">
                                            <img src="{{asset('frontend')}}/assets/images/products/product4.jpg" alt="Product Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vertical-slider_nav">
                                <div class="swiper-navination-vertical d-none d-md-inline-block">
                                    <div class="swiper-button-prev">
                                        <span class="lnr lnr-chevron-up"></span>
                                    </div>
                                    <div class="swiper-button-next">
                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#?">
                                            <img src="{{asset('frontend')}}/assets/images/products/small/2.jpg" alt="Product Thumnail" /></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#?">
                                            <img src="{{asset('frontend')}}/assets/images/products/small/3.jpg" alt="Product Thumnail" /></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#?"><img src="{{asset('frontend')}}/assets/images/products/small/4.jpg" alt="Product Thumnail" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-10">
                        <div class="content">
                            <h3 class="title">Leaf & Bean Electric Milk Frother & Warmer</h3>
                            <span class="price-lg regular-price mb-2 d-block">$83.90</span>
                            <p>
                                The Crown Summit Backpack is equally at home in a gym locker, study cube
                                or a pup tent, so be sure yours is packed with books, a bag lunch, water
                                bottles, yoga block, laptop, or whatever else you want in hand. Rugged
                                enough for day hikes and camping trips, it has two large zippered
                                compartments and padded, adjustable shoulder straps.
                            </p>
                            <h4 class="modal-quantity">Quantity</h4>
                            <div class="product-count style d-flex my-4">
                                <div class="count d-flex">
                                    <input type="number" min="1" max="100" step="1" value="1" />
                                    <div class="button-group">
                                        <button class="count-btn increment">
                                            <span class="lnr lnr-chevron-up"></span>
                                        </button>
                                        <button class="count-btn decrement">
                                            <span class="lnr lnr-chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-hover-warning text-uppercase">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-hover-warning text-uppercase">Add to my wishlist</button>
            </div>
        </div>
    </div>
</div>

<!-- add to wishlist -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addtowishlist" tabindex="-1" aria-labelledby="addtowishlist">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="wishlist-modal">
                    <p>You must be logged in to manage your wishlist.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- adto cart -->
<!-- Modal -->
<div class="modal fade" id="add-to-cart" tabindex="-1" aria-labelledby="add-to-cart">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning border-bottom-0 justify-content-center">
                <span class="ion-android-done me-5"></span>
                <h4 class="modal-title text-center">Product successfully added to your shopping cart</h4>
                <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body p-5">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="product-image" src="{{asset('frontend')}}/assets/images/products/product4.jpg" alt="img" />
                            </div>
                            <div class="col-md-6">
                                <h6 class="product-name">Leaf & Bean Electric Milk Frother & Warmets</h6>
                                <ul class="quntity-list">
                                    <li>$83.90</li>
                                    <li>Quantity:2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cart-content">
                            <p class="title">There are 3 items in your cart.</p>
                            <p><span>Total products:</span> $218.70</p>
                            <p><span>Total shipping:</span>Free</p>
                            <p><span>Taxes:</span> $0.00</p>
                            <p><span>Total:</span> $218.70 (tax excl.)</p>
                            <div class="cart-content-btn">
                                <button class="btn btn-dark btn-hover-warning text-uppercase me-1" data-bs-dismiss="modal" aria-label="Close">Continue shopping</button>
                                <button class="btn btn-dark btn-hover-warning text-uppercase mt-3 mt-sm-0">Proceed to checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection