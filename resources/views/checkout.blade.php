@extends("layouts.fronted_master")
@section("title", " - Checkout Page")
@section("content")
<nav class="breadcrumb-section section-py bg-light2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="bread-crumb-title">check out page</h3>
            </div>
        </div>
    </div>
</nav>

<div class="check-out-section section-py">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="billing-info-wrap">
                    <h3 class="title">Billing Details</h3>
                    <form class="personal-information">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info">
                                    <label>First Name</label>
                                    <input type="text" value="{{Auth::guard('web')->user()->name}}" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="billing-select">
                                    <label for="inputState" class="form-label">District</label>
                                    <select id="inputState" class="form-select mb-2">
                                        <option value="">Select a District</option>
                                        @foreach($districts as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="billing-select">
                                    <label for="inputState" class="form-label">City</label>
                                    <select id="inputState" class="form-select mb-2">
                                        <option>Select a City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="billing-info">
                                    <label>Street Address</label>
                                    <input class="billing-address" placeholder="House number and street name" type="text" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Postcode / ZIP</label>
                                    <input type="text" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Mobile</label>
                                    <input type="text" value="{{Auth::guard('web')->user()->mobile}}" autocomplete="off"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Email Address</label>
                                    <input type="text" value="{{Auth::guard('web')->user()->email}}" autocomplete="off"/>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="additional-info-wrap">
                        <h4 class="title">Additional information</h4>
                        <div class="additional-info">
                            <label class="mb-2">Order notes</label>
                            <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                        </div>
                    </div>
                    <div class="checkout-account">
                        <input id="ship" class="checkout-toggle" type="checkbox" />
                        <label for="ship" style="cursor: pointer;">Ship to a different address?</label>
                    </div>
                    <div class="different-address open-toggle mt-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>First Name</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Last Name</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info">
                                    <label>Company Name</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select">
                                    <label for="inputState1" class="form-label">Country</label>
                                    <select id="inputState1" class="form-select mb-3">
                                        <option>Select a country</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info">
                                    <label>Street Address</label>
                                    <input class="billing-address mb-3" placeholder="House number and street name" type="text" />
                                    <input placeholder="Apartment, suite, unit etc." type="text" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info">
                                    <label>Town / City</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>State / County</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Postcode / ZIP</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Phone</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info">
                                    <label>Email Address</label>
                                    <input type="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="your-order-area">
                    <h3 class="title">Your order</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Product</li>
                                    <li>Total</li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <ul>
                                    @foreach(\Cart::content() as $item)
                                    <li>
                                        <span class="order-middle-left">{{$item->name}} X {{$item->qty}}</span>
                                        <span class="order-price">৳ <label> {{$item->price * $item->qty}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Shipping</li>
                                    <li>Free shipping</li>
                                </ul>
                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Total</li>
                                    <li>$329</li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion element-mrg">
                                <div class="panel-group" id="accordion">
                                    <div class="panel payment-accordion">
                                        <div class="panel-heading" id="method-two">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#method2">
                                                    Check payments
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="panel payment-accordion">
                                        <div class="panel-heading" id="method-three">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#method3">
                                                    Cash on delivery
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Place-order mt-25">
                        <a class="btn btn-warning btn-lg w-100 btn-hover-primary" href="#">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection