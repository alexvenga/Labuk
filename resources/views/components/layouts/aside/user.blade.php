<div class="shrink-0 flex bg-gray-700 p-4">
    <div class="shrink-0 w-full group block text-gray-300">
        <div class="flex items-center">
            <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-gray-500">
              <span class="text-sm font-medium leading-none text-white">
                  {{ Str::substr(auth()->user()->name,0,2) }}
              </span>
            </span>
            <div class="ml-3 overflow-hidden">
                <div class="text-sm font-medium overflow-hidden truncate">
                    {{ auth()->user()->name }}
                </div>
                <div class="text-xs font-medium overflow-hidden truncate">
                    {{ auth()->user()->email }}
                </div>
            </div>
        </div>
    </div>
</div>
