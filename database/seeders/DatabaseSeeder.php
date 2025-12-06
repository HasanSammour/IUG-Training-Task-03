<?php

namespace Database\Seeders;

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
        // ! Step 04: Register The ProductSeeder in DataBaseSeeder class
        $this->call(ProductSeeder::class);
        // ! Step 05: Run The seeder: php artisan db:seed
    }
}
