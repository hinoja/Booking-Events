<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Arts',
        ]);
        Role::create([
            'name' => 'Business',
        ]);
        Role::create([
            'name' => 'Coaching and Consulting',
        ]);
        Role::create([
            'name' => 'Community and Culture',
        ]);
        Role::create([
            'name' => 'Education and Training',
        ]);
        Role::create([
            'name' => 'Family and Friends',
        ]);
        Role::create([
            'name' => 'Fashion and Beauty',
        ]);
        Role::create([
            'name' => 'Film and Entertainment',
        ]);
        Role::create([
            'name' => 'Food and Drink',
        ]);
        Role::create([
            'name' => 'Health and Wellbeing',
        ]);
        Role::create([
            'name' => 'Hobbies and Interest',
        ]);
        Role::create([
            'name' => 'Conference',
        ]);
        Role::create([
            'name' => 'Religion and Spirituality',
        ]);
        Role::create([
            'name' => 'Music and Theater',
        ]);
        Role::create([
            'name' => 'Science and Technology',
        ]);
        Role::create([
            'name' => 'Sports and Fitness',
        ]);
        Role::create([
            'name' => 'Travel and Outdoor',
        ]);
        Role::create([
            'name' => 'Visual Arts',
        ]);
        Role::create([
            'name' => 'Gig',
        ]);
        Role::create([
            'name' => 'Hotel',
        ]);
    }
}
