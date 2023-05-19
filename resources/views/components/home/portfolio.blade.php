<!-- ====== Portfolio Section Start -->
<section
    id="portfolio"
    x-data="{
                selectedTab: 'all',
                activeClasses: 'bg-port-primary text-port-text-dark dark:text-port-text',
                inactiveClasses: ' hover:bg-port-primary hover:text-port-text-dark hover:dark:text-port-text',
            }"
    class="pt-16 lg:pt-28 pb-12 lg:pb-20 bg-port-secondary dark:bg-port-secondary-dark"
>
<div class="container">
    <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
            <div class="text-center mx-auto mb-4 max-w-lg">
                <h2 class="font-bold font-permarker text-xl lg:text-3xl text-port-primary">
                    Some Projects 
                </h2>
                <p class="text-xs lg:text-base">and more coming soon!</p>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap justify-center -mx-4">
        <div class="w-full px-4">
            <ul class="flex flex-wrap justify-center mb-12 space-x-1">
                <li class="mb-1">
                    <button
                        @click="selectedTab = 'all'"
                        :class="selectedTab === 'all' ? activeClasses : inactiveClasses"
                        class="inline-block py-1 lg:py-2 px-3 lg:px-4 rounded-lg text-xs lg:text-sm font-semibold text-center transition"
                    >
                        All Projects
                    </button>
                </li>
                @foreach ($tabs as $tab)
                    <li class="mb-1">
                        <button
                        @click="selectedTab = '{{$tab}}'"
                        :class="selectedTab ==='{{$tab}}' ? activeClasses : inactiveClasses"
                        class="inline-block py-1 lg:py-2 px-3 lg:px-4 rounded-lg text-xs lg:text-sm font-semibold text-center transition"
                        >
                            {{$tab}}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="flex flex-wrap -mx-4 justify-around">
        @foreach ($items as $item)
            <x-portfolio-item
                :title="$item['title']"
                :categories="$item['category']"
                :image="$item['image']"
                :link="$item['link']"
            />
        @endforeach
    </div>
</div>
</section>
<!-- ====== Portfolio Section End -->