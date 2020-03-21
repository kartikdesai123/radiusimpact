<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ url('public/frontend/assets/images/icons/R7.png') }}" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/assets/fontawesome-5/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/frontend/assets/css/toastr/toastr.min.css') }}">
    <script>
        var baseurl = "{{ asset('/') }}";
    </script>
    <style>
        .is-invalid{
            border: 2px solid red;
        }
    </style>
    @if (!empty($plugincss)) 
    @foreach ($plugincss as $value) 
    @if(!empty($value))
    <link rel="stylesheet" href="{{ url('public/backend/assets/css/plugins/'.$value) }}">
    @endif
    @endforeach
    @endif
    @if (!empty($css)) 
    @foreach ($css as $value) 
    @if(!empty($value))
    <link rel="stylesheet" href="{{ url('public/backend/assets/'.$value) }}">
    @endif
    @endforeach
    @endif
</head>