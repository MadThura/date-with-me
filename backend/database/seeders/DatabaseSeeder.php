<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Like;
use App\Models\Profile;
use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)
            ->has(Profile::factory(1))
            ->has(Image::factory(6))
            ->has(Setting::factory(1))
            ->create();

        Like::factory(20)->create();
        // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
