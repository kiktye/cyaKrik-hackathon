@props(['active' => false])

<a class="text-black text-xl font-semibold rounded-2xl border-2 border-orange px-3 hover:border-2 hover:border-black group hover:px-1"
    {{ $attributes }}>
    {{ $slot }}</a>
