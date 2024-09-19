<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pagyanan') }}</title>
    <link rel="icon" href="{{ asset('images/Pagyanan-logo.svg') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/blueGradient.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <x-footer></x-footer>

    {{-- CUSTOM TEXT COLORS --}}
    <style>
        .text-navy-900 {
            color: #003366;
            /* Navy Blue */
        }

        .text-navy-700 {
            color: #003366;
            /* Navy Blue */
        }

        .text-navy-600 {
            color: #003366;
            /* Navy Blue */
        }
    </style>
    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById('filter-dropdown');
            dropdown.classList.toggle('hidden'); // Toggles the 'hidden' class to show/hide the dropdown
        }
    </script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
