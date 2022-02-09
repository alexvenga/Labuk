@props([
    'label',
    'for',
    'error' => false,
    'helpText' => false,
    'inline' => false,
    'paddingLess'=>false,
])

@if($inline)
    <div class="flex items-start space-x-3">
        <div class="flex items-center h-5">
            {{ $slot }}
        </div>
        <div>
            <label for="{{ $for }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
            @if ($error)
                <div class="text-sm text-red-500">{{ $error }}</div>
            @endif
            @if ($helpText)
                <div class="text-sm text-gray-500">{{ $helpText }}</div>
            @endif
        </div>
    </div>
@else
    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start mt-4 sm:mt-0 {{ $paddingLess ? '' : 'sm:pt-5' }}">

        <div></div>

        <div class="sm:col-span-2 flex items-start space-x-3">
            <div class="flex items-center h-5">
                {{ $slot }}
            </div>
            <div>
                <label for="{{ $for }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
                @if ($error)
                    <div class="text-sm text-red-500">{{ $error }}</div>
                @endif
                @if ($helpText)
                    <div class="text-sm text-gray-500">{{ $helpText }}</div>
                @endif
            </div>
        </div>

    </div>
@endif
