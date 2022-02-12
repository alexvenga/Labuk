@props([
    'style' => null,
])
@php
    $style = match ($style) {
//    'light'     => 'border border-gray-300 text-gray-700 bg-white hover:bg-gray-50 focus:ring-indigo-500',
//    'primary'   => 'border border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500',
//    'secondary' => 'border border-transparent text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:ring-indigo-500',
    'success'   => 'bg-green-100',
    'danger'    => 'bg-red-100',
//    'warning'   => 'border border-transparent text-gray-700 bg-yellow-300 hover:bg-yellow-400 focus:ring-yellow-500',
//    'info'      => 'border border-transparent text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-cyan-500',
//    'dark'      => 'border border-transparent text-white bg-gray-600 hover:bg-gray-700 focus:ring-gray-500',
    default     => 'even:bg-gray-50 odd:bg-white',
    };
@endphp
<tr {{ $attributes->merge(['class' => $style.' hover:bg-opacity-75']) }}>
    {{ $slot }}
</tr>
