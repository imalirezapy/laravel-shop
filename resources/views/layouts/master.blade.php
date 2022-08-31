<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="route" id="route" content="{{request()->route()->getName()}}">
    <meta name="token" id="_token" content="{{csrf_token()}}">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/storage/css/style.css" />
    <link rel="stylesheet" href="/fonts/fontawesome/css/all.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    />
    @section('heade')
</head>
@php
    $dontshow = ! in_array(request()->route()->getName(), ['login', 'register', 'verify'])
@endphp
<body class="@if($dontshow)  body-bg @endif">
    <div id="loader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    @if($dontshow)
        @include('layouts.header')
    @endif

    @yield('content')

    @include('layouts.footer')

    @yield('script')

</body>
</html>
