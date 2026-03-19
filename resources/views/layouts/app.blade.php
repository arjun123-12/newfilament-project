<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','My Website')</title>

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="circle-pattern">

    <!-- Navbar -->
    @include('includes.header')

    <!-- Main Content -->
    <div class="container-fluid p-0">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('includes.footer')

</body>

</html>