<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans">
    <header>
    </header>

    <main class="flex">
        <div class="h-screen">
            @yield('sidebar')
        </div>
        <div class="w-full">
             @yield('content')
        </div>
    </main>

    <footer>
        </footer>
</body>
</html>