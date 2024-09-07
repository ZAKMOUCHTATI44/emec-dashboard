<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Influenceur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Salah mimouni',
             'email' => 'sd.mimouni@gmail.com',
         ]);

         \App\Models\User::factory()->create([
            'name' => 'Amal amazouz',
            'email' => 'amal@gmail.com',
        ]);



         $this->call(CategoriesTableSeeder::class);
         $this->call(InfluenceurTableSeeder::class);
    }
}
