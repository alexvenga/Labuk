@props([
    'size' => 'md',
    'style' => 'light',
    'dot' => false,
])
@php
    $badgeSize = match ($size) {
        //'md' => 'px-2.5 py-0.5', => default
        'lg' => 'px-3 py-0.5 text-sm',
        default => 'px-2.5 py-0.5 text-xs',
    };
    $badgeStyle = match ($style) {
        'light' => 'bg-gray-100 text-gray-800',
        'primary' => 'bg-indigo-700 text-white',
        'secondary' => 'bg-indigo-100 text-indigo-700',
        'success' => 'bg-green-100 text-green-800',
        'danger' => 'bg-red-100 text-red-800',
        'warning' => 'bg-yellow-100 text-yellow-800',
        'info' => 'bg-cyan-100 text-cyan-800',
        'dark' => 'bg-gray-700 text-gray-100',
        default => '',
    };
    $dotStyle = match ($style) {
        'light' => 'text-gray-400',
        'primary' => 'text-gray-200',
        'secondary' => 'text-indigo-400',
        'success' => 'text-green-400',
        'danger' => 'text-red-400',
        'warning' => 'text-yellow-500',
        'info' => 'text-cyan-400',
        'dark' => 'text-gray-300',
        default => '',
    };
@endphp
<span {{ $attributes->merge([
    'class' => 'inline-flex items-center rounded-full font-medium '.$badgeSize.' '.$badgeStyle,
]) }}>
    @if($dot)
        <svg class="mr-1.5 h-2 w-2 {{ $dotStyle }}" fill="currentColor" viewBox="0 0 8 8"><circle cx="4" cy="4" r="3"/></svg>
    @endif
    {{ $slot }}
</span>
