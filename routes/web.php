<?php

use App\Http\Controllers\RentalController;
use App\Models\Laptop;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

// Public catalog, using the Laptop model directly
Route::get('/laptops', function (Request $request) {
    $query = Laptop::query();

    if ($request->filled('search')) {
        $terms = explode(' ', trim($request->search));

        foreach ($terms as $term) {
            $query->where(function ($q) use ($term) {
                $q->where('name', 'like', "%{$term}%")
                  ->orWhere('manufacturer', 'like', "%{$term}%")
                  ->orWhere('make', 'like', "%{$term}%")
                  ->orWhere('model', 'like', "%{$term}%");
            });
        }
    }

    $items = $query->get();

    return view('laptop.index', compact('items'));
})->name('laptops.index');

Route::get('/laptops/{laptops}', function (Laptop $laptops) {
    return view('laptops.show', compact('laptops'));
})->name('laptops.show');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::view('dashboard', 'dashboard')->name('dashboard');

    // My rentals, using the Rental model directly
    Route::get('/rentals', function () {
        $rentals = Rental::with('laptop')
            ->where('user_id', auth()->id())
            ->get();

        return view('rentals.index', compact('rentals'));
    })->name('rentals.index');

    // The rest of the rental routes still use the controller, since they have validation logic
 
   Route::get('/rentals/create', [RentalController::class, 'create'])->name('rentals.create');
    Route::post('/rentals', [RentalController::class, 'store'])->name('rentals.store');
    Route::get('/rentals/{rental}/edit', [RentalController::class, 'edit'])->name('rentals.edit');
    Route::put('/rentals/{rental}', [RentalController::class, 'update'])->name('rentals.update');
    Route::delete('/rentals/{rental}', [RentalController::class, 'destroy'])->name('rentals.destroy');
});

require __DIR__.'/settings.php';
