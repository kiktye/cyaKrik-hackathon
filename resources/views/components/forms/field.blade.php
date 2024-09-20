@props(['label' => null, 'name'])

<div class="flex items-center justify-center space-x-4 ">
    @if ($label)
        <x-forms.label :name="$name" :label="$label" />
    @endif

    {{ $slot }}
</div>