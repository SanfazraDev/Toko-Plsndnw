<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Slider;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'thumbnail' => fake()->word(),
            'tagline' => fake()->word(),
            'title' => fake()->sentence(4),
            'content' => fake()->paragraphs(3, true),
        ];
    }
}
