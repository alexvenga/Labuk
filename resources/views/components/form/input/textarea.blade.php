<textarea {{ $attributes->merge([
    'class' => 'block w-full shadow-sm text-base focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md',
    'type'  => 'text',
    'rows'=>'3',
])->except(['value']) }}>@isset($value){!! $value !!}@endisset</textarea>
