<?php

namespace Database\Seeders;

use App\Models\Shoe;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Shoe::factory()->create([
            'brand' => 'Nike',
            'price' => '199',
            'gender' => 'F',
        ]);
        Shoe::factory()->create([
            'brand' => 'Puma',
            'price' => '249',
            'gender' => 'F',
        ]);
        Shoe::factory()->create([
            'brand' => 'adidas',
            'price' => '215',
            'gender' => 'M',
        ]);
        Shoe::factory()->create([
            'brand' => 'Joma',
            'price' => '159',
            'gender' => 'M',
        ]);
    }
}
