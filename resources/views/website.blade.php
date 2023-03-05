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
                        <!-- <li class="menu-item">
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
                            </ul>
                        </li> -->
                        @foreach($categories as $item)
                        <li class="menu-item"><a href="#">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                    <!-- menu content -->
                </div>

            </div>
            <div class="col-xl-6 col-lg-8">
                <div class="hero-slider position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- swiper-slide start -->
                            @foreach($slider as $item)
                            @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'Wholesale')
                            @if($item->using_by == 'wholesale')
                            <div class="hero-slide-item swiper-slide" style="background-image: url('{{asset($item->image != null ? $item->image : 'noImage.jpg')}}');background-repeat: no-repeat;background-size: cover;background-position: 0% center;">
                                <div class="hero-slide-content">
                                    <h2 class="title delay2 animated">{{$item->title}}</h2>
                                    <p class="text animated">When you buy a selected westinghouse</p>
                                    <a href="#" class="btn animated btn-primary text-white btn-hover-warning mb-3 mb-sm-0 text-uppercase">shopping Now</a>
                                </div>
                            </div>
                            @endif
                            @else
                            @if($item->using_by == 'retail')
                            <div class="hero-slide-item swiper-slide" style="background-image: url('{{asset($item->image != null ? $item->image : 'noImage.jpg')}}');background-repeat: no-repeat;background-size: cover;background-position: 0% center;">
                                <div class="hero-slide-content">
                                    <h2 class="title delay2 animated">{{$item->title}}</h2>
                                    <p class="text animated">{!! $item->description !!}</p>
                                    <a href="#" class="btn animated btn-primary text-white btn-hover-warning mb-3 mb-sm-0 text-uppercase">shopping Now</a>
                                </div>
                            </div>
                            @endif
                            @endif
                            @endforeach
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
        </div>
    </div>
</section>
<!-- Hero Slider End -->

<!-- Feature Product tab Start -->
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
                                    @foreach($feature_product as $item)
                                    <div class="swiper-slide">
                                        <div class="product-card" style="height:350px;">
                                            <a class="thumb" href="{{route('single.product', $item->slug)}}"><img src="{{asset($item->image != null ? $item->image : 'no-product-image.jpg')}}" alt="img" />
                                                <div class="onsales-badges">
                                                    <span class="badge bg-dark">new</span>
                                                </div>
                                            </a>
                                            <div class="product-content">
                                                <a class="product-category" href="#?">{{$item->category_name}}</a>
                                                <h3 class="product-title">
                                                    <a href="{{route('single.product', $item->slug)}}">{{$item->name}}</a>
                                                </h3>
                                                <span class="price regular-price">
                                                    @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'Wholesale')
                                                    ৳ {{$item->wholesale_rate}}
                                                    @else
                                                    ৳ {{$item->selling_rate}}
                                                    @endif
                                                </span>
                                                <button class="product-btn btn btn-primary btn-hover-warning" onclick="addCart({{$item->id}})">
                                                    Add to Cart
                                                </button>
                                            </div>
                                            <!-- actions links start -->
                                            <ul class="actions">
                                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                <li class="action-item"><button class="action wishlist" onclick="addWishlist({{$item->id}})"><span class="lnr lnr-heart"></span></button></li>
                                            </ul>
                                            <!-- actions links end -->
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- single slide End -->
                                </div>
                            </div>
                            @if(count($feature_product) == 0)
                            <div class="text-center">
                                <img src="{{asset('no-product.png')}}" width="300">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Feature Product tab End -->

