<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create multiple FAQs
        Faq::create([
            'question' => 'What is KRIK?',
            'answer' => 'KRIK is a youth-led initiative focusing on empowering young people through leadership and community involvement.',
        ]);

        Faq::create([
            'question' => 'How can I get involved?',
            'answer' => 'You can get involved by volunteering, donating, or participating in one of our projects.',
        ]);

        Faq::create([
            'question' => 'What services does KRIK offer?',
            'answer' => 'KRIK offers services in youth capacity building, leadership development, and advocacy for marginalized communities.',
        ]);

        // Add more FAQs as necessary...
    }
}
