<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BusinessInformation>
 */
class BusinessInformationFactory extends Factory
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
            'company_name' => fake()->company(),
            'company_registration_number' => fake()->numerify('######'),
            'sst_registration_number' => fake()->optional()->numerify('######'),
            'company_address_line_1' => fake()->streetName(),
            'company_address_line_2' => fake()->optional()->streetAddress(),
            'city' => fake()->city(),
            'state' => fake()->address(),
            'post_code' => fake()->postcode(),
            'country' => fake()->country(),
        ];
    }
}
