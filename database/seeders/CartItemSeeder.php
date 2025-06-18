<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cartItems = [
            [
                'cart_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
            ],
            [
                'cart_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
            ],
            [
                'cart_id' => 2,
                'product_id' => 3,
                'quantity' => 5,
            ],
        ];
    }
}
