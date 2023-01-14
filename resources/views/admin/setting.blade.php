@extends("layouts.backend_master")

@section("title", "Admin Setting Page")
@section("breadcrumb_title", "Setting")
@section("breadcrumb_item", "Admin Setting Page")

@section("content")
<!-- Column -->
<div class="col-md-6 col-lg-8 offset-lg-2">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="text-left d-flex align-items-center gap-2" style="margin-bottom: 10px;">
                            <img src="{{asset($data->logo != null ? $data->logo : 'noImage.jpg')}}" class="imglogo" style="width: 60%;height: 40px;border: 1px solid #c1c1c1;margin-top: 5px;">
                            <p style="margin: 0;">Logo</p>
                        </div>
                        <input type="file" id="logo" name="logo" autocomplete="off" class="form-control shadow-none" onchange="logoUpdate(event)">
                        <span class="text-danger error error-logo"></span>
                    </div>
                    <div class="form-group">
                        <div class="text-left d-flex align-items-center gap-2" style="margin-bottom: 10px;">
                            <img src="{{asset($data->navicon != null ? $data->navicon : 'noImage.jpg')}}" class="imgnav" style="width: 50%;height: 85px;border: 1px solid #c1c1c1;margin-top: 5px;">
                            <p style="margin: 0;">Navicon</p>
                        </div>
                        <input type="file" id="navicon" name="navicon" autocomplete="off" class="form-control shadow-none" onchange="naviconUpdate(event)">
                        <span class="text-danger error error-navicon"></span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form onsubmit="Update(event)">
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" id="company_name" value="{{$data->company_name}}" autocomplete="off" class="form-control shadow-none">
                            <span class="text-danger error error-company_name"></span>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" id="mobile" value="{{$data->mobile}}" autocomplete="off" class="form-control shadow-none">
                            <span class="text-danger error error-mobile"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="{{$data->email}}" autocomplete="off" class="form-control shadow-none">
                            <span class="text-danger error error-email"></span>
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="url" name="facebook" id="facebook" value="{{$data->facebook}}" autocomplete="off" class="form-control shadow-none">
                            <span class="text-danger error error-facebook"></span>
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="url" name="instagram" id="instagram" value="{{$data->instagram}}" autocomplete="off" class="form-control shadow-none">
                            <span class="text-danger error error-instagram"></span>
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="url" name="twitter" id="twitter" value="{{$data->twitter}}" autocomplete="off" class="form-control shadow-none">
                            <span class="text-danger error error-twitter"></span>
                        </div>
                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input type="url" name="linkedin" id="linkedin" value="{{$data->linkedin}}" autocomplete="off" class="form-control shadow-none">
                            <span class="text-danger error error-linkedin"></span>
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-sm px-3 shadow-none">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    function Update(event) {
        event.preventDefault();
        var formdata = new FormData(event.target);
        $.ajax({
            url: location.origin + "/admin/setting",
            method: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            beforeSend: () => {
                $(".error").text("")
            },
            success: res => {
                if (!res.error) {
                    alert(res)
                } else {
                    $.each(res.error, (index, value) => {
                        $(".error-" + index).text(value)
                    })
                }
            }
        })
    }

    function logoUpdate(event) {
        event.preventDefault();

        var formdata = new FormData()
        formdata.append("logo", event.target.files[0]);
        $.ajax({
            url: location.origin + "/admin/logoUpdate",
            method: "POST",
            data: formdata,
            contentType: false,
            processData: false,
            beforeSend: () => {
                $(".error").text("")
            },
            success: res => {
                if (!res.error) {
                    document.querySelector('.imglogo').src = window.URL.createObjectURL(event.target.files[0])
                    $("#logo").val("")
                    alert(res)
                } else {
                    $.each(res.error, (index, value) => {
                        $(".error-" + index).text(value)
                    })
                }
            }
        })
    }

    function naviconUpdate(event) {
        event.preventDefault();

        var formdata = new FormData()
        formdata.append("navicon", event.target.files[0]);
        $.ajax({
            url: location.origin + "/admin/naviconUpdate",
            method: "POST",
            data: formdata,
            contentType: false,
            processData: false,
            beforeSend: () => {
                $(".error").text("")
            },
            success: res => {
                if (!res.error) {
                    document.querySelector('.imgnav').src = window.URL.createObjectURL(event.target.files[0])
                    $("#navicon").val("")
                    alert(res)
                } else {
                    $.each(res.error, (index, value) => {
                        $(".error-" + index).text(value)
                    })
                }
            }
        })
    }
</script>
@endpush