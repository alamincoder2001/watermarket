<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Benito - Mega Store Responsive Bootstrap 5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images/favicon.ico" />

    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/vendor/ionicons.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/vendor/linearicons-free.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/vendor/font-awesome.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css" />

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
    <header>
        <div class="header-top bg-primary d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p>Email: <a class="header-top-link" href="https://hasthemes.com/">hastech@gmail.com</a></p>
                        <p>Free Shipping for all Order of $99</p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="header-top-nav">
                            <ul class="d-flex flex-wrap justify-content-center align-items-center justify-content-sm-end">
                                <li class="dropdown top-nav-item"><a class="top-nav-link" href="#" role="button" id="account" data-bs-toggle="dropdown">My Account <i class="ion-ios-arrow-down"></i></a>

                                    <!-- dropdown-menu start -->
                                    <ul class="dropdown-menu" aria-labelledby="account">
                                        <li><a class="dropdown-item" href="account.html">My account</a></li>
                                        <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                        <li><a class="dropdown-item" href="login.html">Sign in</a></li>
                                        <li><a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                    <!-- dropdown-menu start -->
                                </li>
                                <li class="dropdown top-nav-item"><span></span><a class="top-nav-link" role="button" id="currency" data-bs-toggle="dropdown" href="#">USD $<i class="ion-ios-arrow-down"></i></a>

                                    <!-- dropdown-menu start -->
                                    <ul class="dropdown-menu" aria-labelledby="currency">
                                        <li><a class="dropdown-item" href="#">EUR €</a></li>
                                        <li><a class="dropdown-item" href="#">USD $</a></li>
                                    </ul>
                                    <!-- dropdown-menu start -->

                                </li>
                                <li class="dropdown top-nav-item"><img class="me-1" src="{{asset('frontend')}}/assets/images/flag/1.jpg" alt="img"> <span></span><a class="top-nav-link" role="button" id="language" data-bs-toggle="dropdown" href="#">English<i class="ion-ios-arrow-down"></i></a>
                                    <!-- dropdown-menu start -->
                                    <ul class="dropdown-menu" aria-labelledby="language">
                                        <li><a class="dropdown-item" href="#"><img src="{{asset('frontend')}}/assets/images/flag/1.jpg" alt="flags"> English</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="{{asset('frontend')}}/assets/images/flag/2.jpg" alt="flags"> Français</a></li>
                                    </ul>
                                    <!-- dropdown-menu start -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="active-sticky" class="header-section">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <!-- Header Logo Start -->
                    <div class="col-6 col-md-3 col-md-3 col-lg-3">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{asset('frontend')}}/assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="col-md-6 col-lg-4 d-none d-lg-block">
                        <form action="#">
                            <div class="input-group border">
                                <div class="input-group-text">
                                    <select class="form-select d-none d-xl-block" aria-label="Default select example">
                                        <option value="0">All categories</option>
                                        <option value="10">Cookware</option>
                                        <option value="19">- - Baking &amp; Pastry Mats</option>
                                        <option value="21">- - - - Baking Cups</option>
                                        <option value="22">- - - - Baking Dishes</option>
                                        <option value="23">- - - - Baking Mats</option>
                                        <option value="24">- - - - Pastry Boards</option>
                                        <option value="25">- - - - Pastry Mats</option>
                                        <option value="20">- - Chocolate Moulds</option>
                                        <option value="26">- - - - Decorating Pens</option>
                                        <option value="27">- - - - Decorating Sets</option>
                                        <option value="28">- - - - Decorating Tips</option>
                                        <option value="29">- - - - Sweetly Does It</option>
                                        <option value="30">- - - - Aprons</option>
                                        <option value="72">- - - - Electric Mixers</option>
                                        <option value="11">Appliances</option>
                                        <option value="31">- - Chopping Boards</option>
                                        <option value="33">- - - - Aprons</option>
                                        <option value="34">- - - - Baking Cups</option>
                                        <option value="35">- - - - Baking Dishes</option>
                                        <option value="36">- - - - Coffee</option>
                                        <option value="37">- - - - Coffee</option>
                                        <option value="38">- - - - Tea Accessories</option>
                                        <option value="32">- - Tea Towels</option>
                                        <option value="39">- - - - Baking Cups</option>
                                        <option value="40">- - - - Baking Moulds</option>
                                        <option value="41">- - - - Bundt Pans</option>
                                        <option value="42">- - - - Cake Moulds</option>
                                        <option value="43">- - - - Cake Pans</option>
                                        <option value="12">Kitchenair</option>
                                        <option value="44">- - Knives</option>
                                        <option value="46">- - - - Baking Dishes</option>
                                        <option value="47">- - - - Ice Cream</option>
                                        <option value="48">- - - - Mandoline Slicers</option>
                                        <option value="49">- - - - Slushy Makers</option>
                                        <option value="45">- - Pans</option>
                                        <option value="50">- - - - Decorating Tips</option>
                                        <option value="51">- - - - DecoSpoon</option>
                                        <option value="52">- - - - Rasps</option>
                                        <option value="53">- - - - Shavers</option>
                                        <option value="54">- - - - Sweetly Does It</option>
                                        <option value="13">KitchenAid Artisan</option>
                                        <option value="55">- - Appliances</option>
                                        <option value="57">- - - - DecoSpoon</option>
                                        <option value="58">- - - - Scales1</option>
                                        <option value="59">- - - - Sweetly Does It</option>
                                        <option value="60">- - - - Timers</option>
                                        <option value="56">- - Tea Towels</option>
                                        <option value="61">- - - - Cleaning Supplies</option>
                                        <option value="62">- - - - Cutting</option>
                                        <option value="63">- - - - Cutting1</option>
                                        <option value="64">- - - - Decorating Sets</option>
                                        <option value="14">Ceramic Artisan</option>
                                        <option value="68">- - Pots</option>
                                        <option value="69">- - Pans</option>
                                        <option value="70">- - Living</option>
                                        <option value="15">Appliances1</option>
                                        <option value="16">Bakeware</option>
                                        <option value="17">Knives</option>
                                        <option value="18">Tableware</option>
                                        <option value="71">DIY</option>
                                        <option value="74">Baking Cups</option>
                                        <option value="75">Decorating Pens</option>
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
                    </div>
                    <div class="col-6 col-md-9 col-lg-5">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul class="d-flex">
                                    <li class="main-menu-item">
                                        <a class="main-menu-link" href="index.html">Home</a>
                                        <!-- home sub menu -->
                                        <ul class="sub-menu">
                                            <li><a class="sub-menu-link" href="index.html">Home 1</a></li>
                                            <li><a class="sub-menu-link" href="index-2.html">Home 2</a></li>
                                            <li><a class="sub-menu-link" href="index-3.html">Home 3</a></li>
                                            <li><a class="sub-menu-link" href="index-4.html">Home 4</a></li>
                                        </ul>
                                        <!-- home sub menu end-->
                                    </li>
                                    <li class="position-static main-menu-item">
                                        <a class="main-menu-link" href="#">shop</a>

                                        <!-- shop mega menu -->
                                        <ul class="mega-menu row">
                                            <li class="col-3">
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Shop Grid</a></li>
                                                    <li><a href="shop-grid-5-column.html">Shop Grid 5 Column</a></li>
                                                    <li><a href="shop-grid-6-column.html">Shop Grid 6 Column</a></li>
                                                    <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                                    <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-3">
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Shop List</a></li>
                                                    <li><a href="shop-grid-list.html">Shop List</a></li>
                                                    <li><a href="shop-grid-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-grid-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-3">
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Shop Single</a></li>
                                                    <li><a href="single-product.html">Shop Single</a></li>
                                                    <li><a href="single-product-configurable.html">Shop Variable</a></li>
                                                    <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                                    <li><a href="single-product-group.html">Shop Group</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-3">
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">other pages</a></li>
                                                    <li><a href="about-us.html">About Page</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-4 mt-4">
                                                <a href="single-product.html" class="zoom-in"><img src="{{asset('frontend')}}/assets/images/mega-menu/1.jpg" alt="img"></a>
                                            </li>
                                            <li class="col-4 mt-4">
                                                <a href="single-product.html" class="zoom-in"><img src="{{asset('frontend')}}/assets/images/mega-menu/2.jpg" alt="img"></a>
                                            </li>
                                            <li class="col-4 mt-4">
                                                <a href="single-product.html" class="zoom-in"><img src="{{asset('frontend')}}/assets/images/mega-menu/3.jpg" alt="img"></a>
                                            </li>
                                        </ul>
                                        <!-- shop mega menu end-->
                                    </li>
                                    <li class="main-menu-item">
                                        <a class="main-menu-link" href="#">pages</a>
                                        <!-- pages sub menu -->
                                        <ul class="sub-menu">
                                            <li><a class="sub-menu-link" href="about-us.html">About Page</a></li>
                                            <li><a class="sub-menu-link" href="cart.html">Cart Page</a></li>
                                            <li><a class="sub-menu-link" href="checkout.html">Checkout Page</a></li>
                                            <li><a class="sub-menu-link" href="compare.html">Compare Page</a></li>
                                            <li><a class="sub-menu-link" href="login.html">Login &amp; Register Page</a></li>
                                            <li><a class="sub-menu-link" href="myaccount.html">Account Page</a></li>
                                            <li><a class="sub-menu-link" href="wishlist.html">Wishlist Page</a></li>
                                        </ul>
                                        <!-- pages sub menu end-->
                                    </li>
                                    <li class="main-menu-item">
                                        <a class="main-menu-link" href="#">Blog</a>
                                        <!-- blog sub menu -->
                                        <ul class="sub-menu blog-sub-menu">
                                            <li>
                                                <a class="sub-menu-link" href="#">Blog Grid</a>
                                                <ul class="sub-menu">
                                                    <li><a class="sub-menu-link" href="blog-grid-5-column.html">Blog Grid 5 column</a></li>
                                                    <li><a class="sub-menu-link" href="blog-grid-6-column.html">Blog Grid 6 column</a></li>
                                                    <li><a class="sub-menu-link" href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                    <li><a class="sub-menu-link" href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="sub-menu-link" href="#">Blog List</a>
                                                <ul class="sub-menu">
                                                    <li><a class="sub-menu-link" href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                    <li><a class="sub-menu-link" href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="sub-menu-link" href="#">Blog details</a>
                                                <ul class="sub-menu">
                                                    <li><a class="sub-menu-link" href="blog-details-left-sidebar.html">Blog details Left Sidebar</a>
                                                    </li>
                                                    <li><a class="sub-menu-link" href="blog-details-right-sidebar.html">Blog details Right Sidbar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- blog sub menu end-->
                                    </li>
                                    <li class="main-menu-item">
                                        <a class="main-menu-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="d-flex align-items-center justify-content-end">
                                <div class="block-cart-btn-wrapp">
                                    <button class="cart-action">
                                        <span class="lnr lnr-cart"></span>
                                        <span class="badge bg-dark">2</span>
                                    </button>

                                    <div class="checkout-cart">
                                        <ul class="checkout-scroll">
                                            <li class="checkout-cart-list">
                                                <div class="checkout-img">
                                                    <img class="product-image" src="{{asset('frontend')}}/assets/images/mini-cart/1.jpg" alt="img" />
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="checkout-block">
                                                    <a class="product-name" href="#">Leaf & Bean Electric Milk Frother & Warmets</a>
                                                    <span class="product-price">$75.10</span>
                                                    <a class="remove-cart" href="#">
                                                        <i class="fa fa-remove pull-xs-left"></i>
                                                    </a>
                                                    <div class="product-size">
                                                        <span>Size: S</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="checkout-cart-list">
                                                <div class="checkout-img">
                                                    <img class="product-image" src="{{asset('frontend')}}/assets/images/mini-cart/2.jpg" alt="img" />
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="checkout-block">
                                                    <a href="#" class="product-name">Le Creuset Signature Cast Iron Round Casserole</a>
                                                    <span class="product-price">$70.90</span>
                                                    <a class="remove-cart" href="#">
                                                        <i class="fa fa-remove pull-xs-left"></i>
                                                    </a>
                                                    <div class="product-size">
                                                        <span>Size: S</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="list-group checkout-sub-total">
                                            <li class="list-group-item">
                                                <span>Subtotal</span>
                                                <span>$146.00</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span>shipping</span>
                                                <span>$7.00</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span>Taxes</span>
                                                <span>$0.00</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span>Total</span>
                                                <span>$153.00</span>
                                            </li>
                                        </ul>

                                        <!-- checkout-action button start -->
                                        <div class="checkout-action">
                                            <a href="checkout.html" class="btn btn-lg btn-primary d-block">Checkout</a>
                                        </div>
                                        <!-- checkout-action button end -->
                                    </div>

                                </div>
                                <button class="toggle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <span class="icon-top"></span>
                                    <span class="icon-middle"></span>
                                    <span class="icon-bottom"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Header Menu End -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header  End -->


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
                                <li class="menu-item-has-children menu-item-has-children-2">
                                    <a href="#">Camera &amp; Photo<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-2">
                                        <li><a href="#">Digital Cameras</a></li>
                                        <li><a href="#">Camcorders</a></li>
                                        <li><a href="#">Camera Drones</a></li>
                                        <li><a href="#">Action Cameras</a></li>
                                        <li><a href="#">Photo Studio Supplies</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-3">
                                    <a href="#">Smart Electronics <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-3">
                                        <li><a href="#">Wearable Devices</a></li>
                                        <li><a href="#">Smart Home Appliances</a></li>
                                        <li><a href="#">Smart Remote Controls</a></li>
                                        <li><a href="#">Smart Watches</a></li>
                                        <li><a href="#">Smart Wristbands</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-4">
                                    <a href="#">Audio &amp; Video <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-4">
                                        <li><a href="#">Televisions</a></li>
                                        <li><a href="#">TV Receivers</a></li>
                                        <li><a href="#">Projectors</a></li>
                                        <li><a href="#">Audio Amplifier Boards</a></li>
                                        <li><a href="#">TV Sticks</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-5">
                                    <a href="#">Portable Audio &amp; Video
                                        <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-5">
                                        <li><a href="#">Headphones</a></li>
                                        <li><a href="#">Speakers</a></li>
                                        <li><a href="#">MP3 Players</a></li>
                                        <li><a href="#">VR/AR Devices</a></li>
                                        <li><a href="#">Microphones</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-6">
                                    <a href="#">Video Game <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-6">
                                        <li><a href="#">Handheld Game Players</a></li>
                                        <li><a href="#">Game Controllers</a></li>
                                        <li><a href="#">Joysticks</a></li>
                                        <li><a href="#">Stickers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Televisions</a></li>
                                <li><a href="#">Digital Cameras</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Wearable Devices</a></li>
                                <li><a href="#">Smart Watches</a></li>
                                <li><a href="#">Game Controllers</a></li>
                                <li><a href="#"> Smart Home Appliances</a></li>
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
                                <div class="hero-slide-item swiper-slide slide-bg1">
                                    <div class="hero-slide-content">
                                        <h2 class="title delay1 animated">Cookware Set</h2>
                                        <h2 class="title delay2 animated">New Vidre Digital</h2>
                                        <p class="text animated">
                                            When you buy a selected westinghouse
                                        </p>
                                        <p class="price animated">Only $479.95</p>
                                        <a href="shop-grid-3-column.html" class="btn animated btn-primary btn-hover-warning mb-3 mb-sm-0 text-uppercase">shopping Now</a>
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
                                        <a href="shop-grid-3-column.html" class="btn animated btn-primary btn-hover-warning mb-3 mb-sm-0 text-uppercase">shopping Now</a>
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
                                        <a href="shop-grid-3-column.html" class="btn animated btn-primary btn-hover-warning mb-3 mb-sm-0 text-uppercase">shopping Now</a>
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
                <div class="col-xl-3 offset-lg-4 col-lg-8 offset-xl-0 custom-padding">
                    <div class="d-flex custom-flex-column">
                        <a class="zoom-in d-block mb-7 me-sm-7 me-0" href="shop-grid-left-sidebar.html">
                            <img src="{{asset('frontend')}}/assets/images/banner/1.jpg" alt="img">
                        </a>
                        <a class="zoom-in d-block mb-7" href="shop-grid-left-sidebar.html">
                            <img src="{{asset('frontend')}}/assets/images/banner/2.jpg" alt="img">
                        </a>
                    </div>
                </div>
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                            <div class="product-card">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                    <button class="product-btn-lg btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                    <button class="product-btn-lg btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                    <button class="product-btn-lg btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                        <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
                                                    <button class="product-btn btn btn-warning btn-hover-primary" data-bs-toggle="modal" data-bs-target="#add-to-cart">
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
    <section class="bg-primary section-py">
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
                                <button class="btn-search btn btn-hover-dark" type="submit">subcrib</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 mb-7">
                    <ul class="social d-flex flex-wrap align-items-center justify-content-center justify-content-md-end">
                        <li class="social-link-item"><a class="social-link" href="#"><span class="ion-social-facebook"></span></a></li>
                        <li class="social-link-item"><a class="social-link" href="#"><span class="ion-social-googleplus"></span></a></li>
                        <li class="social-link-item"><a class="social-link" href="#"><span class="ion-social-pinterest-outline"></span></a></li>
                        <li class="social-link-item"><a class="social-link" href="#"><span class="ion-social-twitter"></span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- News letter Section End -->

    <footer class="footer-section">
        <div class="footer-top position-relative">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="border-bottom section-py">
                            <div class="row mb-n7">
                                <div class="col-lg-4 col-sm-6 mb-7">
                                    <div class="footer-widget">
                                        <a class="footer-logo mb-8" href="index.html">
                                            <img src="{{asset('frontend')}}/assets/images/logo/logo.png" alt="footer-logo" />
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
                                Copyright &copy; <span id="currentYear"></span>
                                <a href="https://hasthemes.com/">Hasthemes</a>, All Rights Reserved
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
                                        <button class="btn btn-warning btn-hover-primary text-uppercase">
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

    <script src="{{asset('frontend')}}/assets/js/vendor/vendor.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/plugins/plugins.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/main.min.js"></script>


</body>

</html>