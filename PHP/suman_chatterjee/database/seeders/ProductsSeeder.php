<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([

            'img' => 'products_image/men/shoe.jpg',
            'brand' => 'nike',
            'title' => 'School Shoe',
            'rating' => 4,
            'reviews' => 10,
            'sellPrice' => 100,
            'orders' => '10',
            'mrp' => '200',
            'discount' => 50,
            'category' => 'Men'


        ]);




        Product::create([

            'img' => 'products_image/women/slipper.jpg',
            'brand' => 'ajanta',
            'title' => 'Regular Slipper',
            'rating' => 2,
            'reviews' => 8,
            'sellPrice' => 400,
            'orders' => '20',
            'mrp' => '800',
            'discount' => 50,
            'category' => 'Women'


        ]);
    }
}
