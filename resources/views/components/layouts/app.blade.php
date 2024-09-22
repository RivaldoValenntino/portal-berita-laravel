<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    @livewire('partials.navbar')
    {{ $slot }}
    @livewire('partials.footer')
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/hc-sticky.js') }}"></script>
    <script src="{{ asset('js/splide.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
