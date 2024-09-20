@props(['label', 'name', 'value', 'active' => false, 'checked' => false])

@php
    $defaults = [
        'type' => 'radio',
        'id' => $name . '-' . Str::slug($value),
        'name' => $name,
        'value' => $value,
        'class' => 'form-checkbox'
    ];
@endphp

<div class="flex items-center">
    <input {{ $attributes->merge($defaults) }} {{ $checked ? 'checked' : '' }} />
    <label for="{{ $defaults['id'] }}"
        class="{{ $active ? ' border-b border-gna/20  text-gna' : 'text-gna hover:bg-gna/10 hover:text-gna rounded-lg' }} p-2 text-sm font-semibold"
    >{{ $label }}</label>
</div>