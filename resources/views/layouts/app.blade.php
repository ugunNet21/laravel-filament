<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    <!-- Link to Bootstrap CSS or other CSS files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Navigasi atau header area -->
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        <!-- Footer area -->
    </footer>

    <!-- Link to jQuery and Bootstrap JavaScript or other JS files -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
