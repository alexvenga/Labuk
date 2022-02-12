<div>
    @if ($paginator->hasPages())
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)

        <nav class="border-t border-gray-200 flex items-center justify-between">

            <div class="-mt-px w-0 flex-1 flex">
                @if ($paginator->onFirstPage())
                    <div aria-hidden="true"
                         class="border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm font-medium text-gray-500">
                        <x-heroicon-s-arrow-narrow-left class="mx-4 sm:mx-6 2xl:mx-8 h-5 w-5 text-gray-300"/>
                    </div>
                @else
                    <button wire:click="previousPage('{{ $paginator->getPageName() }}')"
                       rel="prev" aria-label="@lang('pagination.previous')"
                       class="border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm font-medium text-gray-500
                        hover:text-gray-700 hover:border-gray-300">
                        <x-heroicon-s-arrow-narrow-left class="mx-4 sm:mx-6 2xl:mx-8 h-5 w-5 text-gray-400"/>
                    </button>
                @endif
            </div>

            <div class="hidden lg:-mt-px lg:flex">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span class="border-transparent text-gray-500 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium"
                              aria-disabled="true">
                        {{ $element }}
                    </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page"
                                      class="border-indigo-500 text-indigo-600 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium"
                                      aria-current="page">
                                {{ $page }}
                            </span>
                            @else
                                <button wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                   class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
                                    {{ $page }}
                                </button>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>

            <div class="text-xs text-gray-700 text-center pt-4 px-4 lg:hidden">
                {!! __('Showing') !!}
                @if ($paginator->firstItem())
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                @else
                    {{ $paginator->count() }}
                @endif
                {!! __('of') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </div>

            <div class="-mt-px w-0 flex-1 flex justify-end">
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage('{{ $paginator->getPageName() }}')"
                       rel="next" aria-label="@lang('pagination.next')"
                       class="border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        <x-heroicon-s-arrow-narrow-right class="mx-4 sm:mx-6 2xl:mx-8 h-5 w-5 text-gray-400"/>
                    </button>
                @else
                    <span class="border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm font-medium text-gray-500"
                          aria-hidden="true" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <x-heroicon-s-arrow-narrow-right class="mx-4 sm:mx-6 2xl:mx-8 h-5 w-5 text-gray-300"/>
                    </span>
                @endif
            </div>

        </nav>

        <div class="text-xs text-gray-700 text-center mt-4 hidden lg:block">
            {!! __('Showing') !!}
            @if ($paginator->firstItem())
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
            @else
                {{ $paginator->count() }}
            @endif
            {!! __('of') !!}
            <span class="font-medium">{{ $paginator->total() }}</span>
            {!! __('results') !!}
        </div>
    @endif
</div>
