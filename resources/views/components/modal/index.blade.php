@props([
    'id',
    'maxWidth',
    'livewire'       => false,
    'alpineOpenName' => null,
    ])

@php
    $maxWidth= match($maxWidth)
    {
        'sm'=>'sm:max-w-sm',
        'md'=>'sm:max-w-md',
        'lg'=>'sm:max-w-lg',
        'xl'=>'sm:max-w-xl',
        '3xl'=>'sm:max-w-3xl',
        '4xl'=>'sm:max-w-4xl',
        '5xl'=>'sm:max-w-5xl',
        '6xl'=>'sm:max-w-6xl',
        '7xl'=>'sm:max-w-7xl',
        default=>'sm:max-w-2xl',
    };
    if($livewire) {
        $alpineOpenName = 'showModal';
    }
    if (!$alpineOpenName) {
        throw new \Exception('Not set $alpineOpenName or livewire="true"');
    }
@endphp

<div class="fixed z-10 inset-0 overflow-y-auto"
     @if($livewire)
        x-data="{ showModal: @entangle($attributes->wire('model')) }"
     @endif
     @close.stop="{{ $alpineOpenName }} = false"
     @keydown.escape.stop="{{ $alpineOpenName }} = false"
     x-show="{{ $alpineOpenName }}" x-cloak>

    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div x-show="{{ $alpineOpenName }}" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
             x-on:click="{{ $alpineOpenName }} = false"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
            <div class="absolute z-60 inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

        <div x-show="{{ $alpineOpenName }}"
             class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:w-full {{ $maxWidth }}"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            {{ $slot }}
        </div>
    </div>
</div>
