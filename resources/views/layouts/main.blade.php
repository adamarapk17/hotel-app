<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Di's Hotel</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('asset/css.css')}}" >
</head>
<body>
    @include('partials.navbar')
    @yield('landingpage')
    @yield('rooms')
    @yield('buknow')
    @yield('order')
    @include('partials.footer')
</body>
</html>
