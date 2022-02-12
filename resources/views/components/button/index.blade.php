@props([
    'size' => 'md',
    'style' => 'light',
    'iconComponent' => null,
])
@php
    $iconSize = match ($size) {
        'xs' => 'h-3.5 w-3.5',
        'sm' => 'h-4 w-4',
        //'md' => 'h-5 w-5', => default
        //'lg','xl' => 'h-5 w-5', => default
        default => 'h-5 w-5',
    };
    if ($slot->isNotEmpty()) {
        $iconSize .= match ($size) {
            'xs' => ' -ml-0.5 mr-1',
            'sm' => ' -ml-0.5 mr-2',
            //'md' => ' -ml-1 mr-2', => default
            'lg','xl' => ' -ml-1 mr-3',
            default => ' -ml-1 mr-2',
        };
    }
    $buttonSize = match ($size) {
        'xs' => 'px-2 py-1 text-xs rounded',
        'sm' => 'px-3 py-2 text-sm leading-4 rounded-md',
        // 'md' => 'px-4 py-2 text-sm rounded-md', => default
        'lg' => 'px-4 py-2 text-base rounded-md',
        'xl' => 'px-6 py-3 text-base rounded-md',
        default => 'px-4 py-2 text-sm rounded-md',
    };
    $style = match ($style) {
    'light'     => 'border border-gray-300 text-gray-700 bg-white hover:bg-gray-50 focus:ring-indigo-500',
    'primary'   => 'border border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500',
    'secondary' => 'border border-transparent text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:ring-indigo-500',
    'success'   => 'border border-transparent text-white bg-green-600 hover:bg-green-700 focus:ring-green-500',
    'danger'    => 'border border-transparent text-white bg-red-600 hover:bg-red-700 focus:ring-red-500',
    'warning'   => 'border border-transparent text-gray-700 bg-yellow-300 hover:bg-yellow-400 focus:ring-yellow-500',
    'info'      => 'border border-transparent text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-cyan-500',
    'dark'      => 'border border-transparent text-white bg-gray-600 hover:bg-gray-700 focus:ring-gray-500',
    'success-o' => 'border border-green-500 text-green-500 bg-white hover:bg-green-500 hover:text-white focus:ring-green-500',
    'danger-o'  => 'border border-red-500 text-red-500 bg-white hover:bg-red-500 hover:text-white focus:ring-red-500',
    'warning-o' => 'border border-yellow-600 text-yellow-600 bg-white hover:bg-yellow-600 hover:text-white focus:ring-yellow-600',
    'info-o'    => 'border border-cyan-500 text-cyan-500 bg-white hover:bg-cyan-500 hover:text-white focus:ring-cyan-500',
    default     => '',
    };
@endphp

@if($attributes->has('href'))
    <a {{ $attributes->merge([
        'href'=>'#',
        'class'=>'inline-flex items-center shadow-sm font-medium focus:outline-none focus:ring-2 ' . $buttonSize . ' ' . $style,
    ]) }}>
        @isset($iconComponent)
            @svg($iconComponent, $iconSize)
        @endisset
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'type'=>'button',
        'class'=>'inline-flex items-center shadow-sm font-medium focus:outline-none focus:ring-2 ' . $buttonSize . ' ' . $style,
    ]) }}>
        @isset($iconComponent)
            @svg($iconComponent, $iconSize)
        @endisset
        {{ $slot }}
    </button>
@endif
