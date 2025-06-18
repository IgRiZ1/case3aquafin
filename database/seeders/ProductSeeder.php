<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();
        DB::statement('PRAGMA foreign_keys=OFF;');
        Product::truncate();
        DB::statement('PRAGMA foreign_keys=ON;');

        $producten = [
            [
                'name' => 'Veiligheidshelm (met kinband)',
                'category_id' => 1,
                'image' => 'veiligheidshelm.jpg',
                'description' => 'Stevige veiligheidshelm met kinband voor optimale hoofdbescherming.',
            ],
            [
                'name' => 'Oordoppen / gehoorkappen',
                'category_id' => 1,
                'image' => 'oordoppen.jpg',
                'description' => 'Comfortabele oordoppen en gehoorkappen voor gehoorbescherming.',
            ],
            [
                'name' => 'Veiligheidsbril / gelaatsscherm',
                'category_id' => 1,
                'image' => 'veiligheidsbril.jpg',
                'description' => 'Veiligheidsbril en gelaatsscherm tegen spatten en stof.',
            ],
            [
                'name' => 'Stofmaskers (FFP2, FFP3)',
                'category_id' => 1,
                'image' => 'stofmaskers.jpg',
                'description' => 'FFP2 en FFP3 stofmaskers voor ademhalingsbescherming.',
            ],
            [
                'name' => 'Werkhandschoenen (snijvast, chemisch resistent, elektrisch geïsoleerd)',
                'category_id' => 1,
                'image' => 'werkhandschoenen.jpg',
                'description' => 'Diverse werkhandschoenen voor optimale handbescherming.',
            ],
            [
                'name' => 'Veiligheidsschoenen (S3, antistatisch, stalen tip)',
                'category_id' => 1,
                'image' => 'veiligheidsschoenen.jpg',
                'description' => 'S3 veiligheidsschoenen met stalen tip en antistatische zool.',
            ],
            [
                'name' => 'Werklaarzen (PVC, nitril, met stalen zool)',
                'category_id' => 1,
                'image' => 'werklaarzen.jpg',
                'description' => 'Werklaarzen van PVC/nitril met stalen zool voor extra veiligheid.',
            ],
            [
                'name' => 'Regenkledij (jassen, broeken, capes)',
                'category_id' => 1,
                'image' => 'overall.jpg',
                'description' => 'Waterdichte regenkledij voor alle weersomstandigheden.',
            ],
            [
                'name' => 'Fluovesten / signalisatiekledij (EN ISO 20471)',
                'category_id' => 1,
                'image' => 'fluovest.jpg',
                'description' => 'Fluovesten en signalisatiekledij volgens EN ISO 20471.',
            ],
            [
                'name' => 'Overall (brandvertragend, antistatisch, waterafstotend)',
                'category_id' => 1,
                'image' => 'overall.jpg',
                'description' => 'Brandvertragende, antistatische en waterafstotende overall.',
            ],
            [
                'name' => 'Valharnas en lijn',
                'category_id' => 1,
                'image' => 'valharnas.jpg',
                'description' => 'Valharnas en lijn voor veilig werken op hoogte.',
            ],
            [
                'name' => 'Gasdetectiemeter (O₂, CH₄, H₂S, CO)',
                'category_id' => 1,
                'image' => 'gasdetector.jpg',
                'description' => 'Gasdetectiemeter voor O₂, CH₄, H₂S en CO.',
            ],
            [
                'name' => 'Handontsmetting / EHBO-kit',
                'category_id' => 1,
                'image' => 'EHBO-kit.jpg',
                'description' => 'Handontsmetting en complete EHBO-kit voor noodgevallen.',
            ],
            [
                'name' => 'Klim- en valbeveiligingsmateriaal (harnas, lifeline, karabijnhaken)',
                'category_id' => 1,
                'image' => 'klim.jpg',
                'description' => 'Klim- en valbeveiligingsmateriaal: harnas, lifeline, karabijnhaken.',
            ],
        ];

        foreach ($producten as $product) {
            Product::create($product);
        }
    }
}
