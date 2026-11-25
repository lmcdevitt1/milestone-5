<?php

use App\Models\LaptopInventory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('guests cannot access rentals', function () {
    $this->get('/rentals')->assertRedirect('/login');
});

test('authenticated user can create a rental', function () {
    $user = User::factory()->create();
    $laptop = LaptopInventory::create([
        'brand' => 'Dell',
        'model' => 'XPS 15',
        'serial_number' => 'SN-1001',
        'daily_rate' => 25.00,
        'is_available' => true,
    ]);

    $response = $this->actingAs($user)->post('/rentals', [
        'laptop_id' => $laptop->id,
        'start_date' => '2026-12-01',
        'end_date' => '2026-12-05',
    ]);

    $response->assertRedirect();
    $this->assertDatabaseHas('rentals', [
        'user_id' => $user->id,
        'laptop_id' => $laptop->id,
        'status' => 'pending',
    ]);
});
