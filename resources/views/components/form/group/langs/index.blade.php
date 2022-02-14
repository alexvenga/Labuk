@props([
    'languages' => [],
])
<div x-data="{ tab: 'en' }" class="-mr-2 -mb-2">

    <nav class="flex flex-wrap -mr-1 -mb-1">
        @foreach($languages as $language)
            <x-labuk::button style="light" class="mr-1 mb-1" size="xs" href="#{{ $language['code'] }}"
                             x-bind:class="{ 'text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:ring-indigo-500': tab === '{{ $language['code'] }}' }"
                             @click.prevent="tab = '{{ $language['code'] }}'; window.location.hash = '{{ $language['code'] }}'">
                @if($errors->has('*.'.$language['code']))
                    <span class="flex h-2 w-2 absolute -right-1 -top-1">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                    </span>
                @endif
                {{ $language['name'] }}
            </x-labuk::button>
        @endforeach
    </nav>

    {{ $slot }}

</div>
