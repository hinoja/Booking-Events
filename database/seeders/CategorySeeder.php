<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Arts',
        ]);
        Category::create([
            'name' => 'Affaires',
        ]);
        Category::create([
            'name' => 'Coaching et conseil',
        ]);
        Category::create([
            'name' => 'Communauté et culture',
        ]);
        Category::create([
            'name' => 'Education and Formations',
        ]);
        Category::create([
            'name' => 'La Famille et les amis',
        ]);
        Category::create([
            'name' => 'Mode et beauté',
        ]);
        Category::create([
            'name' => 'Film et divertissement',
        ]);
        Category::create([
            'name' => 'Nourriture et boissons',
        ]);
        Category::create([
            'name' => 'Santé et bien-être',
        ]);
        Category::create([
            'name' => 'Loisirs et intérêts',
        ]);
        Category::create([
            'name' => 'Conférence',
        ]);
        Category::create([
            'name' => 'Religion and Spiritualité',
        ]);
        Category::create([
            'name' => 'Music and Théâtre',
        ]);
        Category::create([
            'name' => 'Science and Technologie',
        ]);
        Category::create([
            'name' => 'Sports and Fitness',
        ]);
        Category::create([
            'name' => 'Voyages et activités de plein air',
        ]);
        Category::create([
            'name' => 'Arts Visuel',
        ]);
        Category::create([
            'name' => 'Libre',
        ]);
        Category::create([
            'name' => 'Hotel',
        ]);
        Category::create([
            'name' => 'Autres',
        ]);
    }
}
