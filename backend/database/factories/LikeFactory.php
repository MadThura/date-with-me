<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $likedUser = User::where('id', '!=', $user->id)->inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'liked_user_id' => $likedUser->id,
        ];
    }
}
