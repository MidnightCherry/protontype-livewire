<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CardDetail>
 */
class CardDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->numberBetween(1, 10),
            'name_on_card' => fake()->name(),
            'card_number' => fake()->creditCardNumber($type = null, $formatted = false, $separator = '-'),
            'expiration_month' => fake()->numberBetween(1, 12),
            'expiration_year' => fake()->numberBetween(now()->year, now()->year + 10),
            'cvv' => fake()->randomNumber(3),
        ];
    }
}
