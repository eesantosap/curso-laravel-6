<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<div, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('styles')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>