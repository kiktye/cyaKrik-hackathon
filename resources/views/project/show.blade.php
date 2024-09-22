<x-layout>
    <div class="container mx-auto p-8">
        <!-- Image Gallery -->
        <div class="flex justify-center">
            <div class="w-2/3">
                <img src="https://picsum.photos/200/300" class="w-full h-auto rounded-lg shadow-lg mb-4" alt="{{ $project->title }} Image">
                <!-- Add any more images as needed -->
            </div>
        </div>

        <!-- Project Title and Info -->
        <h1 class="text-3xl font-bold text-gray-800 mt-8 mb-4">{{ $project->title }}</h1>
        <p class="text-lg text-gray-600">{{ $project->description }}</p>

        <!-- Project Goals Section -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 p-4 rounded-lg">
                <h2 class="text-xl font-bold mb-2">Цел на проектот (Project Goal)</h2>
                <p>{{ $project->goal }}</p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg">
                <h2 class="text-xl font-bold mb-2">За кого е наменет овој проект? (Target Audience)</h2>
                <p>{{ $project->audience }}</p>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="mt-8">
            <h3 class="text-xl font-bold mb-2">Прогрес (Progress)</h3>
            <div class="relative pt-1">
                <div class="flex mb-2 items-center justify-between">
                    <div>
                        <span class="text-base font-semibold inline-block text-gray-600">{{ $project->progress }}% Completed</span>
                    </div>
                </div>
                <div class="overflow-hidden h-3 text-xs flex rounded bg-gray-300">
                    <!-- Dynamic width based on progress -->
                    <div  class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-orange-500"></div>
                </div>
            </div>
        </div>

        <!-- Sign Up Section -->
        <div class="mt-8 flex justify-end">
            <h3 class="text-xl font-bold mb-2">Пријави се</h3>
            <a href="#" class="bg-black text-white px-4 py-2 border rounded-lg">Sign In</a>
        </div>

        <!-- Call to Action (Donate Button) -->
        <div class="flex justify-end mt-8">
            <a href="#" class="bg-red-500 text-white px-4 py-2 rounded-lg">Донирај (Donate)</a>
        </div>
    </div>
</x-layout>
