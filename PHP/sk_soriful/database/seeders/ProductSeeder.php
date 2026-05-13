<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

Class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'img' => '/products/men/adidas-men.png',
            'brand' => 'Adidas',
            'title' => 'Adidas shoe for men',
            'rating' => 4.5,
            'reviews' => 520,
            'sellPrice' => 5269.00,
            'orders' => '58',
            'mrp' => '6589.00',
            'discount' => 15,
            'category' => 'men'
        ]);

        Product::create([
            'img' => '/products/men/puma-women.png',
            'brand' => 'Puma',
            'title' => 'Puma shoe for women',
            'rating' => 4.5,
            'reviews' => 520,
            'sellPrice' => 5269.00,
            'orders' => '58',
            'mrp' => '6589.00',
            'discount' => 15,
            'category' => 'women'
        ]);
    }
}