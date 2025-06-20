<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>

<body>
    @include('layouts.admin.sidebar')

    <div class="main-content">
        @include('layouts.admin.header')
        <div class="mt-3 ms-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#" class="text-success text-decoration-none">Library</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page" class="text-light">Data</li>
                </ol>
            </nav>
        </div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
