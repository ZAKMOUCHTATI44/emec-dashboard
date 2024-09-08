<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Influenceur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        \App\Models\User::factory()->create([
            'name' => 'DR. Nawal HOUTI',
            'email' => 'nawal@gmail.com',
            'password' => Hash::make('nawal123'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Ouadih DADA',
            'email' => 'ouadih@gmail.com',
            'password' => Hash::make('ouadih123'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Myriam BESSA',
            'email' => 'myriam@gmail.com',
            'password' => Hash::make('myriam123'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Karima OULHOUSS',
            'email' => 'karima@gmail.com',
            'password' => Hash::make('karima123'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Malik IRAQI',
            'email' => 'malik@gmail.com',
            'password' => Hash::make('karima123'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Hamza FQIH BERRADA',
            'email' => 'hamza@gmail.com',
            'password' => Hash::make('hamza123'),
        ]);



         $this->call(CategoriesTableSeeder::class);
         $this->call(InfluenceurTableSeeder::class);
    }
}
