@extends("layouts.fronted_master")
@section("title", " - SignUp")

@section("content")

<div class="login-register-area section-py" style="margin:40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-10 mx-auto">
                <div class="login-register-wrapper">
                    <div class="login-form-container">
                        <h4 class="text-center text-uppercase mb-5">Sign Up</h4>
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
                                <br />
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

@endsection

@push("webjs")
<script>
    function Register(event) {
        event.preventDefault();
        let formdata = new FormData(event.target)
        $.ajax({
            url: "/customer-register",
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
</script>
@endpush