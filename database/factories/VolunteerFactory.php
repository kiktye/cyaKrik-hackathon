<?php

namespace Database\Factories;
use App\Models\Volunteer;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteer>
 */
class VolunteerFactory extends Factory
{
    protected $model = Volunteer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 40),
            'birth_place' => $this->faker->city . ', ' . $this->faker->country,
            'experience' => $this->faker->paragraphs(3, true), // Multi-paragraph experience
            'image_url' => '/images/volunteers/' . $this->faker->word . '.jpg', // Dummy image path
        ];
    }
}
