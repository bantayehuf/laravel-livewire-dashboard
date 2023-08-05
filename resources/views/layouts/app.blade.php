<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/assets/scss/app.scss', 'resources/assets/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased bg-gray-50 dark:bg-gray-800">
    <x-layout.navbar />

    <x-layout.sidebar />

    <div x-data>

        <main :class="$store.showSidebar.on ? 'lg:ml-64' : 'lg:ml-0'" x-transition.duration.500ms
            class="p-4 lg:ml-0 h-auto pt-20">
            {{ $slot }}
        </main>

    </div>

    {{-- @stack('modals') --}}

    @livewireScripts
</body>

</html>
