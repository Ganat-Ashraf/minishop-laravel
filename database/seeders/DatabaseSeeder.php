<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'FREE NIKE RN 2019 ID',
                'price' => 120,
                'offer_price' => null, // السعر بعد الخصم
                'image' => 'product-1.png',
                'description' => '',
            ],
            [
                'name' => 'LIFESTYLE SHOES CLASSIC',
                'price' => 120,
                'offer_price' => 80,
                'image' => 'product-2.png',
                'description' => '50% OFF',
            ],
            [
                'name' => 'CASUAL LEATHER LOAFERS',
                'price' => 150,
                'offer_price' => null, // لو مفيش عليه خصم
                'image' => 'product-3.png',
                'description' => '',
            ],
            [
                'name' => 'SPORT RUNNING SNEAKERS',
                'price' => 195,
                'offer_price' => null,
                'image' => 'product-4.png',
                'description' => '',
            ],
            [
                'name' => 'URBAN ATHLETIC RUNNERS',
                'price' => 110,
                'offer_price' => null,
                'image' => 'product-5.png',
                'description' => '',
            ],
            [
                'name' => 'RETRO STREETWEAR KICKS',
                'price' => 135,
                'offer_price' => 70,
                'image' => 'product-6.jpg',
                'description' => '50% OFF',
            ],
            [
                'name' => 'PERFORMANCE TRAINING SHOES',
                'price' => 140,
                'offer_price' => null,
                'image' => 'product-7.jpg',
                'description' => '',
            ],
            [
                'name' => 'EVERYDAY MINIMALIST SNEAKERS',
                'price' => 75,
                'offer_price' => null,
                'image' => 'product-8.jpg',
                'description' => '',
            ],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}
