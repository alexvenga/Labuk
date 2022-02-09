@props([
    'active' => false,
])
<a tabindex="-1" {{ $attributes->merge([
    'class' => ($active ? 'bg-gray-200 text-gray-900' : 'text-gray-700 hover:bg-gray-200 hover:text-gray-900').' block px-4 py-2 text-sm',
    'href'  => '#',
]) }}>
    {{ $slot }}
</a>
