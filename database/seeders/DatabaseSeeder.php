<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Products::create([
        'name' => 'FREE NIKE RN 2019 ID',
        'price' => 120.00,
        'image' => 'product-1.jpg',
        'description' => '',
    ]);
    }
}
