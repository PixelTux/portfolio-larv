<!-- ====== Navbar Section Start -->
<header
x-data="
            {
                navbarOpen: false
            }
        "
class="flex left-0 top-0 z-50 w-full items-center bg-port-secondary dark:bg-port-secondary-dark h-18 lg:h-24 shadow-md"
>
    <div class="container mx-auto">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 max-w-full px-4 ">
                <a href="/" class="flex w-full py-2 text-port-primary">
                    <img 
                        src="{{ url('/img/logo.png')}}" 
                        alt="logo"
                        class="w-[43px] lg:w-[54px] inline-block dark:hidden"
                    />
                    <img 
                        src="{{ url('/img/logo-white.png')}}" 
                        alt="logo"
                        class="w-[43px] lg:w-[54px] hidden dark:inline-block text-port-primary"
                    />
                    <span class="text-xl xl:text-2xl font-permarker ">PixelTux</span>
                </a>
            </div>
            <div class="flex px-4 justify-between items-center w-full">
                <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                                            x-bind:class="navbarOpen && 'navbarTogglerActive'">
                </x-layout.navbar-hamburger>
                <nav
                    :class="!navbarOpen && 'hidden' "
                    id="navbarCollapse"
                    class="absolute right-4 top-full max-w-[23em] bg-port-secondary py-5 px-6 z-50 w-full rounded-lg shadow dark:bg-port-secondary-dark dark:text-port-text-dark lg:px-0 lg:block lg:w-full lg:max-w-full lg:right-4 lg:static lg:shadow-none"
                >
                    <ul class="block lg:flex lg:items-center lg:justify-end">
                        @foreach ($navigationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">
                                {{ $item['label'] }}
                            </x-layout.navbar-item>
                        @endforeach
                    </ul>

                </nav>
            </div>

        </div>
    </div>
</header>
<!-- ====== Navbar Section End -->