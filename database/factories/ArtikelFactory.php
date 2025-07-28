<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


/*
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Model>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {      
        $title = fake()->sentence(10);
        return [
            'title'=> $title  ,
            'slug'=> Str::slug($title),
            'author'=> fake()->name(),
            'image'=> fake()->randomNumber(5, true),
            'body'=> fake()->paragraph(30),
        ];
    }

    public function wisata(): static{
        return $this->state(fn (array $attributes) => [
            'kategori'=> ('wisata'),
        ]);
    }
    public function politik(): static{
        return $this->state(fn (array $attributes) => [
            'kategori'=> ('politik'),
        ]);
    }
    public function pertanian(): static{
        return $this->state(fn (array $attributes) => [
            'kategori'=> ('pertanian'),
        ]);
    }
}
