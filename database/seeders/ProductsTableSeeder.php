<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::create(

        // );

        DB::table('products')->delete();

        $products = [
            [
                'name' => 'MacBook Pro',
                'slug' => 'macbook-pro',
                'details' => '15 inch, 1TB SSD, 32Gb RAM',
                'price' => 249999,
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, est, cumque aspernatur et ipsam non amet illum laboriosam necessitatibus aut consectetur eos voluptatem unde voluptates sed, quis inventore labore. Facere.'

            ],
            [
                'name' => 'Huwaie Matebook D15',
                'slug' => 'huwaie-matebook-d15',
                'details' => '14 inch, 512GB SSD, 8GB RAM',
                'price' => 80000,
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, est, cumque aspernatur et ipsam non amet illum laboriosam necessitatibus aut consectetur eos voluptatem unde voluptates sed, quis inventore labore. Facere.'

            ],
            [
                'name' => 'LG Washing Machine C12',
                'slug' => 'lg-washing-machine-c12',
                'details' => '8kg, Top opening,5000WH',
                'price' => 40000,
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, est, cumque aspernatur et ipsam non amet illum laboriosam necessitatibus aut consectetur eos voluptatem unde voluptates sed, quis inventore labore. Facere.'

            ],
            [
                'name' => 'Samsung J3-Pro',
                'slug' => 'samsung-j3-pro',
                'details' => '4GB RAM,12MP/8MP Front/Rear Camera ',
                'price' => 20000,
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, est, cumque aspernatur et ipsam non amet illum laboriosam necessitatibus aut consectetur eos voluptatem unde voluptates sed, quis inventore labore. Facere.'

            ],
            [
                'name' => 'IPad Apple',
                'slug' => 'ipad-apple',
                'details' => '4GB RAM,12MP/8MP Front/Rear Camera ',
                'price' => 25000,
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, est, cumque aspernatur et ipsam non amet illum laboriosam necessitatibus aut consectetur eos voluptatem unde voluptates sed, quis inventore labore. Facere.'

            ],
            [
                'name' => 'Refrigerator',
                'slug' => 'refrigerator',
                'details' => '24hrs cooling,5000MHZ',
                'price' => 28000,
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, est, cumque aspernatur et ipsam non amet illum laboriosam necessitatibus aut consectetur eos voluptatem unde voluptates sed, quis inventore labore. Facere.'

            ],
        ];

        Product::insert($products);
    }
}
