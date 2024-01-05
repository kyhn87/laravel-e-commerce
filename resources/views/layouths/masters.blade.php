<!DOCTYPE html>
<html lang="{{config('app.locale')}}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('layouths.partials.head')
    @yield('head')
</head>

<body id="commerce">
    @include('layouths.partials.navbar')
    @yield('content')
   @include('layouths.partials.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('footer')
</body>
</html>