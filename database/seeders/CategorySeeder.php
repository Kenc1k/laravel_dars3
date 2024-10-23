<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Ensure the model is imported

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed category data
        Category::create(['name' => 'Example Category']);
    }
}
