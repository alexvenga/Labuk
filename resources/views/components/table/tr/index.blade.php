<tr {{ $attributes->merge(['class' => 'even:bg-gray-50 odd:bg-white hover:bg-opacity-75']) }}>
    {{ $slot }}
</tr>
