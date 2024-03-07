<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->makeDirectory('product');

        $faker = Faker::create('id_ID');

        for($i = 0; $i<90; $i++){
            Product::create([
                'name' => 'Product-'.$i,
                'title' => 'Product-'.$i,
                'description' => $faker->text(400),
                'category_id' => Category::all()->random()->id,
                'price' => random_int(10000, 999999),
                'image' => $faker->image(storage_path('app/public/product'),800,600, null, false)
            ]);
        }
    }
}
