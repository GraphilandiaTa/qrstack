<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QrStack</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <style>
        .container {
        width: 100%;
        height: 100%;
        background: radial-gradient(
            125% 125% at -2% 101%,
            rgba(245, 87, 2, 1) 10.5%,
            rgba(245, 120, 2, 1) 16%,
            rgba(245, 140, 2, 1) 17.5%,
            rgba(245, 170, 100, 1) 25%,
            rgba(238, 174, 202, 1) 40%,
            rgba(202, 179, 214, 1) 65%,
            rgba(148, 201, 233, 1) 100%
        );
        }

    </style>
    <main class='h-screen overflow-hidden '>
        <div class="container flex items-center justify-center">
            <h1 class="text-center text-6xl text-white">QrStack</h1>
        </div>
    </main>
</body>
</html>