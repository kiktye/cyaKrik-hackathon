<form {{ $attributes(["class" => "max-w-2xl mx-auto space-x-6 flex justify-center items-center"]) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>