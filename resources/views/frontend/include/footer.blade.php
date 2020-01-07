<script src="{{ url('public/frontend/assets/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ url('public/frontend/assets/js/jquery.js') }}"></script>
<script src="{{ url('public/frontend/assets/js/popper.js') }}"></script>
<script src="{{ url('public/frontend/assets/js/bootsrap.js') }}"></script>
<script src="{{ url('public/frontend/assets/js/script.js') }}"></script>
<script src="{{ url('public/frontend/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ url('public/frontend/assets/js/toastr/toastr.min.js') }}"></script>
<script src="{{ url('public/frontend/assets/js/comman_function.js') }}"></script>
<script src="{{ url('public/frontend/assets/js/ajaxfileupload.js') }}"></script>
<script src="{{ url('public/frontend/assets/js/jquery.form.min.js') }}"></script>

@if (!empty($pluginjs)) 
@foreach ($pluginjs as $value) 
<script src="{{ url('public/backend/assets/js/plugins/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif
@if (!empty($js)) 
@foreach ($js as $value) 
<script src="{{ url('public/frontend/assets/js/customjs/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif



<script>
jQuery(document).ready(function () {
    @if (!empty($funinit))
            @foreach ($funinit as $value)
    {{ $value }}
    @endforeach
            @endif
});
</script>