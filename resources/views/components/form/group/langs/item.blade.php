@props([
    'code'
])
<div x-show="tab === '{{ $code }}'">
    {{ $slot }}
</div>
