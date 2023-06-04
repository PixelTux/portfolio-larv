<!-- ====== Navbar Section Start -->
<header
    x-data="{navbarOpen: false }"
    class="flex left-0 top-0 z-50 w-full items-center bg-port-secondary dark:bg-port-secondary-dark h-18 lg:h-24 shadow-md"
>
    <div class="container mx-auto">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 px-4">
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
                    <span class="text-xl lg:text-2xl font-permarker">{{ config('app.name') }}</span>
                </a>
            </div>
            <div class="lg:ml-4 xl:ml-2 flex justify-center w-auto">
                <button type="button" 
                        x-bind:class="darkMode ? 'bg-neutral-700' : 'bg-stone-300'"
                        x-on:click="darkMode = !darkMode"
                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-port-secondary dark:border-port-secondary-dark transition-colors duration-200 ease-in-out"
                        role="switch"
                        aria-checked="false"
                    >
                    <span x-bind:class="darkMode ? 'translate-x-5 bg-neutral-200' : 'translate-x-0 bg-stone-700'"
                            class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full shadow ring-0 transition duration-200 ease-in-out">
                        <span x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'"
                                class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                    class="h-3 w-3 text-yellow-300"
                                    viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                            </svg>
                        </span>
                        <span x-bind:class="darkMode ?  'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'"
                                class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                                aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-600"
                                    viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </span>
                </button>
            </div>
            <div class="flex px-4 justify-between items-center w-[16rem]">
                <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                                            x-bind:class="navbarOpen && 'navbarTogglerActive'">
                </x-layout.navbar-hamburger>
                <nav
                    :class="!navbarOpen && 'hidden'"
                    id="navbarCollapse"
                    class="absolute right-0 top-full w-full bg-port-secondary py-5 px-6 z-50 rounded-2xl dark:bg-port-secondary-dark dark:text-port-text-dark lg:px-0 lg:block lg:w-full lg:max-w-full lg:right-4 lg:static lg:shadow-none shadow-port"
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