<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main class="py-4 text-center">
        @yield('content')
    </main>
</body>
</html>