<!DOCTYPE html>
<html lang="en">

<head>
    @php
    $setting = App\Models\Setting::first();
    @endphp
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$setting->company_name}}@yield("title")</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/images/logo-text.png')}}" />
    @include("layouts.frontend.style")

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
                            <button class="btn-search btn btn-hover-primary" type="submit">
                                Search
                            </button>
                        </div>
                    </div>
                </form>

                <!-- offcanvas-mobile-menu start -->

                <nav id="offcanvasNav" class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">Home</a>
                            <!-- home sub menu -->
                            <ul>
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                                <li><a href="index-3.html">Home 3</a></li>
                                <li><a href="index-4.html">Home 4</a></li>
                            </ul>
                            <!-- home sub menu end-->
                        </li>
                        <li>
                            <a href="javascript:void(0)">shop</a>

                            <!-- shop mega menu -->

                            <ul>
                                <li>
                                    <a href="#">Shop Grid</a>
                                    <ul>
                                        <li>
                                            <a href="shop-grid-5-column.html">Shop Grid 5 Column</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-6-column.html">Shop Grid 6 Column</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop List</a>
                                    <ul>
                                        <li><a href="shop-grid-list.html">Shop List</a></li>
                                        <li>
                                            <a href="shop-grid-list-left-sidebar.html">Shop List Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-grid-list-right-sidebar.html">Shop List Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop Single</a>
                                    <ul>
                                        <li><a href="single-product.html">Shop Single</a></li>
                                        <li>
                                            <a href="single-product-configurable.html">Shop Variable</a>
                                        </li>
                                        <li>
                                            <a href="single-product-affiliate.html">Shop Affiliate</a>
                                        </li>
                                        <li><a href="single-product-group.html">Shop Group</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">other pages</a>
                                    <ul>
                                        <li><a href="about-us.html">About Page</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="compare.html">Compare Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- shop mega menu end-->
                        </li>
                        <li>
                            <a href="javascript:void(0)">pages</a>
                            <!-- pages sub menu -->
                            <ul>
                                <li><a href="about-us.html">About Page</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="compare.html">Compare Page</a></li>
                                <li><a href="login.html">Login &amp; Register Page</a></li>
                                <li><a href="myaccount.html">Account Page</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                            </ul>
                            <!-- pages sub menu end-->
                        </li>
                        <li>
                            <a href="javascript:void(0)">Blog</a>
                            <!-- blog sub menu -->
                            <ul>
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul>
                                        <li>
                                            <a href="blog-grid-5-column.html">Blog Grid 5 column</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-6-column.html">Blog Grid 6 column</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul>
                                        <li>
                                            <a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog details</a>
                                    <ul>
                                        <li>
                                            <a href="blog-details-left-sidebar.html">Blog details Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-right-sidebar.html">Blog details Right Sidbar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- blog sub menu end-->
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
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
                        <a class="header-top-link" href="https://hasthemes.com/">hastech@gmail.com</a>
                    </p>
                    <p>Free Shipping for all Order of $99</p>

                    <ul id="offcanvas-menu2" class="blog-ctry-menu blog-ctry-menu2">
                        <li>
                            <a href="javascript:void(0)">My Account</a>
                            <ul class="category-sub-menu">
                                <li>
                                    <a href="account.html">account</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a href="login.html">Sign in</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">Wishlist</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0)">currency: USD $</a>
                            <ul class="category-sub-menu">
                                <li><a href="#">EUR €</a></li>
                                <li><a href="#">USD $</a></li>
                            </ul>
                        </li>
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
                                            <li><span class="text-dark fw-500">Address:</span> 4710-4890 Breckinridge St,Fayetteville</li>
                                            <li><span class="text-dark fw-500">Email:</span> <a href="mailto:support@hasthemes.com">support@hasthemes.com</a></li>
                                            <li><span class="text-dark fw-500">Call us:</span><a href="tel:110012345678"><span class="phone-call">1-1001-234-5678</span></a></li>
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


</body>

</html>