<div class="shadow border-b border-gray-200 min-w-full max-w-full overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 bg-gray-300">
        @isset($head)
            <thead>
            <tr>
                {{ $head }}
            </tr>
            </thead>
        @endisset
        <tbody>
        {{ $slot }}
        </tbody>
    </table>
</div>
@isset($paginator)
    {{ $paginator->links('labuk::table-pagination') }}
@endif
