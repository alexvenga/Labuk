@props([
    'code'
])
<div x-show="tab === '{{ $code }}'" x-cloak class="sm:pt-5">
    {{ $slot }}
</div>
