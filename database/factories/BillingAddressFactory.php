<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BillingAddress>
 */
class BillingAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'address_line_1' => fake()->streetName(),
            'address_line_2' => fake()->optional()->streetAddress(),
            'city' => fake()->city(),
            'state' => fake()->address(),
            'post_code' => fake()->postcode(),
            'country' => fake()->country(),
        ];
    }
}
