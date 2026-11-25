<?php

namespace Database\Seeders;

use App\Models\Laptop;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User', 'password' => bcrypt('password')]
        );

        $laptops = [
            // Dell models (SN-1001 to SN-1018)
            ['brand' => 'Dell', 'model' => 'Inspiron 15 3000', 'serial_number' => 'SN-1001', 'daily_rate' => 100.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Inspiron 16 Plus 7640', 'serial_number' => 'SN-1002', 'daily_rate' => 100.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'XPS 9350', 'serial_number' => 'SN-1003', 'daily_rate' => 100.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'XPS 9440', 'serial_number' => 'SN-1004', 'daily_rate' => 100.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'XPS 9640', 'serial_number' => 'SN-1005', 'daily_rate' => 100.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Inspiron 14 5440', 'serial_number' => 'SN-1006', 'daily_rate' => 100.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Inspiron 14 Plus 7440', 'serial_number' => 'SN-1007', 'daily_rate' => 100.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Inspiron 15 3530', 'serial_number' => 'SN-1008', 'daily_rate' => 100.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Inspiron 16 5640', 'serial_number' => 'SN-1009', 'daily_rate' => 100.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'XPS 13 9340', 'serial_number' => 'SN-1010', 'daily_rate' => 120.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'XPS 13 9345', 'serial_number' => 'SN-1011', 'daily_rate' => 120.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'XPS 15 9530', 'serial_number' => 'SN-1012', 'daily_rate' => 130.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'XPS 17 9730', 'serial_number' => 'SN-1013', 'daily_rate' => 140.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Dell Pro 13 Plus', 'serial_number' => 'SN-1014', 'daily_rate' => 130.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Dell Pro 14 Plus', 'serial_number' => 'SN-1015', 'daily_rate' => 130.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Dell Pro 16 Plus', 'serial_number' => 'SN-1016', 'daily_rate' => 140.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Dell Pro Max 14', 'serial_number' => 'SN-1017', 'daily_rate' => 150.00, 'is_available' => true],
            ['brand' => 'Dell', 'model' => 'Dell Pro Max 16', 'serial_number' => 'SN-1018', 'daily_rate' => 150.00, 'is_available' => true],

            // Apple models (SN-1001 to SN-1018)
            ['brand' => 'Apple', 'model' => 'MacBook Neo (A3404)', 'serial_number' => 'SN-1001', 'daily_rate' => 110.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Air 15" (2026 M5)', 'serial_number' => 'SN-1002', 'daily_rate' => 110.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Air 13" (2026 M5)', 'serial_number' => 'SN-1003', 'daily_rate' => 110.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Air 15" (2025 M4)', 'serial_number' => 'SN-1004', 'daily_rate' => 110.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Air 13" (2025 M4)', 'serial_number' => 'SN-1005', 'daily_rate' => 110.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Air 15" (2024 M3)', 'serial_number' => 'SN-1006', 'daily_rate' => 110.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Air 13" (2024 M3)', 'serial_number' => 'SN-1007', 'daily_rate' => 110.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 14" (2026 M5 Pro)', 'serial_number' => 'SN-1008', 'daily_rate' => 150.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 14" (2026 M5 Max)', 'serial_number' => 'SN-1009', 'daily_rate' => 150.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 16" (2026 M5 Pro)', 'serial_number' => 'SN-1010', 'daily_rate' => 150.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 16" (2026 M5 Max)', 'serial_number' => 'SN-1011', 'daily_rate' => 150.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 14" (2025 M5 Base)', 'serial_number' => 'SN-1012', 'daily_rate' => 150.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 14" (2024 M4)', 'serial_number' => 'SN-1013', 'daily_rate' => 150.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 14" (2024 M4 Pro)', 'serial_number' => 'SN-1014', 'daily_rate' => 150.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 14" (2024 M4 Max)', 'serial_number' => 'SN-1015', 'daily_rate' => 160.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 16" (2024 M4 Pro)', 'serial_number' => 'SN-1016', 'daily_rate' => 160.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Pro 16" (2024 M4 Max)', 'serial_number' => 'SN-1017', 'daily_rate' => 160.00, 'is_available' => true],
            ['brand' => 'Apple', 'model' => 'MacBook Air 13" (2022 M2)', 'serial_number' => 'SN-1018', 'daily_rate' => 100.00, 'is_available' => true],
        ];

        foreach ($laptops as $laptop) {
            Laptop::firstOrCreate(
                [
                    'brand' => $laptop['brand'],
                    'serial_number' => $laptop['serial_number'],
                ],
                $laptop
            );
        }
    }
}
