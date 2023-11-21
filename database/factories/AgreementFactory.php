<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agreement>
 */
class AgreementFactory extends Factory
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
            'terms_of_service_agreed' => fake()->boolean($chanceOfGettingTrue = 50),
            'privacy_notice_agreed' => fake()->boolean($chanceOfGettingTrue = 50),
            'payment_terms_agreed' => fake()->boolean($chanceOfGettingTrue = 50),
        ];
    }
}
