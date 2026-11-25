@props(['title' => 'Laptop Rentals'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 antialiased">
    <nav class="bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-xl font-bold text-gray-900">
            Laptop Rentals
        </a>

        <div class="flex items-center gap-6 text-sm font-medium">
            <a href="{{ route('laptops.index') }}" class="text-gray-700 hover:text-gray-900">
                Browse Laptops
            </a>

            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-gray-900">
                    Dashboard
                </a>
                <a href="{{ route('rentals.index') }}" class="text-gray-700 hover:text-gray-900">
                    My Rentals
                </a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-800 cursor-pointer">
                        Log Out
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">
                    Log In
                </a>
                <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900">
                    Register
                </a>
            @endauth
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-8">
        {{ $slot ?? '' }}
        @yield('content')
    </main>
</body>
</html>
