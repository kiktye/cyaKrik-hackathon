<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Volunteer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 fake projects
        $projects = Project::factory()->count(10)->create();

        // Create 10 fake volunteers and associate them with random projects
        Volunteer::factory()->count(12)->create()->each(function ($volunteer) use ($projects) {
            // Attach each volunteer to 2-3 random projects
            $volunteer->projects()->attach(
                $projects->random(rand(2, 3))->pluck('id')->toArray()
            );
        });
    }
}
