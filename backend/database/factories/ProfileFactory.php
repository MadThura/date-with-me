<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'interests' => json_encode(fake()->randomElement([
                'music',
                'sports',
                'traveling',
                'cooking',
                'reading',
                'gaming',
                'photography',
                'writing',
                'technology',
                'art',
                'fitness',
                'fashion'
            ])),
            'occupation' => fake()->jobTitle(),
            'height' => random_int(5, 7),
            'education' => fake()->randomElement([
                "High School",
                "Associate's Degree",
                "Bachelor's Degree",
                "Master's Degree",
            ]),
            'preferences' => json_encode([
                'age_range' => [
                    'min' => fake()->numberBetween(18, 25),
                    'max' => fake()->numberBetween(26, 40),
                ],
                'gender_preferences' => fake()->randomElements(
                    ['male', 'female', 'All'],
                    fake()->numberBetween(1, 2)
                ),
            ])
        ];
    }
}
