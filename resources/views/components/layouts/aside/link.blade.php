@props([
    'active'        => false,
    'iconComponent' => null,
])
<a {{ $attributes->merge([
    'href' => '#',
    'class' => ($active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white') .
        ' group flex items-center px-2 py-2 text-sm font-medium rounded-md',
]) }}>
    @isset($iconComponent)
        @svg($iconComponent, ($active ? 'text-gray-300' : 'text-gray-400 group-hover:text-gray-300') .
            ' mr-3 shrink-0 h-6 w-6')
    @endisset
    <div class="overflow-hidden truncate">{{ $slot }}</div>
</a>
