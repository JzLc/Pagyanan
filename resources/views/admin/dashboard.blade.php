<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <header class="bg-blue-600 text-white p-4">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
        </header>

        <main class="flex-1 p-4">
            <div class="bg-white rounded-lg shadow">
                <div class="border-b">
                    <nav class="flex">
                        <a href="{{ route('admin.users') }}" class="p-4 text-gray-600 hover:bg-gray-200">Users</a>
                        <a href="{{ route('admin.listings') }}" class="p-4 text-gray-600 hover:bg-gray-200">Listings</a>
                    </nav>
                </div>
                <div class="p-4">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
</html>