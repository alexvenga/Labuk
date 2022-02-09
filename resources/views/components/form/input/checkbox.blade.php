@props(['checked'=>false])
<input {{ $attributes->merge([
    'class' => 'block focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded',
    'type'  => 'checkbox',
    'value'  => '1',
])->except('checked') }} {{ $checked ? 'checked' : '' }}/>
