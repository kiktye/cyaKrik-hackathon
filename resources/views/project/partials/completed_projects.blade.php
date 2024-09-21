<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($completedProjects as $project)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset($project->image_url) }}" class="w-full h-48 object-cover" alt="{{ $project->name }}">
            <div class="p-4">
                <h3 class="text-xl font-bold">{{ $project->name }}</h3>
                <a href="{{ route('project.show', $project->id) }}" class="text-orange-500 mt-2 inline-block">Види повеќе (See more)</a>
            </div>
        </div>
    @endforeach
</div>

<!-- Pagination for Completed Projects -->
<div class="mt-6" id="pagination-completed">
    <div class="pagination" data-type="completed">
        {{ $completedProjects->withQueryString()->links() }} <!-- This generates numbered pagination -->
    </div>
</div>
