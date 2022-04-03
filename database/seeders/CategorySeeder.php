<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Almacenamiento',            
                'created_at' => now()
            ],
            [
                'name' => 'Monitores',            
                'created_at' => now()
            ],
            [
                'name' => 'Teclados',            
                'created_at' => now()
            ],                        
        ]);
    }
}
