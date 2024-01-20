<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
        ]);
        User::factory()->create([
            'name' => $name='Admin',
            'email' => 'admin@bookingevents.com',
            'role_id' => '1',
            'avatar' => fake()->image('public/storage/avatars/users/', 500, 500, $name, false),
            'password' => Hash::make('password'),
        ]);
        User::factory(10)->has(
            Event::factory(6)
        )->create();
        Event::factory(10)->create();

    
    }
}
