@props(['name', 'label'])

<label for="{{ $name }}" {{ $attributes->merge(['class' => 'font-semibold ']) }}>
    {{ $label }}
</label>