<!-- Technician tab Start -->
<section class="section  section-py">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="title-section text-center text-lg-start">
                    <div class="row">
                        <!-- title section Start -->
                        <div class="col-12 col-lg-4">
                            <h3 class="title">Recent Technician</h3>
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
                                    @if(Auth::guard('web')->check())
                                    @foreach($technician as $item)
                                    @if(Auth::guard('web')->user()->district_id == $item->district_id)
                                        <div class="swiper-slide">
                                            <div class="product-card" style="position:relative;height:200px;border: 1px solid #cdcdcd;">
                                                @if($item->status == 'v')
                                                <span style="position: absolute;right:0;top:0;background: green;color: white;padding: 0px 5px;border-bottom-left-radius: 10px;">{{$item->status == 'v' ? 'Verified' : ''}}</span>
                                                @endif
                                                <a class="thumb text-center" href=""><img style="width: 100px;border:1px solid #e5e5e5;padding:2px;" src="{{asset($item->image != null ? $item->image : 'nouser.png')}}" alt="img" /></a>
                                                <div class="product-content text-center">
                                                    <h3 class="product-title mt-3">
                                                        <a href="">{{$item->name}}</a>
                                                    </h3>
                                                    <span>Location: {{$item->upazila->name}}, {{$item->district->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach
                                    @foreach($technician as $item)
                                    @if(Auth::guard('web')->user()->district_id != $item->district_id)
                                        <div class="swiper-slide">
                                            <div class="product-card" style="position:relative;height:200px;border: 1px solid #cdcdcd;">
                                                @if($item->status == 'v')
                                                <span style="position: absolute;right:0;top:0;background: green;color: white;padding: 0px 5px;border-bottom-left-radius: 10px;">{{$item->status == 'v' ? 'Verified' : ''}}</span>
                                                @endif
                                                <a class="thumb text-center" href=""><img style="width: 100px;border:1px solid #e5e5e5;padding:2px;" src="{{asset($item->image != null ? $item->image : 'nouser.png')}}" alt="img" /></a>
                                                <div class="product-content text-center">
                                                    <h3 class="product-title mt-3">
                                                        <a href="">{{$item->name}}</a>
                                                    </h3>
                                                    <span>Location: {{$item->upazila->name}}, {{$item->district->name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach
                                    @else
                                        @foreach($technician as $item)
                                            <div class="swiper-slide">
                                                <div class="product-card" style="position:relative;height:200px;border: 1px solid #cdcdcd;">
                                                    @if($item->status == 'v')
                                                    <span style="position: absolute;right:0;top:0;background: green;color: white;padding: 0px 5px;border-bottom-left-radius: 10px;">{{$item->status == 'v' ? 'Verified' : ''}}</span>
                                                    @endif
                                                    <a class="thumb text-center" href=""><img style="width: 100px;border:1px solid #e5e5e5;padding:2px;" src="{{asset($item->image != null ? $item->image : 'nouser.png')}}" alt="img" /></a>
                                                    <div class="product-content text-center">
                                                        <h3 class="product-title mt-3">
                                                            <a href="">{{$item->name}}</a>
                                                        </h3>
                                                        <span>Location: {{$item->upazila->name}}, {{$item->district->name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <!-- single slide End -->
                                </div>
                            </div>
                            @if(count($technician) == 0)
                            <div class="text-center">
                                <img src="{{asset('no-product.png')}}" width="300">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Technician tab End -->

<!-- Banner Section Start -->
@php
$bann = array_chunk($banner, 3);
@endphp

@if(isset($bann[0]))
<div class="banner-section section-py">
    <div class="container">
        <div class="row mb-n7">
            @foreach($bann[0] as $item)
            <!-- banner box start -->
            <div class="col-md-4 mb-7">
                <a class="zoom-in text-center" href="shop-grid-left-sidebar.html" title="{{$item->title}}">
                    <img src="{{asset($item->image != null ? $item->image : 'no-image.jpg')}}" alt="img">
                </a>
            </div>
            <!-- banner box end -->
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- Banner Section End -->

<!-- Product tab Start -->
<section class="section-py">
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
                @if(count($newarrival_product) != 0)
                <div class="row mb-n7">
                    <div class="col-lg-5 col-xl-4 mb-7">
                        <div class="product-card-large">
                            <a class="thumb" href="{{route('single.product', $newarrival_product[0]->slug)}}"><img class="d-block mx-auto" src="{{asset($newarrival_product[0]->image != null ? $newarrival_product[0]->image : 'no-product-image.jpg')}}" alt="img" />
                            </a>
                            <div class="product-content">
                                <a class="product-category" href="#?">{{$newarrival_product[0]->category_name}}</a>
                                <h3 class="product-title">
                                    <a href="{{route('single.product', $newarrival_product[0]->slug)}}">{{$newarrival_product[0]->name}}</a>
                                </h3>
                                <span class="price-lg onsale-price d-block mb-7">
                                    @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'Wholesale')
                                    ৳ {{$newarrival_product[0]->wholesale_rate}}
                                    @else
                                    ৳ {{$newarrival_product[0]->selling_rate}}
                                    @endif
                                </span>
                                <button class="product-btn-lg btn btn-primary btn-hover-warning" onclick="addCart({{$newarrival_product[0]->id}})">
                                    Add to cart
                                </button>
                            </div>
                            <!-- actions links start -->
                            <ul class="actions">
                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                <li class="action-item"><button class="action wishlist" onclick="addWishlist({{$newarrival_product[0]->id}})"><span class="lnr lnr-heart"></span></button></li>
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
                                    @foreach(array_chunk($newarrival_product, 2) as $newarrival)
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            @foreach($newarrival as $item)
                                            <div class="product-card">
                                                <a class="thumb" href="{{route('single.product', $item->slug)}}"><img src="{{asset($item->image != null ? $item->image : 'no-product-image.jpg')}}" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">{{$item->category_name}}</a>
                                                    <h3 class="product-title">
                                                        <a href="{{route('single.product', $item->slug)}}">{{$item->name}}</a>
                                                    </h3>
                                                    <span class="price regular-price">
                                                        @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'Wholesale')
                                                        ৳ {{$item->wholesale_rate}}
                                                        @else
                                                        ৳ {{$item->selling_rate}}
                                                        @endif
                                                    </span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" onclick="addCart({{$item->id}})">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" onclick="addWishlist({{$item->id}})"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- single slide End -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @else
                <div class="text-center">
                    <img src="{{asset('no-product.png')}}" width="300">
                </div>
                @endif
            </div>

            <div class="tab-pane fade" id="bestseller">
                @if(count($topsold_product) != 0)
                <div class="row mb-n7">
                    <div class="col-lg-5 col-xl-4 mb-7">
                        <div class="product-card-large">
                            <a class="thumb" href="{{route('single.product', $topsold_product[0]->slug)}}"><img class="d-block mx-auto" src="{{asset($topsold_product[0]->image != null ? $topsold_product[0]->image : 'no-product-image.jpg')}}" alt="img" />
                            </a>
                            <div class="product-content">
                                <a class="product-category" href="#?">{{$topsold_product[0]->category_name}}</a>
                                <h3 class="product-title">
                                    <a href="{{route('single.product', $topsold_product[0]->slug)}}">{{$topsold_product[0]->name}}</a>
                                </h3>
                                <span class="price-lg onsale-price d-block mb-7">
                                    @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'Wholesale')
                                    ৳ {{$topsold_product[0]->wholesale_rate}}
                                    @else
                                    ৳ {{$topsold_product[0]->selling_rate}}
                                    @endif
                                </span>
                                <button class="product-btn-lg btn btn-primary btn-hover-warning" onclick="addCart({{$topsold_product[0]->id}})">
                                    Add to cart
                                </button>
                            </div>
                            <!-- actions links start -->
                            <ul class="actions">
                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                <li class="action-item"><button class="action wishlist" onclick="addWishlist({{$topsold_product[0]->id}})"><span class="lnr lnr-heart"></span></button></li>
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
                                    @foreach(array_chunk($topsold_product, 2) as $topsold)
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            @foreach($topsold as $item)
                                            <div class="product-card">
                                                <a class="thumb" href="{{route('single.product', $item->slug)}}"><img src="{{asset($item->image != null ? $item->image : 'no-product-image.jpg')}}" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">{{$item->category_name}}</a>
                                                    <h3 class="product-title">
                                                        <a href="{{route('single.product', $item->slug)}}">{{$item->name}}</a>
                                                    </h3>
                                                    <span class="price regular-price">
                                                        @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'Wholesale')
                                                        ৳ {{$item->wholesale_rate}}
                                                        @else
                                                        ৳ {{$item->selling_rate}}
                                                        @endif
                                                    </span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" onclick="addCart({{$item->id}})">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" onclick="addWishlist({{$item->id}})"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="text-center">
                    <img src="{{asset('no-product.png')}}" width="300">
                </div>
                @endif
            </div>
            <div class="tab-pane fade" id="featuredproducts">
                @if(count($feature_product) != 0)
                <div class="row mb-n7">
                    <div class="col-lg-5 col-xl-4 mb-7">
                        <div class="product-card-large">
                            <a class="thumb" href="{{route('single.product', $feature_product[0]->slug)}}"><img class="d-block mx-auto" src="{{asset($feature_product[0]->image != null ? $feature_product[0]->image : 'no-product-image.jpg')}}" alt="img" />
                            </a>
                            <div class="product-content">
                                <a class="product-category" href="#?">{{$feature_product[0]->category_name}}</a>
                                <h3 class="product-title">
                                    <a href="{{route('single.product', $feature_product[0]->slug)}}">{{$feature_product[0]->name}}</a>
                                </h3>
                                <span class="price-lg onsale-price d-block mb-7">
                                    @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'Wholesale')
                                    ৳ {{$feature_product[0]->wholesale_rate}}
                                    @else
                                    ৳ {{$feature_product[0]->selling_rate}}
                                    @endif
                                </span>
                                <button class="product-btn-lg btn btn-primary btn-hover-warning" onclick="addCart({{$feature_product[0]->id}})">
                                    Add to cart
                                </button>
                            </div>
                            <!-- actions links start -->
                            <ul class="actions">
                                <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                <li class="action-item"><button class="action wishlist" onclick="addWishlist({{$feature_product[0]->id}})"><span class="lnr lnr-heart"></span></button></li>
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
                                    @foreach(array_chunk($feature_product, 2) as $feature)
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        <div class="product-list">
                                            @foreach($feature as $item)
                                            <div class="product-card">
                                                <a class="thumb" href="{{route('single.product', $item->slug)}}"><img src="{{asset($item->image != null ? $item->image : 'no-product-image.jpg')}}" alt="img" />
                                                    <div class="onsales-badges">
                                                        <span class="badge bg-dark">new</span>
                                                    </div>
                                                </a>
                                                <div class="product-content">
                                                    <a class="product-category" href="#?">{{$item->category_name}}</a>
                                                    <h3 class="product-title">
                                                        <a href="{{route('single.product', $item->slug)}}">{{$item->name}}</a>
                                                    </h3>
                                                    <span class="price regular-price">
                                                        @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'Wholesale')
                                                        ৳ {{$item->wholesale_rate}}
                                                        @else
                                                        ৳ {{$item->selling_rate}}
                                                        @endif
                                                    </span>
                                                    <button class="product-btn btn btn-primary btn-hover-warning" onclick="addCart({{$item->id}})">
                                                        Add to cart
                                                    </button>
                                                </div>
                                                <!-- actions links start -->
                                                <ul class="actions">
                                                    <li class="action-item"><button class="action quick-view" data-bs-toggle="modal" data-bs-target="#quickview"><span class="lnr lnr-magnifier"></span></button></li>
                                                    <li class="action-item"><button class="action wishlist" onclick="addWishlist({{$item->id}})"><span class="lnr lnr-heart"></span></button></li>
                                                </ul>
                                                <!-- actions links end -->
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- single slide End -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="text-center">
                    <img src="{{asset('no-product.png')}}" width="300">
                </div>
                @endif
            </div>
        </div>

    </div>
