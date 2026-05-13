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
            'img' => 'productImage/women/shoe.jpg',
            'brand' => 'Khadims',
            'title' => 'Shoe',
            'rating' => 2,
            'reviews' => 10,
            'sellPrice' => 100,
            'orders' => '5',
            'mrp' => '200',
            'discount' => 50,
            'category' => 'Women'
        ]);

         Product::create([
            'img' => 'productImage/kids/kito.jpg',
            'brand' => 'Khadims',
            'title' => 'Kito',
            'rating' => 3,
            'reviews' => 15,
            'sellPrice' => 200,
            'orders' => '6',
            'mrp' => '400',
            'discount' => 50,
            'category' => 'Kids'
        ]);
    }
}
