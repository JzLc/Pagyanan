<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Admin') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.24/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/Pagyanan-logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Tailwind CSS Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,1,0" />
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Make sure your Vite setup is correct -->
    @livewireStyles
</head>

<body class="bg-white">
    
    <!-- Sidebar -->
    <div class="flex min-h-screen">
        <div class="w-64 bg-white text-gray-100 flex-shrink-0">
            <div class="p-4">
                <x-application-logo></x-application-logo>
            </div>
            <nav class="">
                <x-admin-nav-link class="h-12 flex items-center text-opacity-90" href="{{ url('admin/dashboard') }}"
                    :active="request()->routeIs('admin.dashboard')">
                    <span class="material-symbols-outlined pr-8">home</span>
                    {{ __('Dashboard') }}
                </x-admin-nav-link>
                <x-admin-nav-link class="h-12 flex items-center text-opacity-90" href="{{ url('admin/users') }}"
                    :active="request()->routeIs(['admin.users', 'admin.user.show', 'admin.user.edit'])">
                    <span class="material-symbols-outlined pr-8">group</span>
                    {{ __('Users') }}
                </x-admin-nav-link>
                <x-admin-nav-link class="h-12 flex items-center text-opacity-90" href="{{ url('admin/listings') }}"
                    :active="request()->routeIs(['admin.listings', 'admin.listing.show', 'admin.listing.edit'])">
                    <span class="material-symbols-outlined pr-8">lists</span>
                    {{ __('Listings') }}
                </x-admin-nav-link>
                <x-admin-nav-link class="h-12 flex items-center text-opacity-90" href="{{ url('admin/archives') }}"
                    :active="request()->routeIs('admin.archives')">
                    <span class="material-symbols-outlined pr-8">archive</span>
                    {{ __('Archives') }}
                </x-admin-nav-link>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-grow flex flex-col">
            <!-- Top bar -->
            <div class="flex justify-between items-center bg-white px-6 py-4 shadow">
                <input type="text" placeholder="Type to search..."
                    class="border border-gray-300 px-4 py-2 bg-gray-100 rounded-lg w-1/4 focus:outline-none focus:text-gray-600">
                <x-application-logo></x-application-logo>
                <div class="flex items-center space-x-4">
                    <button class="relative p-2 text-gray-600 hover:bg-gray-200 rounded-full">
                        <span class="material-icons">notifications</span>
                        <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-1">3</span>
                    </button>
                    <div class="flex items-center space-x-2">
                        <!-- User Section -->
                        @auth
                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ms-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                            <div class="flex items-center hover:bg-gray-200 py-2 px-3 rounded-full">
                                                {{ Auth::user()->name }}
                                                <img src="https://via.placeholder.com/40" class="rounded-full ml-4" alt="profile picture">
                                            </div>
                                            <div class="ms-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Dashboard content -->
            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    
    <x-footer />
    
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
</body>

</html>
