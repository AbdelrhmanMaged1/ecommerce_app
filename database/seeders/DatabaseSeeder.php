<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Mechanical Keyboard', 'price' => 120.00, 'description' => 'Clicky keys']);
        Product::create(['name' => 'Gaming Mouse', 'price' => 50.00, 'description' => 'High DPI']);
        Product::create(['name' => '4K Monitor', 'price' => 300.00, 'description' => 'Crisp display']);
    }
}