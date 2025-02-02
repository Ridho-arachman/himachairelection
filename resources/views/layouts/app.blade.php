<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

    {{-- Header --}}
    @include('partials.header')
    {{-- Header End --}}
    @include('partials.success')
    @include('partials.errors')
    {{-- Main --}}
    <main class="flex-1 container mx-auto px-6 py-12 flex justify-center items-center mt-28 ">
        @yield('content')
    </main>
    {{-- Main End --}}

    {{-- Footer --}}
    @include('partials.footer')
    {{-- Footer End --}}

</body>

</html>
