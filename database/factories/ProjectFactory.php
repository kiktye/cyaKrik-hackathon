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
            'name' => $this->faker->words(3, true), // Random project names
            'status' => $this->faker->randomElement(['in_progress', 'completed']),
            'description' => $this->faker->paragraphs(2, true), // Project description
            'image_url' => '/images/projects/' . $this->faker->word . '.jpg', // Dummy image path
        ];
    }
}
