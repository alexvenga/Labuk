@props([
    'title'=>null,
    'href'=>null,
    'iconComponent' => null,
    'first'=>false,
    ])
<li class="flex">
    <div class="flex items-center">
        @if(!$first)
            <svg class="shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"/>
            </svg>
        @endif
        @isset($href)
            <a href="{{ $href }}"
               class="{{ $first ? null : 'ml-4 ' }}text-sm font-medium text-gray-500 hover:text-gray-700 block truncate whitespace-nowrap flex items-center">
                @isset($iconComponent)
                    @svg($iconComponent, 'shrink-0 h-5 w-5 block'. ($title ? ' mr-2' : null))
                @endisset
                {{ $title ?? null }}</a>
        @else
            <span class="ml-4 text-sm font-medium text-gray-500 block truncate whitespace-nowrap flex items-center">
                {{ $title ?? null }}</span>
        @endisset
    </div>
</li>