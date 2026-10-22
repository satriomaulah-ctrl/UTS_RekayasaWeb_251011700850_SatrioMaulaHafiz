<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') - Toko Mainan Ceria</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <header>
        @include('partials.header')
    </header>
    <main class="flex-grow-1">
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>
