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
                    'rating' => 3.5,
                    'reviews' => 258,
                    'sellPrice' => 2589.00,
                    'orders' => '12',
                    'mrp' => '1258.00',
                    'discount' => 12,
                    'category' => 'men'
            ]);

            Product::create([
                    'img' => '/products/women/puma-women.png',
                    'brand' => 'Puma',
                    'title' => 'Puma shoe for women',
                    'rating' => 4.5,
                    'reviews' => 158,
                    'sellPrice' => 2689.00,
                    'orders' => '12',
                    'mrp' => '3858.00',
                    'discount' => 22,
                    'category' => 'women'
            ]);
    }
}