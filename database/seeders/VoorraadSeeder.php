<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoorraadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $voorraad = [
            [
                'product_id' => 1,
                'magazijn_id' => 1,
                'aantal' => 100,
            ],
            [
                'product_id' => 2,
                'magazijn_id' => 1,
                'aantal' => 50,
            ],
            [
                'product_id' => 3,
                'magazijn_id' => 2,
                'aantal' => 200,
            ],
            [
                'product_id' => 4,
                'magazijn_id' => 2,
                'aantal' => 75,
            ],
        ];
    }
}
