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
                                <div class="d-flex gap-1" style="position: absolute;top: 15px;right: 80px;background: #42d5c1;padding: 5px;">
                                    <input type="checkbox" value="technician" id="technician" style="height: 15px;margin: 0;position: relative;top: 1px;width: 17px;" />
                                    <label for="technician" style="cursor:pointer;margin: 0;color:white;">
                                        Technician
                                    </label>
                                </div>
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
                                            <a href="#" class="btn btn-primary text-white btn-hover-warning w-100">
                                                <span>Login</span>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container" style="position: relative;">
                                <div class="d-flex gap-1" style="position: absolute;top: 15px;right: 80px;background: #42d5c1;padding: 5px;">
                                    <input type="checkbox" value="technician" id="technician1" style="height: 15px;margin: 0;position: relative;top: 1px;width: 17px;" />
                                    <label for="technician1" style="cursor:pointer;margin: 0;color:white;">
                                        Technician
                                    </label>
                                </div>
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="name" placeholder="Name" autocomplete="off" />
                                        <input type="text" name="username" placeholder="Username" autocomplete="off" />
                                        <input name="user-email" placeholder="Email" type="email" autocomplete="off" />
                                        <input type="text" name="mobile" placeholder="Phone" autocomplete="off" />
                                        <input type="password" name="password" placeholder="Password" autocomplete="off" />
                                        <input type="password" name="confirm_password" placeholder="Confirm Password" autocomplete="off" />
                                        <div class="button-box">
                                            <button href="#" class="btn btn-primary text-white btn-hover-warning w-100">
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