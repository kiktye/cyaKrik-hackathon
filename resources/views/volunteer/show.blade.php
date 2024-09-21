<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $volunteer->name }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <img class="w-full md:w-1/3 h-auto object-cover" src="{{ asset($volunteer->image_url) }}" alt="{{ $volunteer->name }}">
                <div class="p-6 md:w-2/3">
                    <h1 class="text-3xl font-bold mb-4">{{ $volunteer->name }}</h1>
                    <p class="text-gray-700 mb-2"><strong>Возраст (Age):</strong> {{ $volunteer->age }} години (Years)</p>
                    <p class="text-gray-700 mb-2"><strong>Место на раѓање (Birth Place):</strong> {{ $volunteer->birth_place }}</p>
                    <p class="text-gray-700 mb-4"><strong>Биографија (Biography):</strong> {{ $volunteer->biography }}</p>

                    <h2 class="text-2xl font-semibold mt-6 mb-4">Проекти (Projects):</h2>
                    <ul class="list-disc list-inside">
                        @foreach ($volunteer->projects as $project)
                            <li>
                                {{ $project->name }} ({{ $project->status === 'in_progress' ? 'Тековен' : 'Завршен' }})
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>