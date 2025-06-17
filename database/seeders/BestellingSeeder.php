<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BestellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bestellingen = [
            [
                'user_id' => 1,
                'cart_id' => 1,
                'magazijn_id' => 2,
                'status' => 'Compleet',
            ],
            [
                'user_id' => 2,
                'cart_id' => 2,
                'magazijn_id' => 1,
                'status' => 'in behandeling',
            ],
        ];
    }
}
