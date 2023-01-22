<header>
    <div class="header-top d-none d-lg-block bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Email: <a class="header-top-link" href="https://gmail.com/">{{$profile->email}}</a></p>
                    <p>Free Shipping for all Order of $99</p>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="header-top-nav">
                        <ul class="d-flex flex-wrap justify-content-center align-items-center justify-content-sm-end">
                            @if(Auth::check())
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
                            @else
                            <li class="dropdown top-nav-item"><a class="top-nav-link" href="{{route('showSignUpForm')}}" role="button" id="account">Sign In</a></li>
                            @endif
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
                        <a href="{{route('website')}}"><img src="{{asset('backend/assets/images/logo-text.png')}}" alt="Site Logo" /></a>
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
                                <button class="btn btn-hover-warning btn-primary h-100" style="border-radius: 0;" type="submit">
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
                                </li>
                                <li class="position-static main-menu-item">
                                    <a class="main-menu-link" href="#">Shop</a>
                                </li>
                                <li class="main-menu-item">
                                    <a class="main-menu-link" href="#">Pages</a>
                                    <!-- pages sub menu -->
                                    <ul class="sub-menu">
                                        <li><a class="sub-menu-link" href="cart.html">Cart Page</a></li>
                                        <li><a class="sub-menu-link" href="checkout.html">Checkout Page</a></li>
                                        <li><a class="sub-menu-link" href="wishlist.html">Wishlist Page</a></li>
                                        <li><a class="sub-menu-link" href="about-us.html">About Page</a></li>
                                        <li><a class="sub-menu-link" href="login.html">Login &amp; Register Page</a></li>
                                    </ul>
                                    <!-- pages sub menu end-->
                                </li>
                                <li class="main-menu-item">
                                    <a class="main-menu-link" href="#">Blog</a>
                                </li>
                                <li class="main-menu-item">
                                    <a class="main-menu-link" href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="block-cart-btn-wrapp">
                                <button class="cart-action bg-primary">
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
                                        <a href="checkout.html"  class="btn btn-primary btn-hover-warning btn-lg d-block">Checkout</a>
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