<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Red Ring',
                'image' => 'images\ring3.jpg',
                'price' => 129,
                'description' => 'Ring'
            ],
            [
                'name' => 'Lover Bracelet',
                'image' => 'images\bracelet1.jpg',
                'price' => 29,
                'description' => 'Bracelet'
            ],
            [
                'name' => 'Golden Earrings',
                'image' => 'images\earrings1.jpg',
                'price' => 399,
                'description' => 'Earrings'
            ],
            [
                'name' => 'Boys Chain',
                'image' => 'images\chain1.jpg',
                'price' => 19,
                'description' => 'Chain'
            ],
            [
                'name' => 'Glitter Ring',
                'image' => 'images\ring2.jpg',
                'price' => 119,
                'description' => 'Ring'
            ],
            [
                'name' => 'Golden Bracelet',
                'image' => 'images\bracelet2.jpg',
                'price' => 450,
                'description' => 'Bracelet'
            ],
            [
                'name' => 'ButterFly Chain',
                'image' => 'images\chain2.jpg',
                'price' => 50,
                'description' => 'Chain'
            ],
            [
                'name' => 'Platinum Chain',
                'image' => 'images\platinumchain.jpg',
                'price' => 4550,
                'description' => 'Chain'
            ],
            [
                'name' => 'Platinum Ring',
                'image' => 'images\platinumring.jpg',
                'price' => 4650,
                'description' => 'Ring'
            ],
            [
                'name' => 'Tricolor Bracelet',
                'image' => 'images\tricolorbracelet.jpg',
                'price' => 699,
                'description' => 'Bracelet'
            ],
            [
                'name' => 'Moon Chain',
                'image' => 'images\moonchain.jpg',
                'price' => 69,
                'description' => 'Chain'
            ]

        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
        
    }
}
