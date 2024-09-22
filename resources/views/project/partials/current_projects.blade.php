@php
    $bgColors = ['bg-orange', 'bg-why', 'bg-dark-krik'];
@endphp

<div class="grid grid-cols-4 grid-rows-2 gap-4 font-mulish h-[500px] w-[90%] mx-auto">
    @foreach ($currentProjects as $project)
        @php
            // Cycle through the colors array
            $bgColor = $bgColors[$loop->index % count($bgColors)];
        @endphp

        @if ($loop->index == 0)
            <!-- Big card on the left (spans 2 rows) -->
            <div class="col-span-2 row-span-2 relative">
                <x-project-card :project="$project" :bgColor="$bgColor" />
            </div>
        @elseif ($loop->index == 1)
            <!-- Horizontal card on the top right (spans 1 row) -->
            <div class="col-span-2 row-span-1 relative">
                <x-project-card :project="$project" :bgColor="$bgColor" />
            </div>
        @elseif ($loop->index == 2)
            <!-- Two smaller cards on the bottom right (each spans 1/2 row) -->
            <div class="col-span-1 row-span-1 relative">
                <x-project-card :project="$project" :bgColor="$bgColor" />
            </div>
        @elseif ($loop->index == 3)
            <div class="col-span-1 row-span-1 relative">
                <x-project-card :project="$project" :bgColor="$bgColor" />
            </div>
        @endif
    @endforeach
</div>

<!-- Pagination for Current Projects -->
<div class="mt-6" id="pagination-current">
    <div class="pagination" data-type="current">
        {{ $currentProjects->withQueryString()->links() }} <!-- This generates numbered pagination -->
    </div>
</div>
