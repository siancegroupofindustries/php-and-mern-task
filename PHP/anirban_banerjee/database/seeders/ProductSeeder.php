<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([
            'img' => 'product_image/men/sreelethers.png',
            'brand' => 'Sreelethers',
            'title' => 'Men Sports Shoe',
            'rating' => 3,
            'reviews' => 200,
            'sellPrice' => 1000.00,
            'orders' => '100',
            'mrp' => '2000.00',
            'discount' => '50',
            'category' => 'men'
        ]);


        Product::create([
            'img' => 'product_image/women/khadims.png',
            'brand' => 'Khadims',
            'title' => 'Women Sports Shoe',
            'rating' => 2,
            'reviews' => 250,
            'sellPrice' => 2000.00,
            'orders' => '200',
            'mrp' => '4000.00',
            'discount' => '50',
            'category' => 'Women'
        ]);
    }
}
