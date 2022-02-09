@props(['datetime'])
<x-labuk::table.td {{ $attributes->merge(['class' => 'text-center py-1']) }}>
    {{ $slot }}
    @isset($datetime)
        <div class="text-xs">{{ $datetime->isoformat('LL') }}</div>
        <div class="text-xs">{{ $datetime->isoformat('LT') }}</div>
    @endisset
</x-labuk::table.td>
