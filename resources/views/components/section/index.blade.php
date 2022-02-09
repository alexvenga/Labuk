@props([
    'marginless' => false
])
<div {{ $attributes->merge([
    'class' => $marginless ?: 'mx-4 sm:mx-6 2xl:mx-8 my-6',
]) }}>
    {{ $slot }}
</div>
