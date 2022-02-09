@props([
    'label',
    'for',
    'error' => false,
    'helpText' => false,
    'inline' => false,
    'paddingLess'=>false,
])
@if($inline)
    <div>
        <label for="{{ $for }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            {{ $slot }}
        </div>
        @if ($error)
            <div class="mt-1 text-sm text-red-500">{{ $error }}</div>
        @endif
        @if ($helpText)
            <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
        @endif
    </div>
@else
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start mt-4 sm:mt-0 {{ $paddingLess ? '' : 'sm:pt-5' }}">

        <label for="{{ $for }}" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
            {{ $label }}
        </label>

        <div class="sm:col-span-2">

            {{ $slot }}

            @if ($error)
                <div class="mt-1 text-red-500 text-sm">{{ $error }}</div>
            @endif
            @if ($helpText)
                <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
            @endif

        </div>

    </div>
@endif
