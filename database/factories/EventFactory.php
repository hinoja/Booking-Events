<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $name = fake()->unique()->realText(100),
            'slug' => Str::slug($name),
            'place' => fake('it_IT')->city(),
            'user_id' => User::factory(),
            'category_id' => fake()->numberBetween(1, 20),
            'type' => fake()->numberBetween(1, 2),
            // 'price' => fake()->numberBetween(1, 2),
            'description' => fake()->paragraph(32),
            'is_active' => fake()->boolean(68),
            'duration' => $number = fake()->numberBetween(1, 6),
            'date' => fake()->date($max = now()->addRealWeeks($number)),
            'start_at' => fake()->time($format = 'H:i'),

        ];
    }
}
