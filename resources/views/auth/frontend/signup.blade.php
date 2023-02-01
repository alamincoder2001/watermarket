@extends("layouts.fronted_master")
@section("title", " - SignUp")

@section("content")

<div class="login-register-area section-py">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12 mx-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4>login</h4>
                        </a>
                        <a data-bs-toggle="tab" href="#lg2">
                            <h4>register</h4>
                        </a>
                    </div>

                    <div class="tab-content">
                        <div id="lg1" class="tab-pane show active">
                            <div class="login-form-container" style="position: relative;">
                                <div class="d-flex gap-1" style="position: absolute;top: 15px;right: 80px;background: #13319f;padding: 5px;">
                                    <input type="checkbox" value="technician" id="technician" style="height: 15px;margin: 0;position: relative;top: 1px;width: 17px;" />
                                    <label for="technician" style="cursor:pointer;margin: 0;color:white;">
                                        Technician
                                    </label>
                                </div>
                                <div class="login-register-form" id="Login">
                                    <form onsubmit="Login(event)">
                                        <input type="text" name="username" placeholder="Username" autocomplete="off" />
                                        <span class="text-danger error-username error"></span>
                                        <input type="password" name="password" placeholder="Password" autocomplete="off" />
                                        <span class="text-danger error-password error"></span>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input id="remember" type="checkbox" />
                                                <label for="remember">Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit" class="btn btn-primary text-white btn-hover-warning w-100">
                                                <span>Login</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container" style="position: relative;">
                                <div class="d-flex gap-1" style="position: absolute;top: 15px;right: 80px;background: #13319f;padding: 5px;">
                                    <input type="checkbox" value="technician" id="technician1" style="height: 15px;margin: 0;position: relative;top: 1px;width: 17px;" />
                                    <label for="technician1" style="cursor:pointer;margin: 0;color:white;">
                                        Technician
                                    </label>
                                </div>
                                <div class="login-register-form" id="Register">
                                    <form onsubmit="Register(event)">
                                        <input type="text" name="name" placeholder="Name" autocomplete="off" />
                                        <span class="text-danger error-name error"></span>
                                        <input type="text" name="username" placeholder="Username" autocomplete="off" />
                                        <span class="text-danger error-username error"></span>
                                        <input name="email" placeholder="Email" type="email" autocomplete="off" />
                                        <span class="text-danger error-email error"></span>
                                        <input type="text" name="mobile" placeholder="Phone" autocomplete="off" />
                                        <span class="text-danger error-mobile error"></span>
                                        <input type="password" name="password" placeholder="Password" autocomplete="off" />
                                        <span class="text-danger error-password error"></span>
                                        <input type="password" name="confirm_password" placeholder="Confirm Password" autocomplete="off" />
                                        <span class="text-danger error-confirm_password error"></span>
                                        <br/>
                                        <label for="retail" class="hideCustomerField"><input type="radio" name="customer_type" value="Retail" id="retail" style="height: 17px;width: 30px;" checked /> <span>Retail</span></label>
                                        <label for="wholesale" class="hideCustomerField"><input type="radio" name="customer_type" value="Wholesale" id="wholesale" style="height: 17px;width: 30px;" /> <span>Wholesale</span></label>
                                        <div class="button-box" style="margin-top: 10px;">
                                            <button type="submit" class="btn btn-primary text-white btn-hover-warning w-100">
                                                <span>Register</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
    $("#technician1").on("change", event => {
        if (event.target.checked) {
            $(".hideCustomerField").addClass("d-none")
        }else{
            $(".hideCustomerField").removeClass("d-none")
        }
    })
    function Register(event) {
        event.preventDefault();
        let technician = $("#technician1").prop("checked")
        if (technician != false) {
            var url = location.origin + "/technician-register"
        } else {
            var url = location.origin + "/customer-register"
        }
        let formdata = new FormData(event.target)
        $.ajax({
            url: url,
            method: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: () => {
                $("#Register .error").text("")
            },
            success: res => {
                if (res.error) {
                    $.each(res.error, (index, value) => {
                        $("#Register .error-" + index).text(value)
                    })
                } else {
                    $.notify(res, "success");
                    $("form").trigger("reset")
                    location.href = "/customer-dashboard";
                }
            }
        })
    }

    function Login(event) {
        event.preventDefault();
        let technician = $("#technician").prop("checked")
        if (technician != false) {
            var url = location.origin + "/technician-login"
        } else {
            var url = location.origin + "/customer-login"
        }
        let formdata = new FormData(event.target)
        $.ajax({
            url: url,
            method: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: () => {
                $("#Login .error").text("")
            },
            success: res => {
                if (res.error) {
                    $.each(res.error, (index, value) => {
                        $("#Login .error-" + index).text(value)
                    })
                } else if (res.errors) {
                    $("#Login .error-username").text(res.errors)
                } else {
                    $.notify(res, "success");
                    $("form").trigger("reset")
                    location.href = "{{route('customer.dashboard')}}"
                }
            }
        })
    }
</script>
@endpush