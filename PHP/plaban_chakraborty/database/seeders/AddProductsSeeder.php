<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class AddProductsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([

            'img' => 'product_image/kids/slipper.png',
            'brand' => 'khadims',
            'title' => 'Slipper',
            'rating' => 2,
            'reviews' => 10,
            'sellPrice' => 100,
            'orders' => '20',
            'mrp' => '200',
            'discount' => 50,
            'category' => 'Kids'


        ]);

        Product::create([

            'img' => 'product_image/men/shoe.png',
            'brand' => 'ajanta',
            'title' => 'Shoe',
            'rating' => 1,
            'reviews' => 11,
            'sellPrice' => 500,
            'orders' => '30',
            'mrp' => '1000',
            'discount' => 50,
            'category' => 'Men'


        ]);
    }
}
