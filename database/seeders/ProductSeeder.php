<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ! Step 03: Create Seeder class and add dummy Data in it
        $products = [
            ['name' => 'Laptop', 'price' => 999.90],
            ['name' => 'Smartphone', 'price' => 599.99],
            ['name' => 'Headphones', 'price' => 149.50],
            ['name' => 'Keyboard', 'price' => 79.00],
            ['name' => 'Mouse', 'price' => 29.99]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
