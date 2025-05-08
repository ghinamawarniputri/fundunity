<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fundunity')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body>
    @include('component.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('component.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html> 