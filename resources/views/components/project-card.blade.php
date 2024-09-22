@props(['project', 'bgColor'])


<div
    class="absolute top-0 left-0 w-full {{ $bgColor }} text-white text-xl font-bold text-center py-3.5 rounded-t-3xl">
    {{ $project->name }}
</div>
<img src="{{ asset($project->image_url) }}" class="rounded-3xl w-full h-full object-cover">
</a>
