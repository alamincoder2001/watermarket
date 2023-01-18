@extends("layouts.fronted_master")
@section("title", " - SignUp")

@section("content")

<div class="login-register-area section-py">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 mx-auto">
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
                        <div id="lg1" class="tab-pane show active" style="width: 600px !important;margin: 0 auto;">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" placeholder="Username" autocomplete="off" />
                                        <input type="password" name="user-password" placeholder="Password" autocomplete="off" />
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input id="remember" type="checkbox" />
                                                <label for="remember">Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <a href="#" style="background:#59BBAD;" class="btn text-white btn-hover-primary w-100">
                                                <span>Login</span>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane" style="width: 600px !important;margin: 0 auto;">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <label for="technician">
                                        <input type="checkbox" value="technician" id="technician" style="height: 15px;margin: 0;position: relative;top: 1px;width: 17px;" /> Technician
                                    </label>
                                    <form action="#" method="post">
                                        <input type="text" name="name" placeholder="Name" autocomplete="off" />
                                        <input type="text" name="username" placeholder="Username" autocomplete="off" />
                                        <input name="user-email" placeholder="Email" type="email" autocomplete="off" />
                                        <input type="text" name="mobile" placeholder="Phone" autocomplete="off" />
                                        <input type="password" name="password" placeholder="Password" autocomplete="off" />
                                        <input type="password" name="confirm_password" placeholder="Confirm Password" autocomplete="off" />
                                        <div class="button-box">
                                            <button href="#" class="btn bg-common text-white btn-hover-primary w-100">
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
    function changeModule(event) {
        if (event.target.checked) {
            document.querySelector(".register-heading span").innerHTML = "Technician"
        } else {
            document.querySelector(".register-heading span").innerHTML = "Customer"
        }
    }
</script>
@endpush