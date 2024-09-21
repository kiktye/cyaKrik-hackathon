<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3), // Generate a fake project name
            'status' => $this->faker->randomElement(['in_progress', 'completed']), // Random status
            'image_url' => $this->faker->imageUrl(640, 480, 'business', true), // Fake image URL
            'description' => $this->faker->paragraph(), // Fake project description
            'goal' => $this->faker->sentence(10), // Fake project goal
            'audience' => $this->faker->sentence(5), // Fake target audience
            'progress' => $this->faker->numberBetween(0, 100), // Progress between 0-100%
        ];
    }
}
