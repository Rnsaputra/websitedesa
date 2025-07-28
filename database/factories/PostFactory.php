<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
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
            'author_id'=> User::factory(),
            'category_id'=> Category::factory(),
            'body'=> fake()->paragraph(30),
            'is_active'=> true
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
