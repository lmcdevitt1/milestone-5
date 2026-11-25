<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class laptopcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $items = Laptop::all();

        return view('laptops.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('laptops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'serial_number' => 'required|string',
            'daily_rate' => 'required|numeric',
            'is_available' => 'required|boolean',
        ]);

        Laptop::create($validated);

        return redirect()->route('laptops.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop): View
    {
        return view('laptops.show', compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laptop $laptop): View
    {
        /** @var view-string $view */
        $view = 'laptops.edit';

        return view($view, compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laptop $laptop): RedirectResponse
    {
        $validated = $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'serial_number' => 'required|string',
            'daily_rate' => 'required|numeric',
            'is_available' => 'required|boolean',
        ]);

        $laptop->update($validated);

        return redirect()->route('laptops.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laptop $laptop): RedirectResponse
    {
        $laptop->delete();

        return redirect()->route('laptops.index');
    }
}
