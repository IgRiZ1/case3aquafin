<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagazijnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $magazijn = [
            [
                'stad' => 'Antwerpen',
                'adres' => 'Korte Koepoortstraat 10',
                'postcode' => 2000,
            ],
            [
                'stad' => 'Gent',
                'adres' => 'Voldersstraat 10',
                'postcode' => 9000,
            ],
            [
                'stad' => 'Brussel',
                'adres' => 'Rue de la Loi 10',
                'postcode' => 1000,
            ],
            [
                'stad' => 'kleine stad',
                'adres' => 'Kleine straat 1',
                'postcode' => 1234,
            ]
        ];
    }
}
