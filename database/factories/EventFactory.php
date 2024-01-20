<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $name=fake()->unique()->name(),
            'slug' => Str::slug($name), 
            'place' => fake('it_IT')->city(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'description' => fake()->realText(), 
            'date' => fake()->dateTimeBetween($startDate='now',$endDate='+2 years'),      
        ];
    }
}
