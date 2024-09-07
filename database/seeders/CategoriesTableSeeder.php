<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => "Best Family & Parenting Content",
                'photo' => "/categories/Family Parenting Content.png",
            ],
            [
                'name' => "Best Fashion Content",
                'photo' => "/categories/Best Fashion Content.png",
            ],
            [
                'name' => "Best Beauty Content",
                'photo' => "/categories/Best Beauty Content.png",
            ],
            [
                'name' => "Best Lifestyle Content",
                'photo' => "/categories/Best Lifestyle Content.png",
            ],
            [
                'name' => "Best Travel Content",
                'photo' => "/categories/Travel Content.png",
            ],
            [
                'name' => "Best Food and Drink Content",
                'photo' => "/categories/Best Food and Drink Content.png",
            ],
            [
                'name' => "Best Tech Content",
                'photo' => "/categories/Best Tech Content.png",
            ],
            [
                'name' => "Best Sport, Health and Fitness Content",
                'photo' => "/categories/Best Sport, Health and Fitness Content.png",
            ],
            [
                'name' => "Best Gaming Content",
                'photo' => "/categories/Best Gaming Content.png",
            ],
            [
                'name' => "Best Humanity and Community Content",
                'photo' => "/categories/Best Humanity and Community Content.png",
            ],
            [
                'name' => "Best Podcasts Content",
                'photo' => "/categories/podcaster.png",
            ],
            // [
            //     'name' => "Best Business Content",
            //     'photo' => "/categories/Best Business Content.png",
            // ],
            // [
            //     'name' => "Best AI Influencer Content",
            //     'photo' => "/categories/Best AI Influencer Content.png",
            // ],

            // [
            //     'name' => "Best Comedy Content",
            //     'photo' => "/categories/Best Comedy Content.png",
            // ],

            // [
            //     'name' => "Best Motivational Content",
            //     'photo' => "/categories/Best Motivational Content.png",
            // ],
            // [
            //     'name' => "Coup de cœur du Jury",
            //     'photo' => "/categories/Coup de cœur du Jury.png",
            // ],
        ];

        DB::table('categories')->insert($categories);
    }
}
