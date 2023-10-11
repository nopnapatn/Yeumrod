<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-rental-car</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.subviews.header')
    <main class="bg-white dark:bg-gray-900 min-h-screen">
        @yield('content')
    </main>
    @include('layouts.subviews.footer')
</body>

</html>