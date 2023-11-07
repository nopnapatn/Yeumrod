<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'driver_id' => Driver::inRandomOrder()->pluck('id')->first(),
            'name' => $this->faker->name(),
            'brand' => $this->faker->name(),
            'seat' => $this->faker->numberBetween(2, 5),
            'price' => $this->faker->numberBetween(1000, 2000),
            'image_path' => $this->faker->image('public/storage/', 800, 600, null, false),
        ];
    }
}
