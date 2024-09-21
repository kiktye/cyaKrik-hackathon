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
        // Predefined volunteers with their corresponding images and types
        $imageNames = [
            ['name' => 'Idil Abes', 'image_url' => 'volunteers/1-Idil-Abes.png', 'type' => 'long_term'],
            ['name' => 'Melih Furkan Orta', 'image_url' => 'volunteers/2-Melih-Furkan-Orta.png', 'type' => 'short_term'],
            ['name' => 'Bedirhan Sevim', 'image_url' => 'volunteers/3-Bedirhan-Sevim.png', 'type' => 'long_term'],
            ['name' => 'Zeynep Cebeci', 'image_url' => 'volunteers/4-Zeynep-Cebeci.png', 'type' => 'short_term'],
            ['name' => 'Merve Ozkan', 'image_url' => 'volunteers/5-Merve-Ozkan.png', 'type' => 'long_term'],
            ['name' => 'Melek Cakan', 'image_url' => 'volunteers/6-Melek-Cakan.png', 'type' => 'short_term'],
            ['name' => 'Melisa Pektas', 'image_url' => 'volunteers/7-Melisa-Pektaş.png', 'type' => 'long_term'],
            ['name' => 'Manon Lacoste', 'image_url' => 'volunteers/8-Manon-Lacoste.png', 'type' => 'short_term'],
            ['name' => 'Lisa Simone', 'image_url' => 'volunteers/9-Lisa-Simone.png', 'type' => 'long_term'],
            ['name' => 'Kaan Algin', 'image_url' => 'volunteers/10-Kaan-Algin.png', 'type' => 'short_term'],
            ['name' => 'Metehan Cam', 'image_url' => 'volunteers/11-Metehan-Cam.png', 'type' => 'long_term'],
            ['name' => 'Ali Karabay', 'image_url' => 'volunteers/12-Ali-Karabay.png', 'type' => 'short_term'],
        ];

        // Use a static index to loop through the predefined volunteers
        static $index = 0;
        $volunteer = $imageNames[$index];
        $index++;

        return [
            'name' => $volunteer['name'],
            'age' => $this->faker->numberBetween(18, 40),
            'birth_place' => $this->faker->city . ', ' . $this->faker->country,
            'biography' => $this->faker->paragraphs(3, true),
            'image_url' => $volunteer['image_url'],
            'volunteer_type' => $volunteer['type'], // Assign long-term or short-term type
        ];
    }
}
