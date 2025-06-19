<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Zet foreign key checks uit (voor SQLite)
        \DB::statement('PRAGMA foreign_keys = OFF;');
        \DB::table('users')->delete();
        \DB::table('products')->delete();
        \DB::table('categories')->delete();
        \DB::statement('PRAGMA foreign_keys = ON;');

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'is_admin' => false,
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@aquafin.be',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
        ]);

        // Voeg standaardcategorieën toe
        $standaardCategorieen = [
            'PBM',
            'Verbruiksgoederen',
            'Kledij',
            'Gereedschap',
            'Diversen',
        ];
        foreach ($standaardCategorieen as $cat) {
            Category::firstOrCreate(['name' => $cat]);
        }

        $this->call(\Database\Seeders\ProductSeeder::class);
    }
}
