@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="grid gap-4 md:grid-cols-3">
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <h2 class="text-sm font-medium text-gray-500">Available Laptops</h2>
                <p class="mt-2 text-2xl font-bold text-gray-800">Browse Catalog</p>
                <a href="{{ route('laptops.index') }}" class="mt-4 inline-block text-sm text-blue-600 hover:underline">
                    View laptops &rarr;
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <h2 class="text-sm font-medium text-gray-500">My Rentals</h2>
                <p class="mt-2 text-2xl font-bold text-gray-800">Active & Past</p>
                <a href="{{ route('rentals.index') }}" class="mt-4 inline-block text-sm text-blue-600 hover:underline">
                    Manage rentals &rarr;
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <h2 class="text-sm font-medium text-gray-500">Quick Action</h2>
                <p class="mt-2 text-2xl font-bold text-gray-800">New Rental</p>
                <a href="{{ route('rentals.create') }}" class="mt-4 inline-block text-sm text-blue-600 hover:underline">
                    Rent a laptop &rarr;
                </a>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Welcome, {{ auth()->user()->name }}!</h2>
            <p class="text-sm text-gray-600">Use the links above or the top navigation bar to browse inventory and manage your rentals.</p>
        </div>
    </div>
@endsection
