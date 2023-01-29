<script src="{{asset('frontend')}}/assets/js/vendor/vendor.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/plugins/plugins.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/notify.js"></script>
<script src="{{asset('frontend')}}/assets/js/main.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('webjs')