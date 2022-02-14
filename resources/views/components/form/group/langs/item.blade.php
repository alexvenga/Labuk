@props([
    'code'
])
<div x-show="tab === '{{ $code }}'" x-cloak>
    {{ $slot }}
</div>
