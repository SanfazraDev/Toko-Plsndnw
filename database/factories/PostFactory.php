<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'post_category_id' => PostCategory::factory(),
            'user_id' => User::factory(),
            'thumbnail' => fake()->word(),
            'title' => fake()->sentence(4),
            'slug' => fake()->slug(),
            'content' => fake()->paragraphs(3, true),
            'status' => fake()->randomElement(["draft","published","archived"]),
            'published_at' => fake()->dateTime(),
        ];
    }
}
