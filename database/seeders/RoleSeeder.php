<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Administrateur',
        ]);
        Role::create([
            'name' => 'Organisateur d’événements',
        ]);
        Role::create([
            'name' => 'participant',
        ]);
    }
}
