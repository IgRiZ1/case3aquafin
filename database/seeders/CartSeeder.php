<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carts = [
            [
                'user_id' => 1,
                'status' => 'open',
            ],
            [
                'user_id' => 2,
                'status' => 'open',
            ],
        ];
    }
}