</section>
<!-- Product tab End -->

<!-- Banner Section Start -->
@if(isset($bann[1]))
<div class="banner-section section-py">
    <div class="container">
        <div class="row mb-n7">
            @foreach($bann[1] as $item)
            <!-- banner box start -->
            <div class="col-md-4 mb-7">
                <a class="zoom-in text-center" href="shop-grid-left-sidebar.html" title="{{$item->title}}">
                    <img src="{{asset($item->image != null ? $item->image : 'no-image.jpg')}}" alt="img">
                </a>
            </div>
            <!-- banner box end -->
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- Banner Section End -->

@foreach($isWebsiteCategoryProduct->take(3) as $category)
<!-- Product tab Start -->
<section class="section-py">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="title-section text-center text-lg-start">
                    <div class="row">
                        <!-- title section Start -->
                        <div class="col-12 col-lg-4">
                            <h3 class="title">{{$category->name}}</h3>
                        </div>
                        <!-- title section End -->
                        @if($category->subcategory->count() > 0)
                        <div class="col-12 col-lg-6 custom-col1">
                            <ul class="nav nav-pills product-tab-links mt-8 mt-lg-0 justify-content-md-center">
                                @foreach($category->subcategory as $key => $subcat)
                                <li class="nav-item"><a class="nav-link {{$key == 0 ? 'active':''}}" data-bs-toggle="pill" href="#{{$subcat->name}}">{{$subcat->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content">
            @if($category->subcategory->count() > 0)
            @foreach($category->subcategory as $key => $subcat)
            <div class="tab-pane fade {{$key == 0 ? 'show active':''}}" id="{{$subcat->name}}">
                <div class="row mb-n7">
                    <div class="order-last order-lg-first col-lg-4 col-xl-3 custom-col-20 mb-7">
                        <a class="zoom-in text-center" href="#">
                            <img src="{{asset($category->image != null ? $category->image : 'noImage.jpg')}}" alt="img">
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
                                    @if(count($subcat->product) > 0)
                                    @foreach($subcat->product->chunk(2) as $prod)
                                    <!-- single slide Start -->
                                    <div class="swiper-slide">
                                        @foreach($prod as $item)
                                        <!-- media-list -->
                                        <div class="media-list mb-4">
                                            <div class="media">
                                                <a class="thumb" href="{{route('single.product', $item->slug)}}"><img style="width:105px; height:105px;" src="{{asset($item->image != null ? $item->image : 'noImage.jpg')}}" alt="img" />
                                                </a>
                                                <div class="media-body">
                                                    <a class="product-category" href="#?">{{$category->name}}</a>
                                                    <h3 class="product-title">
                                                        <a href="{{route('single.product', $item->slug)}}">{{$item->name}}</a>
                                                    </h3>
                                                    <span class="price-lg regular-price">
                                                        @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'Wholesale')
                                                            ৳ {{$item->wholesale_rate}}
                                                        @else
                                                            ৳ {{$item->selling_rate}}
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- media-list end -->
                                        @endforeach
                                    </div>
                                    <!-- single slide End -->
                                    @endforeach
                                    @endif
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
<!-- Product tab End -->
@endforeach



<!-- Brand Slider Satrt -->

<div class="brand-section section-py">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- single-brand Start -->
                            @foreach($brand as $item)
                            <div class="swiper-slide">
                                <div class="single-brand">
                                    <a class="thumb" href="#"><img src="{{asset($item->image != null ? $item->image : 'noImage.jpg')}}" alt="brand logo"></a>
                                </div>
                            </div>
                            @endforeach
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
<section class="blog-section section-py">
    <div class="container">
        <div class="row g-0">
            <div class="col-12">
                <div class="title-section">
                    <div class="row">
                        <!-- title section Start -->
                        <div class="col-12">
                            <h3 class="title">News & Events</h3>
                        </div>
                        <!-- title section End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if($blog->count() > 0)
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
                            @foreach($blog as $item)
                            <!-- single-blog Start -->
                            <div class="swiper-slide">
                                <div class="blog-card">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="{{asset($item->image != null ? $item->image : 'noImage.jpg')}}" alt="img" />
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="title">
                                            <a href="blog-details.html">{{$item->title}}</a>
                                        </h3>
                                        <a href="#"><span class="blog-meta">{{date("M d, Y", strtotime($item->date))}}</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single-blog End -->
                            @endforeach
                        </div>
                    </div>
                </div>
                @else
                <div class="text-center">Not Found Data</div>
                @endif

            </div>
        </div>
    </div>
</section>
<!-- Blog Section End-->
@endsection