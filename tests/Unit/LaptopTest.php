<?php

use App\Models\LaptopInventory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('laptops index page displays available laptops', function () {
    $user = User::factory()->create();

    LaptopInventory::create([
        'brand' => 'Apple',
        'model' => 'MacBook Pro 14',
        'serial_number' => 'SN-2001',
        'daily_rate' => 45.00,
        'is_available' => true,
    ]);

    $response = $this->actingAs($user)->get('/laptops');

    $response->assertStatus(200);
    $response->assertSee('MacBook Pro 14');
});

test('laptops can be searched by brand or model', function () {
    $user = User::factory()->create();

    LaptopInventory::create([
        'brand' => 'Lenovo',
        'model' => 'ThinkPad X1',
        'serial_number' => 'SN-2002',
        'daily_rate' => 30.00,
        'is_available' => true,
    ]);

    LaptopInventory::create([
        'brand' => 'Dell',
        'model' => 'Latitude 5540',
        'serial_number' => 'SN-2003',
        'daily_rate' => 25.00,
        'is_available' => true,
    ]);

    $response = $this->actingAs($user)->get('/laptops?search=ThinkPad');

    $response->assertStatus(200);
    $response->assertSee('ThinkPad X1');
    $response->assertDontSee('Latitude 5540');
});
