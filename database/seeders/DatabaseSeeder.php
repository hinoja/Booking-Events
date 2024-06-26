<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;
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
            'name' => $name = 'Admin',
            'email' => 'admin@bookingevents.com',
            'role_id' => '1',
            'password' => Hash::make('password'),
        ]);

        // Event::factory(20)->create();

        User::factory(10)->has(
            Event::factory(rand(1, 5))->has(
                Ticket::factory()
            )
        )->create();

    }
}
