@extends('layouts.app')

@section('title', 'Laptop Details')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
        <a href="{{ route('laptops.index') }}" class="text-sm text-blue-600 hover:underline">&larr; Back to Laptops</a>

        <div class="mt-4 flex items-start justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    {{ $laptop->brand ?? '' }} {{ $laptop->model ?? $laptop->name ?? 'Laptop #' . $laptop->id }}
                </h1>

                @if (!empty($laptop->serial_number))
                    <p class="text-sm text-gray-500 mt-1">Serial Number: {{ $laptop->serial_number }}</p>
                @endif
            </div>

            <span class="text-xs font-medium px-2.5 py-1 rounded {{ ($laptop->is_available ?? true) ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                {{ ($laptop->is_available ?? true) ? 'Available' : 'Rented' }}
            </span>
        </div>

        @if (!empty($laptop->description))
            <p class="text-sm text-gray-600 mt-4">{{ $laptop->description }}</p>
        @endif

        @if (isset($laptop->daily_rate))
            <p class="text-xl font-semibold text-blue-600 mt-4">${{ number_format($laptop->daily_rate, 2) }} / day</p>
        @endif

        <div class="mt-6 pt-4 border-t border-gray-100 flex items-center gap-4">
            @auth
                <a href="{{ route('rentals.create', ['laptop_id' => $laptop->id]) }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                    Rent This Laptop
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                    Log In to Rent
                </a>
            @endauth
        </div>
    </div>
@endsection
