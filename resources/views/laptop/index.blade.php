@extends('layouts.app')

@section('title', 'Browse Laptops')

@section('content')
    <div class="flex flex-col gap-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <h1 class="text-2xl font-bold text-gray-800">Available Laptops</h1>

            <form method="GET" action="{{ route('laptops.index') }}" class="flex gap-2">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search laptops..."
                    class="rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:outline-none">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
                    Search
                </button>
            </form>
        </div>

        @if ($items->isEmpty())
            <div class="bg-white p-6 rounded-xl border border-gray-200 text-sm text-gray-600">
                No laptops found in inventory.
            </div>
        @else
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($items as $laptop)
                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm flex flex-col justify-between">
                        <div>
                            <h2 class="text-lg font-bold text-gray-800">
                                {{ $laptop->brand ?? '' }} {{ $laptop->model ?? $laptop->name ?? 'Laptop #' . $laptop->id }}
                            </h2>
                            @if (!empty($laptop->serial_number))
                                <p class="text-xs text-gray-500 mt-1">SN: {{ $laptop->serial_number }}</p>
                            @endif
                            @if (isset($laptop->daily_rate))
                                <p class="text-base font-semibold text-blue-600 mt-3">${{ number_format($laptop->daily_rate, 2) }} / day</p>
                            @endif
                        </div>

                        <div class="mt-6 flex items-center justify-between">
                            <span class="text-xs font-medium px-2.5 py-0.5 rounded {{ ($laptop->is_available ?? true) ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ ($laptop->is_available ?? true) ? 'Available' : 'Rented' }}
                            </span>
                            <a href="{{ route('laptops.show', $laptop) }}" class="text-sm font-medium text-blue-600 hover:underline">
                                View Details &rarr;
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
