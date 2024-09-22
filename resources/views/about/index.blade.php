<x-layout>
    <!-- Main Content Container -->
    <div class="container mx-auto p-8">
        <!-- General Info Section (Part One and Part Two) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Left Section: Image -->
            <div>
                <img src="{{ asset($about->image_url) }}" class="w-full h-auto rounded-lg shadow-lg" alt="About Us Image">
            </div>

            <!-- Right Section: Text Content -->
            <div class="text-black">
                <!-- Title of the About Us Section -->
                <h1 class="text-3xl font-bold mb-4">{{ $about->title }}</h1>
                
                <!-- Part One of the Text -->
                <p class="text-lg mb-6">
                    {{ $about->part_one }}
                </p>
                
                <!-- Part Two of the Text -->
                <p class="text-lg mb-6">
                    {{ $about->part_two }}
                </p>
            </div>
        </div>

        <!-- Mission, Vision, and Values Section -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold mb-6">{{ __('За Крик') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Mission -->
                <div>
                    <h3 class="text-lg font-bold text-red-500">{{ __('Мисија') }}</h3>
                    <p class="text-black text-lg">{{ $about->mission }}</p>
                </div>

                <!-- Vision -->
                <div>
                    <h3 class="text-lg font-bold">{{ __('Визија') }}</h3>
                    <p class="text-black text-lg">{{ $about->vision }}</p>
                </div>

                <!-- Values -->
                <div>
                    <h3 class="text-lg font-bold text-red-500">{{ __('Нашите Вредности') }}</h3>
                    <p class="text-black text-lg">{{ $about->values }}</p>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold">{{ __('Најчесто Поставувани Прашања') }}</h2>

            <div class="space-y-4 mt-8">
                <!-- Loop through FAQs and display them -->
                @foreach ($faqs as $faq)
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold">{{ $loop->iteration }}. {{ $faq->question }}</span>
                        <button onclick="toggleFaq(this)" class="focus:outline-none">
                            <span class="plus-icon">+</span>
                        </button>
                    </div>
                    <div class="faq-answer mt-4 hidden text-purple-700 bg-purple-100 p-4 rounded-lg">
                        <p class="text-black">{{ $faq->answer }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- FAQ Toggle Script -->
    <x-slot name="scripts">
        <script>
            function toggleFaq(button) {
                const faqAnswer = button.parentElement.nextElementSibling;
                faqAnswer.classList.toggle('hidden');
                button.querySelector('.plus-icon').textContent = faqAnswer.classList.contains('hidden') ? '+' : '-';
            }
        </script>
    </x-slot>

</x-layout>
