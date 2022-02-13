@props(['cols'=>2])
<div {{ $attributes->merge(['class'=>'grid gap-4 sm:gap-5 md:grid-cols-'.$cols.' items-center']) }}}>
    {{ $slot }}
</div>
