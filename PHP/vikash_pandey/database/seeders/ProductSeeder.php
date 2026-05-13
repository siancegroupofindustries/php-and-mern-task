<?php

namespace Database\Seeders;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product ::create([
             'img' => '/GenInfo/nike.png',
            'brand' => 'Adidas',
            'title' => 'Adidas shoe for men',
            'rating' => '4.6',
            'reviews' => '199',
            'sellPrice' => '7999.00',
            'orders' => '960',
            'mrp' => '9999.00',
            'discount' => '10',
            'category' => 'shoes',
        ]);

         Product ::create([
             'img' => '/GenInfo/skechers.jpg',
            'brand' => 'Adidas',
            'title' => 'Adidas shoe for men',
            'rating' => '3.6',
            'reviews' => '299',
            'sellPrice' => '8999.00',
            'orders' => '860',
            'mrp' => '9999.00',
            'discount' => '20',
            'category' => 'shoes',
        ]);


    }
}

?>
