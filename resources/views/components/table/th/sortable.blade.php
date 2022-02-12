@props([
    'direction' => null,
    'livewire' => false,
])
<x-labuk::table.th {{ $attributes->only('class') }}>
    @if($livewire)
        <button {{ $attributes->except('class') }}
           class="inline-flex items-center space-x-1 group font-bold -mr-4">
            <span class="group-hover:underline">{{ $slot }}</span>
            <span class="relative flex items-center">
                @if ($direction === 'asc')
                    <x-heroicon-o-chevron-up class="w-3 h-3 group-hover:opacity-0 transition-opacity"/>
                    <x-heroicon-o-chevron-down class="w-3 h-3 opacity-0 group-hover:opacity-100 absolute transition-opacity"/>
                @elseif ($direction === 'desc')
                    <x-heroicon-o-chevron-down class="w-3 h-3 group-hover:opacity-0 transition-opacity"/>
                    <x-heroicon-o-chevron-up class="w-3 h-3 opacity-0 group-hover:opacity-100 absolute transition-opacity"/>
                @else
                    <x-heroicon-o-chevron-up class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity"/>
                @endif
            </span>
        </button>
    @elseif($attributes->has('href'))
        <a {{ $attributes->except('class') }}
           class="inline-flex items-center space-x-1 group font-bold -mr-4">
            <span class="group-hover:underline">{{ $slot }}</span>
            <span class="relative flex items-center">
                @if ($direction === 'asc')
                    <x-heroicon-o-chevron-up class="w-3 h-3 group-hover:opacity-0 transition-opacity"/>
                    <x-heroicon-o-chevron-down class="w-3 h-3 opacity-0 group-hover:opacity-100 absolute transition-opacity"/>
                @elseif ($direction === 'desc')
                    <x-heroicon-o-chevron-down class="w-3 h-3 group-hover:opacity-0 transition-opacity"/>
                    <x-heroicon-o-chevron-up class="w-3 h-3 opacity-0 group-hover:opacity-100 absolute transition-opacity"/>
                @else
                    <x-heroicon-o-chevron-up class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity"/>
                @endif
            </span>
        </a>
    @else
        {{ $slot }}
    @endif
</x-labuk::table.th>
