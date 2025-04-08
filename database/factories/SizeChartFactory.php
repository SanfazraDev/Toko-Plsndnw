<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\SizeChart;

class SizeChartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SizeChart::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'type' => fake()->word(),
            'size' => fake()->randomElement(["xs","s","m","l","xl","xxl","xxxl","xxxxl",""]),
            'pinggang' => fake()->word(),
            'pinggul' => fake()->word(),
            'paha' => fake()->word(),
            'kaki' => fake()->word(),
            'panjang' => fake()->word(),
            'lebar' => fake()->word(),
            'lengan' => fake()->word(),
        ];
    }
}
