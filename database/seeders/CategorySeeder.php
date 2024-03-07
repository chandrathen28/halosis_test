<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->makeDirectory('category');

        $faker = Faker::create('id_ID');

        Category::create([
            'name' => 'Action',
            'image' => $faker->image(storage_path('app/public/category'),800,600, null, false)
        ]);

        Category::create([
            'name' => 'FPS',
            'image' => $faker->image(storage_path('app/public/category'),800,600, null, false)
        ]);

        Category::create([
            'name' => 'RPG',
            'image' => $faker->image(storage_path('app/public/category'),800,600, null, false)
        ]);
    }
}
