@props([
    'placeholder' => null,
])
<select {{ $attributes->merge([
    'class' => 'block w-full shadow-sm text-base focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md focus:outline-none',
]) }}/>
    @if ($placeholder !== null)
        <option value="">{{ is_bool($placeholder) ? '' : $placeholder }}</option>
    @endif
    {{ $slot }}
</select>