<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{ $title ?? config('app.name') }}</title>
    @isset($description)
        <meta name="description" content="{{ $description }}"/>
    @endisset

    {{-- Fonts --------------------------------}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Stylesheets --------------------------}}
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script>
        tailwind.config = {
            theme: {
                screens: {
                    'xs': '360px',
                    'sm': '640px',
                    'md': '768px',
                    'lg': '1024px',
                    'xl': '1280px',
                    '2xl': '1536px',
                },
                /*
                container: {
                    center: true,
                    padding: {
                        DEFAULT: '1rem',
                        // xs: '0.5rem',
                        // sm: '2rem',
                        lg: '2rem',
                    },
                    screens: {
                        //sm: '640px',
                        //md: '768px',
                        //lg: '1024px',
                        //xl: '80rem',
                        //'2xl': '1536px',
                    },
                },
                */
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'Arial', 'sans-serif'],
                    },
                    colors: {
                        current: 'currentColor'
                    },
                },
            },
        }
    </script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    {{ $headStyles ?? '' }}
    @livewireStyles

</head>
<body class="antialiased font-sans bg-gray-100 overflow-hidden">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="h-screen flex overflow-hidden bg-gray-100"
     x-data="{ mobileSidebarOpen: false }">

    <div class="fixed inset-0 flex z-40 2xl:hidden"
         x-show="mobileSidebarOpen" x-cloak>

        <div class="fixed inset-0 bg-gray-600 bg-opacity-75"
             @click="mobileSidebarOpen = false"
             x-show="mobileSidebarOpen"
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"></div>

        <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800"
             x-show="mobileSidebarOpen"
             x-transition:enter="transition ease-in-out duration-300"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
        >
            <div class="absolute top-0 right-0 -mr-12 pt-2"
                 @click="mobileSidebarOpen = false"
                 x-show="mobileSidebarOpen"
                 x-transition:enter="ease-in-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in-out duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0">
                <button
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <x-heroicon-o-x class="h-6 w-6 text-white"/>
                </button>
            </div>

            <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                <div class="shrink-0 flex items-center px-4 overflow-hidden">
                    <a href="/"
                       class="block truncate overflow-hidden text-gray-500 font-bold text-2xl hover:text-gray-300">
                        {{ config('app.name') }}
                    </a>
                </div>
                <nav class="mt-5 px-2 space-y-1">
                    <x-labuk::main-menu/>
                </nav>
            </div>

            <x-labuk::layouts.aside.user/>

        </div>

        <div class="shrink-0 w-14">
            <!-- Force sidebar to shrink to fit close icon -->
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden 2xl:flex 2xl:shrink-0">
        <div class="flex flex-col w-64">

            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col h-0 flex-1 bg-gray-800">
                <div class="flex-1 flex flex-col pt-3 pb-4 overflow-y-auto">
                    <div class="flex items-center shrink-0 px-4">
                        <a href="/"
                           class="block truncate overflow-hidden text-gray-500 font-bold text-2xl hover:text-gray-300">
                            {{ config('app.name') }}
                        </a>
                    </div>
                    <nav class="mt-5 flex-1 px-2 space-y-1">
                        <x-labuk::main-menu/>
                    </nav>
                </div>

                <x-labuk::layouts.aside.user/>

            </div>

        </div>
    </div>
    <div class="flex flex-col w-0 flex-1 overflow-hidden">

        <div class="px-4 sm:px-6 2xl:px-8 flex items-center justify-between shadow-md border-b z-10">
            <button
                    @click="mobileSidebarOpen = true"
                    class="my-1 shrink-0 -ml-2 h-10 w-10 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900
                    focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 2xl:hidden">
                <x-heroicon-o-menu class="h-6 w-6"/>
            </button>
            <div></div>
            @isset($header)
                <div class="grow p-2 2xl:px-0 2xl:py-4 overflow-hidden">
                    <div class="text-lg 2xl:text-2xl text-right 2xl:text-left font-semibold text-gray-900 overflow-hidden truncate">
                        {{ $header }}
                    </div>
                    @isset($headerHelper)
                        <div class="text-xs text-right 2xl:text-left overflow-hidden truncate">
                            {{ $headerHelper }}
                        </div>
                    @endisset
                </div>
            @endisset
            <div></div>
            @isset($actions)
                <div class="shrink-0">
                    <div class="my-1 -mr-3 h-10 w-10 inline-flex items-center justify-center">
                        <x-labuk::dropdown>
                            <x-slot name="trigger">
                                <x-labuk::dropdown.dots-vertical/>
                            </x-slot>
                            <x-slot name="content">
                                {{ $actions }}
                            </x-slot>
                        </x-labuk::dropdown>
                    </div>
                </div>
            @endisset

        </div>

        <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none pb-12">

            @isset($breadcrumbs)
                {{ $breadcrumbs }}
            @endisset

            {{ $slot }}

        </main>
    </div>
</div>


{{-- Scripts ------------------------}}
<script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
{{ $footerScripts ?? '' }}
@livewireScripts

</body>
</html>
