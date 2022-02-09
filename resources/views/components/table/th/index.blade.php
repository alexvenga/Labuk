@empty($slot)
    <th></th>
@else
    <th {{ $attributes->merge(['class' => 'p-2 text-left text-sm font-medium text-gray-500 bg-gray-50 uppercase']) }}>
        {{ $slot }}
    </th>
@endempty
