<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class laptopInventory extends Controller
{
    public function index(): View
    {
        $items = [
            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Dell',
                'make' => 'Inspiron',
                'model' => '15 3000',
                'price' => '100.00',
                'price_range' => '100.00 - 110.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Dell',
                'make' => 'Inspiron',
                'model' => '16 Plus 7640',
                'price' => '100.00',
                'price_range' => '100.00 - 110.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Dell',
                'make' => 'XPS',
                'model' => '9350',
                'price' => '100.00',
                'price_range' => '100.00 - 110.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Dell',
                'make' => 'XPS',
                'model' => '9440',
                'price' => '100.00',
                'price_range' => '100.00 - 110.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Dell',
                'make' => 'XPS',
                'model' => '9640',
                'price' => '100.00',
                'price_range' => '100.00 - 110.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Neo',
                'model' => 'A3404',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 15" (2026 M5)',
                'model' => 'A3449',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 13" (2026 M5)',
                'model' => 'A3448',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 15" (2025 M4)',
                'model' => 'A3240',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 13" (2025 M4)',
                'model' => 'A3241',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 15" (2024 M3)',
                'model' => 'A3113',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Air 13" (2024 M3)',
                'model' => 'A3448',
                'price' => '110.00',
                'price_range' => '110.00 - 120.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 14" (2026 M5 Pro)',
                'model' => 'A3451',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 14" (2026 M5 Max)',
                'model' => 'A3450',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 16" (2026 M5 Pro)',
                'model' => 'A3450',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 16" (2026 M5 Max)',
                'model' => 'A3450',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ],

            (object) [
                'brand' => 'Apple',
                'model' => 'MacBook Pro 14" (2025 M5 Base)',
                'serial_number' => 'SN12345',
                'daily_rate' => '150.00',
                'is_available' => 1,
            ],

            (object) [
                'name' => 'Laptop',
                'manufacturer' => 'Apple',
                'make' => 'MacBook Pro 14" (2024 , M4) ',
                'model' => 'A3450',
                'price' => '150.00',
                'price_range' => '150.00 - 160.00/mo',
            ],
        ];

        return view('app', ['items' => $items]);
    }
}
