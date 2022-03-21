<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            'id' => 1,
            'name' => 'Crucial SSD 480GB',
            'description' => 'SSD tercera generacion 1200 mb/s lectura y escritura',
            'unit_price' => 54.99,
            'stock' => 25,
            'maxStock' => 50,
            'categories_id' => 1,
            'created_at' => now()
        ]);
    }
}
