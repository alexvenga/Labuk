<nav {{ $attributes->merge(['class'=>'bg-white border-b border-gray-200 shadow-md border-b hidden md:flex max-w-full overflow-y-auto']) }}>
    <ol class="flex items-center space-x-4 mx-4 sm:mx-6 2xl:mx-8">
        {{ $slot }}
    </ol>
</nav>