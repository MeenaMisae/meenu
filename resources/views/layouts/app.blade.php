<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="" class="font-afacad">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        <div class="drawer">
            <x-navigation />
        </div>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
<script>
    document.addEventListener('livewire:navigated', () => {
        const theme = localStorage.getItem('theme')
        document.querySelector('html').setAttribute('data-theme', theme);
    })
</script>

</html>
