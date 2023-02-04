@extends("layouts.fronted_master")
@section("title", " - Customer Dashboard")

@section("content")

<div class="login-register-area section-py">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
                    <div class="text-center">
                        <img src="{{asset(Auth::guard('web')->user()->image != null ? Auth::guard('web')->user()->image : 'noImage.jpg')}}" width="100" class="img rounded">
                        <h5 class="mt-2 mb-0">{{Auth::guard('web')->user()->name}}</h5>
                    </div>
                    <hr style="margin: 5px 0 !important;">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="" onclick="Dashboard(event)" class="nav-link dashboard active" aria-current="page">
                                <i class="bi bi-grid me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item mt-1">
                            <a href="" class="nav-link orderTable" onclick="OrderTable(event)">
                                <i class="bi bi-cart me-2"></i>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item mt-1">
                            <a href="" onclick="Wishlist(event)" class="nav-link wishlistTable">
                                <i class="bi bi-heart me-2"></i>
                                Wishlist
                            </a>
                        </li>
                        <li class="nav-item mt-1">
                            <a href="#" onclick="Setting(event)" class="nav-link setting">
                                <i class="bi bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>
                        <li class="nav-item mt-1">
                            <a href="{{route('customer.logout')}}" class="nav-link">
                                <i class="bi bi-box-arrow-in-left me-2"></i>
                                SignOut
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-9 item-section" id="dashboard">
                <div class="mt-2">
                    <div class="row">
                        <div class="col-lg-4 mb-5">
                            <a href="">
                                <div class="card border-0" style="box-shadow: 3px 5px 10px #838383a3;" onclick="OrderTable(event)">
                                    <div class="card-body text-center">
                                        <i class="bi bi-cart"></i>
                                        <p>Orders</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <a href="">
                                <div class="card border-0" onclick="Pending(event)" style="box-shadow: 3px 5px 10px #838383a3;">
                                    <div class="card-body text-center">
                                        <i class="bi bi-p-circle"></i>
                                        <p>Pending Order</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <a href="">
                                <div class="card border-0" onclick="Completed(event)" style="box-shadow: 3px 5px 10px #838383a3;">
                                    <div class="card-body text-center">
                                        <i class="bi bi-cart-check"></i>
                                        <p>Completed Order</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <a href="">
                                <div class="card border-0" style="box-shadow: 3px 5px 10px #838383a3;" onclick="Wishlist(event)">
                                    <div class="card-body text-center">
                                        <i class="bi bi-heart"></i>
                                        <p>Wishlist</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <a href="">
                                <div class="card border-0" style="box-shadow: 3px 5px 10px #838383a3;" onclick="Setting(event)">
                                    <div class="card-body text-center">
                                        <i class="bi bi-gear"></i>
                                        <p>Settings</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <a href="{{route('customer.logout')}}">
                                <div class="card border-0" style="box-shadow: 3px 5px 10px #838383a3;">
                                    <div class="card-body text-center">
                                        <i class="bi bi-box-arrow-in-left"></i>
                                        <p>SignOut</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- order table -->
            <div class="col-12 col-lg-9 d-none item-section" id="orderTable">
                <div class="mt-1">
                    <div class="card border-0" style="box-shadow: 3px 5px 10px #838383a3;">
                        <div class="card-body">
                            <h4 class="m-0 text-center text-decoration-underline pb-3">All Order List</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>#Invoice</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($orders->count() > 0)
                                    @foreach($orders as $key => $item)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$item->invoice}}</td>
                                        <td>{{date("d-m-Y", strtotime($item->date))}}</td>
                                        <td class="{{$item->status == 'pending' ? 'text-danger': 'text-success'}} text-capitalize">{{$item->status}}</td>
                                        <td>
                                            <button class="shadow-none text-white" style="background: #00000038;width:25px;height:22px;"><i class="bi bi-file-earmark"></i></button>
                                            @if($item->status == 'pending')
                                            <button class="shadow-none text-white" style="background: red;width:25px;height:22px;">X</button>
                                            @else
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr class="text-center">
                                        <td colspan="5">Order Not found in Table</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending order table -->
            <div class="col-12 col-lg-9 d-none item-section" id="pending">
                <div class="mt-1">
                    <div class="card border-0" style="box-shadow: 3px 5px 10px #838383a3;">
                        <div class="card-body">
                            <h4 class="m-0 text-center text-decoration-underline pb-3">Pending Order List</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>#Invoice</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($pending->count() > 0)
                                    @foreach($pending as $key => $item)
                                    <tr>
                                    <td>{{$key + 1}}</td>
                                        <td>{{$item->invoice}}</td>
                                        <td>{{date("d-m-Y", strtotime($item->date))}}</td>
                                        <td class="text-danger text-capitalize">{{$item->status}}</td>
                                        <td>
                                            <button class="shadow-none text-white" style="background: #00000038;width:25px;height:22px;"><i class="bi bi-file-earmark"></i></button>
                                            <button class="shadow-none text-white" style="background: red;width:25px;height:22px;">X</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr class="text-center">
                                        <td colspan="5">Order Not Found in Table</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Completed order table -->
            <div class="col-12 col-lg-9 d-none item-section" id="completed">
                <div class="mt-1">
                    <div class="card border-0" style="box-shadow: 3px 5px 10px #838383a3;">
                        <div class="card-body">
                            <h4 class="m-0 text-center text-decoration-underline pb-3">Completed Order List</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>#Invoice</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($complete->count() > 0)
                                    @foreach($complete as $key => $item)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$item->invoice}}</td>
                                        <td>{{date("d-m-Y", strtotime($item->date))}}</td>
                                        <td class="text-success text-capitalize">{{$item->status}}</td>
                                        <td>
                                            <button class="shadow-none text-white" style="background: #00000038;width:25px;height:22px;"><i class="bi bi-file-earmark"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr class="text-center">
                                        <td colspan="5">Order Not found in Table</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wishlist table -->
            <div class="col-12 col-lg-9 d-none item-section" id="wishlistTable">
                <div class="mt-1">
                    <div class="card border-0" style="box-shadow: 3px 5px 10px #838383a3;">
                        <div class="card-body">
                            <h4 class="m-0 text-center text-decoration-underline pb-3">All Wishlist</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th></th>
                                        <th>Product</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($wishlists) > 0)
                                    @foreach($wishlists as $key => $item)
                                    <tr class="wishlist-{{$item->product->id}}">
                                        <td>{{$key + 1}}</td>
                                        <td>
                                            <a class="m-0" href="{{asset($item->product->image != null ? $item->product->image : '/no-product-image.jpg')}}">
                                                <img src="{{asset($item->product->image != null ? $item->product->image : '/no-product-image.jpg')}}" width="30" alt="img" />
                                            </a>
                                        </td>
                                        <td>{{$item->product->name}}</td>
                                        <td>
                                            <input type="number" step="1" min="1" value="1" style="width: 60px;text-align: center;border: 1px solid lightgrey;">
                                        </td>
                                        <td>
                                            @if(Auth::guard('web')->check() && Auth::guard('web')->user()->customer_type == 'wholesale')
                                            ৳ {{$item->product->wholesale_rate}}
                                            @else
                                            ৳ {{$item->product->selling_rate}}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a style="cursor: pointer;" onclick="addCart({{$item->product->id}}, 'wishlist')" class="text-warning"><i class="bi bi-cart-plus"></i></a>
                                            <a style="cursor: pointer;" onclick="deleteWishlist(event)" data-id="{{$item->product->id}}" class="text-danger"><i data-id="{{$item->product->id}}" class="bi bi-trash3"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            Product Not Found
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Setting -->
            <div class="col-12 col-lg-9 d-none item-section" id="setting">
                <div class="mt-1">
                    <div class="card border-0" style="box-shadow: 3px 5px 10px #838383a3;">
                        <div class="card-body">
                            <form onsubmit="saveProfileCustomer(event)">
                                <div class="row">
                                    <div class="col-12 col-lg-2">
                                        <div class="form-group ImageBackground">
                                            <img src="{{asset(Auth::guard('web')->user()->image != null ? Auth::guard('web')->user()->image : 'noImage.jpg')}}" class="imageShow" />
                                            <label for="image">Image</label>
                                            <input type="file" id="image" class="form-control shadow-none" onchange="imageUpdate(event)" />
                                        </div>
                                        <span class="text-danger error error-image"></span>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-gorup">
                                                    <label for="name">Customer Name</label>
                                                    <input type="text" name="name" id="name" value="{{Auth::guard('web')->user()->name}}" class="form-control shadow-none" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-gorup">
                                                    <label for="username">User Name</label>
                                                    <input type="text" name="username" id="username" value="{{Auth::guard('web')->user()->username}}" class="form-control shadow-none" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-2">
                                                <div class="form-gorup">
                                                    <label for="email">Email</label>
                                                    <input type="text" name="email" id="email" value="{{Auth::guard('web')->user()->email}}" class="form-control shadow-none" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-2">
                                                <div class="form-gorup">
                                                    <label for="mobile">Phone</label>
                                                    <input type="text" name="mobile" id="mobile" value="{{Auth::guard('web')->user()->mobile}}" class="form-control shadow-none" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-2">
                                                <div class="form-gorup">
                                                    <label for="district">District</label>
                                                    <select name="district" onchange="getUpazila(event)" id="district" class="form-select shadow-none">
                                                        <option value="">Select District</option>
                                                        @foreach($districts as $district)
                                                        <option value="{{$district->id}}" {{Auth::guard('web')->user()->district_id ? 'selected':''}}>{{$district->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-2">
                                                <div class="form-gorup">
                                                    <label for="thana_id">Upazila</label>
                                                    <select name="thana_id" id="thana_id" class="form-select shadow-none">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-2">
                                                <div class="form-gorup">
                                                    <label for="address">Address</label>
                                                    <textarea name="address" id="address" class="form-control shadow-none">{{Auth::guard('web')->user()->address}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-2">
                                                <div class="form-gorup">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password" class="form-control shadow-none" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-2">
                                                <div class="form-gorup">
                                                    <label for="new_password">New Password</label>
                                                    <input type="password" name="new_password" id="new_password" class="form-control shadow-none" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mt-2">
                                                <div class="form-gorup">
                                                    <label for="confirm_password">Confirm Password</label>
                                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control shadow-none" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mt-2">
                                                <div class="form-gorup text-center">
                                                    <button class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push("webjs")
<script>
    function deleteWishlist(event) {
        $.ajax({
            url: location.origin + "/deletewishlist",
            method: "POST",
            data: {
                product_id: event.target.getAttribute("data-id")
            },
            success: res => {
                $(".wishlist-" + event.target.getAttribute("data-id")).remove();
                $.notify(res.msg, "success")
                if (res.content == 0) {
                    let row = `
                            <tr>
                                <td colspan="6" class="text-center">
                                    Product Not Found
                                </td>
                            </tr>
                            `;
                    $("#wishlistTable").find("table tbody").html(row)
                }

            }
        })
    }
</script>
<script>
    function imageUpdate(event) {
        if (event.target.files[0]) {
            document.querySelector(".imageShow").setAttribute('src', window.URL.createObjectURL(event.target.files[0]))
        }
    }
    function getUpazila(event) {
        if (event.target.value) {
            $.ajax({
                url: location.origin + "/getUpazila/" + event.target.value,
                method: "GET",
                beforeSend: () => {
                    $("#thana_id").html(`<option value="">Select Upazila</option>`)
                },
                success: res => {
                    $.each(res, (index, value) => {
                        $("#thana_id").append(`<option value="${value.id}">${value.name}</option>`)
                    })
                }
            })
        } else {
            $("#thana_id").html(`<option value="">Select Upazila</option>`)
        }
    }

    // save profile
    function saveProfileCustomer(event) {
        event.preventDefault();
        console.log(event);
    }

    function Dashboard(event) {
        event.preventDefault();
        $('.login-register-area').find(".nav-link").removeClass("active")
        $('.login-register-area').find(".dashboard").addClass("active")
        $('.login-register-area').find(".item-section").addClass("d-none")
        $('.login-register-area').find("#dashboard").removeClass("d-none")
    }
    // order table
    function OrderTable(event) {
        event.preventDefault();
        if ($('.login-register-area').find(".orderTable").attr("class") == "nav-link orderTable") {
            $('.login-register-area').find(".nav-link").removeClass("active")
            $('.login-register-area').find(".orderTable").addClass("active")
            $('.login-register-area').find(".item-section").addClass("d-none")
            $('.login-register-area').find("#orderTable").removeClass("d-none")
        }
    }
    // wishlist table
    function Wishlist(event) {
        event.preventDefault();
        if ($('.login-register-area').find(".wishlistTable").attr("class") == "nav-link wishlistTable") {
            $('.login-register-area').find(".nav-link").removeClass("active")
            $('.login-register-area').find(".wishlistTable").addClass("active")
            $('.login-register-area').find(".item-section").addClass("d-none")
            $('.login-register-area').find("#wishlistTable").removeClass("d-none")
        }
    }

    // wishlist table
    function Setting(event) {
        event.preventDefault();
        if ($('.login-register-area').find(".setting").attr("class") == "nav-link setting") {
            $('.login-register-area').find(".nav-link").removeClass("active")
            $('.login-register-area').find(".setting").addClass("active")
            $('.login-register-area').find(".item-section").addClass("d-none")
            $('.login-register-area').find("#setting").removeClass("d-none")
        }
    }

    // pending order
    function Pending(event) {
        event.preventDefault();
        $('.login-register-area').find(".item-section").addClass("d-none")
        $('.login-register-area').find("#pending").removeClass("d-none")
    }
    // completed order
    function Completed(event) {
        event.preventDefault();
        $('.login-register-area').find(".item-section").addClass("d-none")
        $('.login-register-area').find("#completed").removeClass("d-none")
    }
</script>
@endpush