<?php

use App\Models\Laptop;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('laptop inventory index loads correctly', function () {
    $response = $this->get('/laptops');

    $response->assertStatus(200);
});

test('single laptop details page loads correctly', function () {
    // Create a laptop record in the test database
    $laptop = Laptop::create([
        'name' => 'Dell Inspiron 15 3000',
        // Add any other required columns from your migration here
    ]);

    $response = $this->get("/laptops/{$laptop->id}");

    $response->assertStatus(200);
});
