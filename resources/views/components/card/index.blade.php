@props([
    'content',
    'header'=>null,
    'footer'=>null,
])
<div {{ $attributes->merge([
            'class'=>'bg-white shadow rounded-lg divide-y divide-gray-200 overflow-hidden'
        ]) }}>
    @isset($header)
        <div {{ $header->attributes->merge([
            'class'=>'px-4 py-5 sm:px-6'
        ]) }}>
            {{ $header }}
        </div>
    @endisset
    <div {{ $content->attributes->merge([
            'class'=>'px-4 py-5 sm:p-6'
        ]) }}>
        {{ $content }}
    </div>
    @isset($footer)
        <div {{ $footer->attributes->merge([
            'class'=>'bg-gray-50 px-4 py-4 sm:px-6'
        ]) }}>
            {{ $footer }}
        </div>
    @endisset
</div>
