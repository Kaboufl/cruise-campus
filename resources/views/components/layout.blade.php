<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen min-w-screen font-montserrat">
    <main class="h-[100dvh] max-w-screen-sm mx-auto">
        {{ $slot }}
    </main>
</body>
</html>
