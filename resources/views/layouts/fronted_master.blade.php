<!DOCTYPE html>
<html lang="en">

<head>
    @php
    $setting = App\Models\Setting::first();
    @endphp
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$setting->company_name}}@yield("title")</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/images/logo-text.png')}}" />
    @include("layouts.frontend.style")

    <style>
        .ImageBackground .imageShow {
            display: block;
            height: 120px;
            width: 100%;
            margin-top: 10px;
            border: 1px solid #042ab5;
            border-bottom: 0;
            box-sizing: border-box;
        }

        .ImageBackground input {
            display: none;
        }

        .ImageBackground label {
            background: #042ab5;
            width: 100%;
            color: white;
            padding: 5px;
            text-align: center;
            cursor: pointer;
            font-family: monospace;
            text-transform: uppercase;
        }

        .page-link.disabled,
        .disabled>.page-link {
            color: gray !important;
        }

        .page-item.active .page-link {
            color: #ffffff !important;
            background: #223b97 !important;
            border: none !important;
        }

        .page-link:hover {
            background: #2b46a8 !important;
            border: 1px solid #2b46a8 !important;
        }
    </style>

</head>

<body>
    <!-- Modal -->
    <div class="modal fade offcanvas-modal" id="exampleModal">
        <div class="modal-dialog offcanvas-dialog">
            <div class="modal-content">
                <div class="modal-header offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="#" class="offcanvas-form">
                    <div class="input-group border">
                        <div class="input-group-text">
                            <select class="form-select d-none d-xl-block" aria-label="Default select example">
                                <option selected="">All categories</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <input type="text" class="form-control border-0" placeholder="Enter your search key ... " />
                        <div class="input-group-text">
                            <button class="btn btn-primary btn-hover-warning" type="submit">
                                Search
                            </button>
                        </div>
                    </div>
                </form>

                <!-- offcanvas-mobile-menu start -->

                <nav id="offcanvasNav" class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="{{route('website')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('product')}}">Shop</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Technician</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Blog</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>

                    <div class="offcanvas-social">
                        <ul>
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-google"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- offcanvas-mobile-menu end -->
                <div class="header-top">
                    <p>
                        Email:
                        <a class="header-top-link" href="https://www.gmail.com">{{$profile->email}}</a>
                    </p>
                    <p>Free Shipping for all Order of $99</p>

                    <ul id="offcanvas-menu2" class="blog-ctry-menu blog-ctry-menu2">
                        @if(Auth::check())
                        <li>
                            <a href="javascript:void(0)">My Account</a>
                            <ul class="category-sub-menu">
                                <li>
                                    <a href="account.html">account</a>
                                </li>
                                <li>
                                    <a href="login.html">Sign in</a>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li>
                            <a href="{{route('showSignUpForm')}}">Sign In</a>
                        </li>

                        @endif
                        <li>
                            <a href="javascript:void(0)"><img class="me-1" src="{{asset('frontend')}}/assets/images/flag/1.jpg" alt="img" />English</a>
                            <ul class="category-sub-menu">
                                <li>
                                    <a href="#"><img src="{{asset('frontend')}}/assets/images/flag/1.jpg" alt="flags" />language:
                                        English</a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend')}}/assets/images/flag/2.jpg" alt="flags" />
                                        Français</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header  Start -->
    @include("layouts.frontend.navbar")
    <!-- Header  End -->
    <main>
        @yield("content")
    </main>


    <footer class="footer-section" style="background:#ffda93">
        <div class="footer-top position-relative">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="border-bottom section-py">
                            <div class="row mb-n7">
                                <div class="col-lg-4 col-sm-6 mb-7">
                                    <div class="footer-widget">
                                        <a class="footer-logo mb-8" href="index.html">
                                            <img src="{{asset('backend/assets/images/logo-text.png')}}" alt="footer-logo" />
                                        </a>
                                        <p>
                                            We are a team of designers and developers that create high quality
                                            Magento, Prestashop, Opencart.
                                        </p>
                                        <ul class="adress">
                                            <li><span class="text-dark fw-500">Address:</span> {{$profile->address}}</li>
                                            <li><span class="text-dark fw-500">Email:</span> <a href="mailto:support@hasthemes.com">{{$profile->email}}</a></li>
                                            <li><span class="text-dark fw-500">Call us:</span><a href="tel:110012345678"><span class="phone-call">{{$profile->mobile}}</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-7">
                                    <div class="footer-widget">
                                        <h4 class="title">Products</h4>
                                        <ul class="footer-menu">
                                            <li><a class="footer-link" href="#">Prices drop</a></li>
                                            <li><a class="footer-link" href="#">New products</a></li>
                                            <li><a class="footer-link" href="#">Best sales</a></li>
                                            <li><a class="footer-link" href="#">Blog Post</a></li>
                                            <li><a class="footer-link" href="#">Contact us</a></li>
                                            <li><a class="footer-link" href="#">Sitemap</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-7">
                                    <div class="footer-widget">
                                        <h4 class="title">Our company</h4>
                                        <ul class="footer-menu">
                                            <li><a class="footer-link" href="#">Delivery</a></li>
                                            <li><a class="footer-link" href="#">Legal Notice</a></li>
                                            <li><a class="footer-link" href="#">About us</a></li>
                                            <li><a class="footer-link" href="#">Secure payment</a></li>
                                            <li><a class="footer-link" href="#">Prices drop</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 mb-7">
                                    <div class="footer-widget">
                                        <h4 class="title">Your account</h4>
                                        <ul class="footer-menu">
                                            <li><a class="footer-link" href="#">Personal info</a></li>
                                            <li><a class="footer-link" href="#">Orders</a></li>
                                            <li><a class="footer-link" href="#">Credit slips</a></li>
                                            <li><a class="footer-link" href="#">Addresses</a></li>
                                            <li><a class="footer-link" href="#">My wishlists</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- coppy right satrt -->
        <div class="copy-right-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright-info text-center text-md-start">
                            <p>
                                Copyright &copy; {{date("Y")}}
                                <a href="https://linktechbd.com/">Linkup Technology</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end mb-3 mb-md-0">
                        <img src="{{asset('frontend')}}/assets/images/payment.png" alt="images">
                    </div>
                </div>
            </div>
        </div>
        <!-- coppy right end -->
    </footer>

    @include("layouts.frontend.script")


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

</body>

</html>