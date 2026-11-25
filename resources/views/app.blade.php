<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laptop Rentals')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-6">
                <a href="{{ route('dashboard') }}" class="text-lg font-bold text-gray-800">Laptop Rentals</a>
                <a href="{{ route('laptops.index') }}" class="text-sm text-gray-600 hover:text-blue-600">Browse Laptops</a>
                @auth
                    <a href="{{ route('rentals.index') }}" class="text-sm text-gray-600 hover:text-blue-600">My Rentals</a>
                @endauth
            </div>

            <div class="flex items-center space-x-4">
                @auth
                    <span class="text-sm text-gray-600">{{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-600 hover:underline font-medium">
                            Log Out
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-blue-600">Log In</a>
                    <a href="{{ route('register') }}" class="text-sm bg-blue-600 text-white px-3 py-1.5 rounded-md hover:bg-blue-700">Sign Up</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-8">
        @yield('content')
    </main>

</body>
</html>
