<!-- ====== Portfolio Section Start -->
<section
    id="projects"
    x-data="{
                selectedTab: 'all',
                activeClasses: 'underline decoration-port-primary font-semibold',
                inactiveClasses: 'hover:underline hover:decoration-port-primary hover:font-semibold',
            }"
    class="pt-16 lg:pt-28 pb-12 lg:pb-28 bg-port-secondary dark:bg-port-secondary-dark"
>
<div class="container">
    <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
            <div class="flex-col ">
                <div class="flex justify-center ">
                    <p class="text-xs lg:text-base font-semibold">Projects</p>
                    <span class="my-auto ml-2 h-1 w-32 block bg-port-text dark:bg-port-text-dark"></span>
                </div>
                <p class="text-xs lg:text-sm text-center">more coming soon!</p>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap justify-center -mx-4 mt-6">
        <div class="w-full px-4">
            <ul class="flex flex-wrap justify-center mb-12 space-x-1">
                <li class="mb-1">
                    <button
                        @click="selectedTab = 'all'"
                        :class="selectedTab === 'all' ? activeClasses : inactiveClasses"
                        class="inline-block py-1 lg:py-2 px-3 lg:px-4 rounded-lg text-xs lg:text-sm text-center transition"
                    >
                        All Projects
                    </button>
                </li>
                @foreach ($tabs as $tab)
                    <li class="mb-1">
                        <button
                        @click="selectedTab = '{{$tab}}'"
                        :class="selectedTab ==='{{$tab}}' ? activeClasses : inactiveClasses"
                        class="inline-block py-1 lg:py-2 px-3 lg:px-4 rounded-lg text-xs lg:text-sm text-center transition"
                        >
                            {{$tab}}
                        </button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="flex flex-wrap mx-4 justify-around">
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