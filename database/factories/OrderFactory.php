<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_number' => fake()->word(),
            'user_id' => User::factory(),
            'discount' => fake()->numberBetween(-10000, 10000),
            'total' => fake()->numberBetween(-10000, 10000),
            'profit' => fake()->numberBetween(-10000, 10000),
            'order_status' => fake()->randomElement(["pending","waiting","completed","cancelled","delivered","ongoing","on_process"]),
            'payment_status' => fake()->randomElement(["paid","unpaid","refunded","cancelled","pending","failed"]),
            'payment_date' => fake()->dateTime(),
            'order_date' => fake()->dateTime(),
            'payment_method' => fake()->randomElement(["cash","transfer"]),
        ];
    }
}
