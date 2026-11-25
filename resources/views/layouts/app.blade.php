<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Rentals</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen text-gray-800">

    <nav class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-xl font-bold text-gray-900">Laptop Rentals</a>

        <div class="flex items-center space-x-6 text-sm font-medium">
            <a href="{{ route('laptops.index') }}" class="text-gray-600 hover:text-gray-900">Browse Laptops</a>

            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                <a href="{{ route('rentals.index') }}" class="text-gray-600 hover:text-gray-900">My Rentals</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-800 cursor-pointer">Log Out</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Log In</a>
                <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">Register</a>
            @endauth
        </div>
    </nav>

    <main class="max-w-6xl mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>
