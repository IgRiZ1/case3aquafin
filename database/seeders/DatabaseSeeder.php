<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        \DB::statement('PRAGMA foreign_keys = OFF;');
        \DB::table('users')->delete();
        \DB::table('products')->delete();
        \DB::statement('PRAGMA foreign_keys = ON;');


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
        $this->call(\Database\Seeders\ProductSeeder::class);
    }
}
