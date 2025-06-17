<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->delete();

        $producten = [
            [
                'name' => 'Veiligheidshelm (met kinband)',
                'image' => 'veiligheidshelm.jpg',
                'description' => 'Stevige veiligheidshelm met kinband voor optimale hoofdbescherming.',
                'price' => 0
            ],
            [
                'name' => 'Oordoppen / gehoorkappen',
                'image' => 'oordoppen.jpg',
                'description' => 'Comfortabele oordoppen en gehoorkappen voor gehoorbescherming.',
                'price' => 0
            ],
            [
                'name' => 'Veiligheidsbril / gelaatsscherm',
                'image' => 'veiligheidsbril.jpg',
                'description' => 'Veiligheidsbril en gelaatsscherm tegen spatten en stof.',
                'price' => 0
            ],
            [
                'name' => 'Stofmaskers (FFP2, FFP3)',
                'image' => 'stofmaskers.jpg',
                'description' => 'FFP2 en FFP3 stofmaskers voor ademhalingsbescherming.',
                'price' => 0
            ],
            [
                'name' => 'Werkhandschoenen (snijvast, chemisch resistent, elektrisch geïsoleerd)',
                'image' => 'werkhandschoenen.jpg',
                'description' => 'Diverse werkhandschoenen voor optimale handbescherming.',
                'price' => 0
            ],
            [
                'name' => 'Veiligheidsschoenen (S3, antistatisch, stalen tip)',
                'image' => 'veiligheidsschoenen.jpg',
                'description' => 'S3 veiligheidsschoenen met stalen tip en antistatische zool.',
                'price' => 0
            ],
            [
                'name' => 'Werklaarzen (PVC, nitril, met stalen zool)',
                'image' => 'werklaarzen.jpg',
                'description' => 'Werklaarzen van PVC/nitril met stalen zool voor extra veiligheid.',
                'price' => 0
            ],
            [
                'name' => 'Regenkledij (jassen, broeken, capes)',
                'image' => 'overall.jpg',
                'description' => 'Waterdichte regenkledij voor alle weersomstandigheden.',
                'price' => 0
            ],
            [
                'name' => 'Fluovesten / signalisatiekledij (EN ISO 20471)',
                'image' => 'fluovest.jpg',
                'description' => 'Fluovesten en signalisatiekledij volgens EN ISO 20471.',
                'price' => 0
            ],
            [
                'name' => 'Overall (brandvertragend, antistatisch, waterafstotend)',
                'image' => 'overall.jpg',
                'description' => 'Brandvertragende, antistatische en waterafstotende overall.',
                'price' => 0
            ],
            [
                'name' => 'Valharnas en lijn',
                'image' => 'valharnas.jpg',
                'description' => 'Valharnas en lijn voor veilig werken op hoogte.',
                'price' => 0
            ],
            [
                'name' => 'Gasdetectiemeter (O₂, CH₄, H₂S, CO)',
                'image' => 'gasdetector.jpg',
                'description' => 'Gasdetectiemeter voor O₂, CH₄, H₂S en CO.',
                'price' => 0
            ],
            [
                'name' => 'Handontsmetting / EHBO-kit',
                'image' => 'EHBO-kit.jpg',
                'description' => 'Handontsmetting en complete EHBO-kit voor noodgevallen.',
                'price' => 0
            ],
            [
                'name' => 'Klim- en valbeveiligingsmateriaal (harnas, lifeline, karabijnhaken)',
                'image' => 'klim.jpg',
                'description' => 'Klim- en valbeveiligingsmateriaal: harnas, lifeline, karabijnhaken.',
                'price' => 0
            ],
        ];

        foreach ($producten as $product) {
            Product::create($product);
        }
    }
} 