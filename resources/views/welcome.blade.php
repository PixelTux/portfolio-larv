<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['./resources/css/app.css', './resources/js/app.js '])
    </head>
    <header>
        <!-- ====== Navbar Section Start -->
<header
  x-data="
        {
          navbarOpen: false
        }
      "
  class="flex w-full items-center bg-white"
>
  <div class="container mx-auto">
    <div class="relative -mx-4 flex items-center justify-between">
      <div class="w-60 max-w-full px-4">
        <a href="javascript:void(0)" class="block w-full py-5">
          <img
            src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo.svg"
            alt="logo"
            class="w-full"
          />
        </a>
      </div>
      <div class="flex w-full items-center justify-between px-4">
        <div>
          <button
            @click="navbarOpen = !navbarOpen"
            :class="navbarOpen && 'navbarTogglerActive' "
            id="navbarToggler"
            class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden"
          >
            <span
              class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"
            ></span>
            <span
              class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"
            ></span>
            <span
              class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"
            ></span>
          </button>
          <nav
            :class="!navbarOpen && 'hidden' "
            id="navbarCollapse"
            class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none"
          >
            <ul class="block lg:flex">
              <li>
                <a
                  href="javascript:void(0)"
                  class="text-dark hover:text-primary flex py-2 text-base font-medium lg:ml-12 lg:inline-flex"
                >
                  Home
                </a>
              </li>
              <li>
                <a
                  href="javascript:void(0)"
                  class="text-dark hover:text-primary flex py-2 text-base font-medium lg:ml-12 lg:inline-flex"
                >
                  Payment
                </a>
              </li>
              <li>
                <a
                  href="javascript:void(0)"
                  class="text-dark hover:text-primary flex py-2 text-base font-medium lg:ml-12 lg:inline-flex"
                >
                  Features
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
          <a
            href="javascript:void(0)"
            class="text-dark hover:text-primary py-3 px-7 text-base font-medium"
          >
            Login
          </a>
          <a
            href="javascript:void(0)"
            class="bg-primary rounded-lg py-3 px-7 text-base font-medium text-white hover:bg-opacity-90"
          >
            Sign Up
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- ====== Navbar Section End -->

    </header>
    <body>
        
        <h1 class="text-3xl font-light underline text-port-primary ">
            Hello world!
        </h1>
        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            <div>
                <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
                </span>
            </div>
            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Writes Upside-Down</h3>
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space.
            </p>
        </div>
        <div x-data="{ count: 0 }">
            <button x-on:click="count++">Increment</button>  
            <span x-text="count"></span>
        </div>
        <h1 class="" x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    </body>
</html>