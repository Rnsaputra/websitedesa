<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name"=> "pertanian",
            "slug"=> "pertanian",
            "color"=> "green"
        ]);
        Category::create([
            "name"=> "wisata",
            "slug"=> "wisata",
            "color"=> "yellow"
        ]);
        Category::create([
            "name"=> "umkm",
            "slug"=> "umkm",
            "color"=> "blue"
        ]);
    }
}
