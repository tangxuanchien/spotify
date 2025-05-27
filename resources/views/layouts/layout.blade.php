<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/image') }}">
    @stack('header')
</head>

<body>
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <x-topbar>
        @auth
            {{ Auth::user()->name }}
        @endauth
        @guest
            Đăng nhập
        @endguest
    </x-topbar>

    @yield('content')

    <!-- Player Bar -->
    @include('layouts.playerbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
