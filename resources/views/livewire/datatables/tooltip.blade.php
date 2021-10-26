<div x-data="{ tooltip: false }" class="relative z-30 inline-flex group cursor-pointer">
    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="inline-block flex">
        {{ Str::limit($slot, $length) }}
    </div>
    <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
        <div class=" absolute w-96 -ml-28 whitespace-pre-wrap rounded-lg bg-gray-100 border border-gray-300 shadow-xl text-gray-700 text-left whitespace-normal top-0 z-10 p-1 -mt-0 text-sm transform -translate-x-1/2 -translate-y-full rounded-lg shadow-lg">
            {{ $slot }}
        </div>
    </div>
</div>
