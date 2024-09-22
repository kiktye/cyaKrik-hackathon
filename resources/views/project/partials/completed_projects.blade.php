@php
    $bgColors = ['bg-orange', 'bg-why', 'bg-dark-krik'];
@endphp

<div class="w-[90%] mx-auto font-mulish">
    <!-- First Section -->
    <div class="grid grid-cols-4 grid-rows-2 gap-4 h-[600px] mb-4">
        @foreach ($completedProjects as $index => $project)
            @php
                $bgColor = $bgColors[$index % count($bgColors)];
            @endphp

            @if ($index == 0)
                <!-- Vertical card in the first column spanning 2 rows -->
                <div class="col-span-1 row-span-2 relative hover:border hover:border-dark-krik hover:rounded-3xl">
                    <a href="{{ route('project.show', $project->id) }}">
                        <x-project-card :project="$project" :bgColor="$bgColor" />
                    </a>
                </div>
            @elseif ($index == 1)
                <!-- First small card (top) in the second column -->
                <div class="col-span-1 row-span-1 relative hover:border hover:border-dark-krik hover:rounded-3xl">
                    <a href="{{ route('project.show', $project->id) }}">
                        <x-project-card :project="$project" :bgColor="$bgColor" />
                    </a>
                </div>
            @elseif ($index == 2)
                <!-- Second small card (bottom) in the second column -->
                <div class="col-span-1 row-span-1 relative hover:border hover:border-dark-krik hover:rounded-3xl">
                    <a href="{{ route('project.show', $project->id) }}">
                        <x-project-card :project="$project" :bgColor="$bgColor" />
                    </a>
                </div>
            @elseif ($index == 3)
                <!-- Big card spanning the third and fourth columns and 2 rows -->
                <div class="col-span-2 row-span-2 relative hover:border hover:border-dark-krik hover:rounded-3xl">
                    <a href="{{ route('project.show', $project->id) }}">
                        <x-project-card :project="$project" :bgColor="$bgColor" />
                    </a>
                </div>

    </div>

    <!-- Second Section -->
    <div class="grid grid-cols-4 grid-rows-2 gap-4 h-[500px]">
    @elseif ($index == 4)
        <!-- Second Section: Big card on the left (spans 2 rows) -->
        <div class="col-span-2 row-span-2 relative hover:border hover:border-dark-krik hover:rounded-3xl">
            <a href="{{ route('project.show', $project->id) }}">
                <x-project-card :project="$project" :bgColor="$bgColor" />
            </a>
        </div>
    @elseif ($index == 5)
        <!-- Second Section: Horizontal card on the top right (spans 1 row) -->
        <div class="col-span-2 row-span-1 relative hover:border hover:border-dark-krik hover:rounded-3xl">
            <a href="{{ route('project.show', $project->id) }}">
                <x-project-card :project="$project" :bgColor="$bgColor" />
            </a>
        </div>
    @elseif ($index == 6)
        <div class="col-span-1 row-span-1 relative hover:border hover:border-dark-krik hover:rounded-3xl">
            <a href="{{ route('project.show', $project->id) }}">
                <x-project-card :project="$project" :bgColor="$bgColor" />
            </a>
        </div>
    @elseif ($index == 7)
        <div class="col-span-1 row-span-1 relative hover:border hover:border-dark-krik hover:rounded-3xl">
            <a href="{{ route('project.show', $project->id) }}">
                <x-project-card :project="$project" :bgColor="$bgColor" />
            </a>
        </div>
        @endif
        @endforeach
    </div>
</div>

<!-- Pagination for Completed Projects -->
<div class="mt-6" id="pagination-completed">
    <div class="pagination" data-type="completed">
        {{ $completedProjects->withQueryString()->links() }} <!-- This generates numbered pagination -->
    </div>
</div>
