<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Нашите Волонтери (Our Volunteers)') }}
        </h2>
    </x-slot>

    <!-- Tabs for Long and Short Term Volunteers -->
    <div class="flex justify-center mb-10 ">
        <button id="long-term-tab" class="px-4 py-2 text-lg font-semibold border-b-4 border-red-500 me-2" onclick="showVolunteers('long')">Долг Рок (Long Term)</button>
        <button id="short-term-tab" class="px-4 py-2 text-lg font-semibold ml-6 text-gray-600 border-b-4 border-transparent hover:border-gray-400 ms-2" onclick="showVolunteers('short')">Краток Рок (Short Term)</button>
    </div>

    <!-- Long Term Volunteers Grid -->
    <div id="long-term-volunteers" class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 flex flex-row">
        @foreach ($longTermVolunteers as $volunteer)
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="window.location='/volunteer/{{ $volunteer->id }}'">
            <img class="w-full h-48 object-cover" src="{{ asset($volunteer->image_url) }}" alt="{{ $volunteer->name }}">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $volunteer->name }}</h2>
                <p class="text-sm text-gray-500">{{ $volunteer->age }} години (Years)</p>
                <p class="text-sm text-gray-500">{{ $volunteer->birth_place }}</p>

                <h3 class="mt-4 text-lg font-semibold">Проекти:</h3>
                <ul>
                    @foreach ($volunteer->projects as $project)
                    <li>{{ $project->name }} ({{ $project->status === 'in_progress' ? 'Тековен' : 'Завршен' }})</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Short Term Volunteers Grid (Initially Hidden) -->
    <div id="short-term-volunteers" class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 hidden">
        @foreach ($shortTermVolunteers as $volunteer)
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="window.location='/volunteer/{{ $volunteer->id }}'">
            <img class="w-full h-48 object-cover" src="{{ asset($volunteer->image_url) }}" alt="{{ $volunteer->name }}">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $volunteer->name }}</h2>
                <p class="text-sm text-gray-500">{{ $volunteer->age }} години (Years)</p>
                <p class="text-sm text-gray-500">{{ $volunteer->birth_place }}</p>

                <h3 class="mt-4 text-lg font-semibold">Проекти:</h3>
                <ul>
                    @foreach ($volunteer->projects as $project)
                    <li>{{ $project->name }} ({{ $project->status === 'in_progress' ? 'Тековен' : 'Завршен' }})</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>

    <!-- JavaScript for Tab Switching -->
    <x-slot name="scripts">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const longTermTab = document.getElementById('long-term-tab');
            const shortTermTab = document.getElementById('short-term-tab');
            const longTermVolunteers = document.getElementById('long-term-volunteers');
            const shortTermVolunteers = document.getElementById('short-term-volunteers');

            longTermTab.addEventListener('click', function() {
                showVolunteers('long');
            });

            shortTermTab.addEventListener('click', function() {
                showVolunteers('short');
            });

            function showVolunteers(type) {
                console.log('Tab switch to:', type); // Debugging log

                if (type === 'long') {
                    longTermTab.classList.add('border-red-500');
                    longTermTab.classList.remove('text-gray-600');
                    shortTermTab.classList.add('text-gray-600');
                    shortTermTab.classList.remove('border-red-500');
                    longTermVolunteers.classList.remove('hidden');
                    shortTermVolunteers.classList.add('hidden');
                } else {
                    shortTermTab.classList.add('border-red-500');
                    shortTermTab.classList.remove('text-gray-600');
                    longTermTab.classList.add('text-gray-600');
                    longTermTab.classList.remove('border-red-500');
                    shortTermVolunteers.classList.remove('hidden');
                    longTermVolunteers.classList.add('hidden');
                }
            }
        });
    </script>
</x-slot>



</x-layout>