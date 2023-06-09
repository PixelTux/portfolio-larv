<!-- ====== Contact Section Start -->
<section id="contact" class="bg-port-body-color dark:bg-port-body-color-dark py-20 lg:py-28 overflow-hidden relative z-10">
    <div class="container">
        <div class="flex justify-center">
            <p class="text-xs lg:text-base font-semibold">CONTACT</p>
            <span class="my-auto ml-2 h-1 w-32 block bg-port-text dark:bg-port-text-dark"></span>
        </div>
        <div class="flex flex-wrap lg:justify-between mx-4">
            <div class="w-full lg:w-2/5 px-4 my-12">
                <div class="flex justify-start items-center pb-5">
                    <span class=" mr-4 text-xl xl:text-2xl font-permarker text-port-primary">
                        Let's Talk
                    </span>
                    <x-social-icons/>
                </div>
                <div class="max-w-xl mb-12 lg:mb-0 ">
                    <p>If you believe that my experience and skills align with your requirements, please don't hesitate to get in touch.</p>
                </div>
                <div class="flex mt-4 items-center">
                    <svg 
                        width="48" 
                        height="48" 
                        viewBox="0 0 91 91" 
                        class="fill-current">
                        <path d="M71.9,23.9c-0.5-0.3-1.1-0.3-1.6-0.1l-3.7,1.8c-0.8,0.4-1.2,1.4-0.8,2.3c0.4,0.8,1.4,1.2,2.3,0.8l1.2-0.6l0.2,37.3   l-13.8,6.7V46.5c0-0.9-0.8-1.7-1.7-1.7s-1.7,0.8-1.7,1.7v25.8l-15.8-6.4v-6.6c1.8-1.9,6.6-7.5,6.6-11.2c0-4-2.9-7.4-6.6-8.1V27.7   l3,1c0.9,0.3,1.8-0.2,2.1-1s-0.2-1.8-1-2.1l-5.3-1.8c-0.4-0.1-0.9-0.1-1.3,0.1l-13.3,6.6C20.3,30.8,20,31.4,20,32v41   c0,0.6,0.3,1.1,0.8,1.4c0.5,0.3,1.1,0.4,1.6,0.1L35.3,69l18.2,7.3c0.2,0.1,0.4,0.1,0.6,0.1c0.3,0,0.5-0.1,0.7-0.2L72,67.9   c0.6-0.3,1-0.9,0.9-1.5l-0.3-41C72.7,24.8,72.4,24.2,71.9,23.9z M39.9,48.1c0,1.7-2.6,5.4-4.9,8.1c-2.3-2.7-4.9-6.3-4.9-8.1   c0-2.7,2.2-4.9,4.9-4.9S39.9,45.4,39.9,48.1z M23.4,33l9.9-4.9V40c-3.8,0.8-6.6,4.1-6.6,8.1c0,3.7,4.8,9.3,6.6,11.2v6.9l-9.9,4.3   V33z"/>
                        <path d="M32.9,48.2c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2C33.8,46.2,32.9,47.1,32.9,48.2z"/>
                        <path d="M54.1,14.1c-6.3,0-11.4,5.1-11.4,11.4c0,5.9,9.4,15.8,10.4,16.9l0.9,0.9l0.9-0.9c1.1-1.1,10.4-11,10.4-16.9   C65.4,19.2,60.3,14.1,54.1,14.1z M54.1,21.7c1.9,0,3.5,1.5,3.5,3.5c0,1.9-1.5,3.5-3.5,3.5s-3.5-1.5-3.5-3.5   C50.6,23.3,52.2,21.7,54.1,21.7z"/>
                    </svg>
                    <div class="flex-col pl-3">
                        <p>Dublin, Irland</p>
                        <p>Torino, Italy</p>
                    </div>                    
                </div>
                <div class="flex mt-4 items-center">
                    <svg 
                        width="32" 
                        height="32" 
                        viewBox="0 0 48 48" 
                        class="fill-current m-[10px] ">
                        <path d="M45,7H3a3,3,0,0,0-3,3V38a3,3,0,0,0,3,3H45a3,3,0,0,0,3-3V10A3,3,0,0,0,45,7Zm-.64,2L24,24.74,3.64,9ZM2,37.59V10.26L17.41,22.17ZM3.41,39,19,23.41l4.38,3.39a1,1,0,0,0,1.22,0L29,23.41,44.59,39ZM46,37.59,30.59,22.17,46,10.26Z"/>
                    </svg>
                    <div class="flex-col pl-3">
                        <p>{{ env('MAIL_FROM_ADDRESS') }}</p>
                    </div>                    
                </div>
            </div>
            <div class="w-full lg:w-3/5 px-4 my-12">
                <livewire:contact-form />
            </div>
        </div>
    </div>
</section>
<!-- ====== Contact Section End -->
