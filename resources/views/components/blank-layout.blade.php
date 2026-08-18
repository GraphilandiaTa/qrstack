@props(["title" => 'Titolo di default'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.15.0/gsap.min.js" integrity="sha512-oJ8QbaQThQoJZ7oEv+29jfPM6CcP+zUxh3PKJs1vyOhx0UraUrE7PQgeItu3dOuCJyrzWpoYMsVjkkPEBzbUqw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-DIVg2tip.css') }}">
</head>
<body>
    {{ $slot }}

    <script src="{{ asset('build/assets/app-DUr89oQr.js') }}"></script>
</body>
</html>