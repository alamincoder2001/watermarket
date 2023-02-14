@extends("layouts.fronted_master")
@section("title", " - SignUp")
@push("webstyle")
<!-- <style>
    .container {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }



    .card-columns .card {
        margin-bottom: 0.75rem;
    }

    @media (min-width: 576px) {
        .card-columns {
            column-count: 3;
            column-gap: 1.25rem;
        }

        .card-columns .card {
            display: inline-block;
            width: 100%;
        }
    }

    .text-muted {
        color: #9faecb !important;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .input-group {
        position: relative;
        display: flex;
        width: 100%;
    }
</style> -->
@endpush
@section("content")
<div class="container">
    <div class="row justify-content-center" style="margin: 40px 0;">
        <div class="col-md-8">
            <div class="card-group mb-0">
                <div class="card p-4">
                    <div class="card-body RetailRegister">
                        <form onsubmit="RetailRegister(event)">
                            <h3 class="text-center">Retailer</h3>
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off">
                                <span class="text-danger error-name error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">
                                <span class="text-danger error-username error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off">
                                <span class="text-danger error-email error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="mobile" class="form-control" placeholder="Mobile" autocomplete="off">
                                <span class="text-danger error-mobile error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                                <span class="text-danger error-password error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" autocomplete="off">
                                <span class="text-danger error-confirm_password error"></span>
                            </div>
                            <button type="submit" style="width: 100%;" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                    <div class="card-body d-none WholesaleRegister">
                        <form onsubmit="WholesaleRegister(event)">
                            <h3 class="text-center">Whole Sale</h3>
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off">
                                <span class="text-danger error-name error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">
                                <span class="text-danger error-username error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off">
                                <span class="text-danger error-email error"></span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="mobile" class="form-control" placeholder="Mobile" autocomplete="off">
                                <span class="text-danger error-mobile error"></span>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                                        <span class="text-danger error-password error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" autocomplete="off">
                                        <span class="text-danger error-confirm_password error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4 col-lg-4">
                                    <div class="mb-1">
                                        <div class="nidImage">
                                            <img src="{{asset('noImage.jpg')}}" style="width: 95px;height:50px;" />
                                        </div>
                                        <input type="file" class="d-none" name="nid_card" id="nid_card" title="Nid Card upload" style="width: 85%;margin:0;" onchange="document.querySelector('.nidImage img').src = window.URL.createObjectURL(this.files[0])" />
                                        <label style="text-align:center;background: #cbcbcb;width: 94px;cursor: pointer;" for="nid_card">Nid Card</label>
                                    </div>
                                    <span class="text-danger error-nid_card error"></span>
                                </div>
                                <div class="col-lg-4 col-md-4 text-center">
                                    <div class="mb-1">
                                        <div class="tradeImage">
                                            <img src="{{asset('noImage.jpg')}}" style="width: 95px;height:50px;" />
                                        </div>
                                        <input type="file" class="d-none" name="trade_license" id="trade_license" title="Trade License upload" style="width: 85%;margin:0;" onchange="document.querySelector('.tradeImage img').src = window.URL.createObjectURL(this.files[0])" />
                                        <label style="text-align:center;background: #cbcbcb;width: 94px;cursor: pointer;" for="trade_license">Trade License</label>
                                    </div>
                                    <span class="text-danger error-trade_license error"></span>
                                </div>
                                <div class="col-md-4 col-lg-4 text-end">
                                    <div class="mb-1">
                                        <div class="visitingImage">
                                            <img src="{{asset('noImage.jpg')}}" style="width: 95px;height:50px;" />
                                        </div>
                                        <input type="file" class="d-none" name="visiting_card" id="visiting_card" title="Visiting Card upload" style="width: 85%;margin:0;" onchange="document.querySelector('.visitingImage img').src = window.URL.createObjectURL(this.files[0])" />
                                        <label style="text-align:center;background: #cbcbcb;width: 94px;cursor: pointer;" for="visiting_card">Visiting Card</label>
                                    </div>
                                    <span class="text-danger error-visiting_card error"></span>
                                </div>
                            </div>
                            <button type="submit" style="width: 100%;" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <h2 class="text-white">Sign up</h2>
                            <button type="button" onclick="toggleRegisterBody(event)" value="Wholesale" class="btn btn-info mt-3 Wholesale">Create Wholesale Account Now!</button>
                            <button type="button" onclick="toggleRegisterBody(event)" value="Retail" class="btn btn-info mt-3 Retail d-none">Create Retail Account Now!</button>
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
    function WholesaleRegister(event) {
        event.preventDefault();
        let formdata = new FormData(event.target)
        $.ajax({
            url: "/customer-register",
            method: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: () => {
                $(".WholesaleRegister .error").text("")
            },
            success: res => {
                if (res.error) {
                    $.each(res.error, (index, value) => {
                        $(".WholesaleRegister .error-" + index).text(value)
                    })
                } else {
                    $.notify(res.msg, "success");
                    $("form").trigger("reset")
                    if (res.customer_type == 'Retail') {
                        location.href = "/customer-dashboard";
                    }
                    $(".nidImage img").prop("src", location.origin + "/noImage.jpg")
                    $(".tradeImage img").prop("src", location.origin + "/noImage.jpg")
                    $(".visitingImage img").prop("src", location.origin + "/noImage.jpg")
                }
            }
        })
    }

    function RetailRegister(event) {
        event.preventDefault();
        let formdata = new FormData(event.target)
        $.ajax({
            url: "/customer-register",
            method: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: () => {
                $(".RetailRegister .error").text("")
            },
            success: res => {
                if (res.error) {
                    $.each(res.error, (index, value) => {
                        $(".RetailRegister .error-" + index).text(value)
                    })
                } else {
                    $.notify(res.msg, "success");
                    $("form").trigger("reset")
                    if (res.customer_type == 'Retail') {
                        location.href = "/customer-dashboard";
                    }
                }
            }
        })
    }

    function toggleRegisterBody(event) {
        $(".RetailRegister .error").text("")
        $(".WholesaleRegister .error").text("")
        if (event.target.value == 'Retail') {
            $(".WholesaleRegister").addClass("d-none")
            $(".RetailRegister").removeClass("d-none")
            $(".Retail").addClass("d-none")
            $(".Wholesale").removeClass("d-none")
        } else {
            $(".WholesaleRegister").removeClass("d-none")
            $(".RetailRegister").addClass("d-none")
            $(".Retail").removeClass("d-none")
            $(".Wholesale").addClass("d-none")
        }
    }
</script>
@endpush