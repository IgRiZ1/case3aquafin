<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();

        $producten = [
            [
                'name' => 'Veiligheidshelm (met kinband)',
                'image' => 'veiligheidshelm.jpg',
                'description' => 'Stevige veiligheidshelm met kinband voor optimale hoofdbescherming.',
            ],
            [
                'name' => 'Oordoppen / gehoorkappen',
                'image' => 'oordoppen.jpg',
                'description' => 'Comfortabele oordoppen en gehoorkappen voor gehoorbescherming.',
            ],
            [
                'name' => 'Veiligheidsbril / gelaatsscherm',
                'image' => 'veiligheidsbril.jpg',
                'description' => 'Veiligheidsbril en gelaatsscherm tegen spatten en stof.',
            ],
            [
                'name' => 'Stofmaskers (FFP2, FFP3)',
                'image' => 'stofmaskers.jpg',
                'description' => 'FFP2 en FFP3 stofmaskers voor ademhalingsbescherming.',
            ],
            [
                'name' => 'Werkhandschoenen (snijvast, chemisch resistent, elektrisch geïsoleerd)',
                'image' => 'werkhandschoenen.jpg',
                'description' => 'Diverse werkhandschoenen voor optimale handbescherming.',
            ],
            [
                'name' => 'Veiligheidsschoenen (S3, antistatisch, stalen tip)',
                'image' => 'veiligheidsschoenen.jpg',
                'description' => 'S3 veiligheidsschoenen met stalen tip en antistatische zool.',
            ],
            [
                'name' => 'Werklaarzen (PVC, nitril, met stalen zool)',
                'image' => 'werklaarzen.jpg',
                'description' => 'Werklaarzen van PVC/nitril met stalen zool voor extra veiligheid.',
            ],
            [
                'name' => 'Regenkledij (jassen, broeken, capes)',
                'image' => 'overall.jpg',
                'description' => 'Waterdichte regenkledij voor alle weersomstandigheden.',
            ],
            [
                'name' => 'Fluovesten / signalisatiekledij (EN ISO 20471)',
                'image' => 'fluovest.jpg',
                'description' => 'Fluovesten en signalisatiekledij volgens EN ISO 20471.',
            ],
            [
                'name' => 'Overall (brandvertragend, antistatisch, waterafstotend)',
                'image' => 'overall.jpg',
                'description' => 'Brandvertragende, antistatische en waterafstotende overall.',
            ],
            [
                'name' => 'Valharnas en lijn',
                'image' => 'valharnas.jpg',
                'description' => 'Valharnas en lijn voor veilig werken op hoogte.',
            ],
            [
                'name' => 'Gasdetectiemeter (O₂, CH₄, H₂S, CO)',
                'image' => 'gasdetector.jpg',
                'description' => 'Gasdetectiemeter voor O₂, CH₄, H₂S en CO.',
            ],
            [
                'name' => 'Handontsmetting / EHBO-kit',
                'image' => 'EHBO-kit.jpg',
                'description' => 'Handontsmetting en complete EHBO-kit voor noodgevallen.',
            ],
            [
                'name' => 'Klim- en valbeveiligingsmateriaal (harnas, lifeline, karabijnhaken)',
                'image' => 'klim.jpg',
                'description' => 'Klim- en valbeveiligingsmateriaal: harnas, lifeline, karabijnhaken.',
            ],
        ];

        foreach ($producten as $product) {
            Product::create($product);
        }
    }
}
