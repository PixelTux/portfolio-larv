<div
    x-data="{categories: {{ json_encode($categories) }} }"
    :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' "
    class="w-full md:w-1/2 xl:w-1/3 px-4"
>
    <div class="relative mb-6">
        <a href="{{$link}}" target="_blank">
            <div class="rounded-lg border border-port-primary border-opacity-10 overflow-hidden ease-in duration-100 hover:scale-105">
                <img
                    src="{{ $image }}"
                    alt="portfolio"
                    class="w-full h-64 object-cover"
                />
            </div>
        </a>
    <div
        class="text-center bg-port-body-color dark:bg-port-body-color-dark relative opacity-95 z-10 py-6 px-3 rounded-lg shadow-lg mx-7 -mt-24 h-auto">
        <span class="text-sm font-thin block mb-1">
            {{ implode(", ", $categories) }}
        </span>
            <h3 class="font-permarker text-lg text-port-primary mb-1">
                {{ $title }}
            </h3>
            <x-button-link href="{{ $link }}">
                View Details
            </x-button-link>
        </div>
    </div>
</div>