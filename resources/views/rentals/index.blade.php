@extends('layouts.app')

@section('title', 'Rentals')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-800">Laptop Rentals</h1>
            <a href="{{ route('rentals.create') }}" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                Add Rental
            </a>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
            @if ($rentals->isEmpty())
                <p class="text-sm text-gray-600">You don't have any rentals yet.</p>
            @else
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="border-b border-gray-200 text-gray-600">
                            <th class="py-2">Laptop</th>
                            <th class="py-2">Start Date</th>
                            <th class="py-2">End Date</th>
                            <th class="py-2">Status</th>
                            <th class="py-2 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($rentals as $rental)
                            <tr>
                                <td class="py-3 font-medium text-gray-800">
                                    {{ $rental->laptop->brand ?? '' }} {{ $rental->laptop->model ?? 'Laptop #' . $rental->laptop_id }}
                                </td>
                                <td class="py-3 text-gray-600">{{ $rental->start_date }}</td>
                                <td class="py-3 text-gray-600">{{ $rental->end_date }}</td>
                                <td class="py-3 text-gray-600">{{ $rental->status }}</td>
                                <td class="py-3 text-right space-x-2">
                                    <a href="{{ route('rentals.edit', $rental) }}" class="text-blue-600 hover:underline">Edit</a>
                                    <form method="POST" action="{{ route('rentals.destroy', $rental) }}" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
