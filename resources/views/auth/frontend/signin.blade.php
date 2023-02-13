@extends("layouts.fronted_master")
@section("title", " - Sign In")

@section("content")

<div class="login-register-area section-py" style="margin: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-10 mx-auto">
                <div class="login-register-wrapper">
                    <div class="login-form-container">
                        <h4 class="text-center text-uppercase mb-5">Sign In</h4>
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
            </div>
        </div>
    </div>
</div>

@endsection

@push("webjs")
<script>
    function Login(event) {
        event.preventDefault();
        let formdata = new FormData(event.target)
        $.ajax({
            url: "/customer-login",
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