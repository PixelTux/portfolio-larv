<div x-data class="bg-port-secondary dark:bg-port-secondary-dark text-port-text relative rounded-lg p-8 shadow-lg">
    <form wire:submit.prevent="submitForm" action="/contact" method="POST">
        @csrf
        
        @if ($successMessage)
            <div class="border-stroke flex items-center rounded-md border border-l-4 md:border-l-8 border-l-port-primary bg-white p-3 pl-4 md:pl-8 mb-6 bg-opacity-90">
                <div class="mr-3 md:mr-5 flex h-[22px] md:h-[36px] w-[22px] md:w-full md:max-w-[36px] items-center justify-center rounded-full bg-port-primary">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4038 4.22274C17.883 4.70202 17.883 5.47909 17.4038 5.95837L8.40377 14.9584C7.92449 15.4376 7.14742 15.4376 6.66814 14.9584L2.57723 10.8675C2.09795 10.3882 2.09795 9.61111 2.57723 9.13183C3.05651 8.65255 3.83358 8.65255 4.31286 9.13183L7.53595 12.3549L15.6681 4.22274C16.1474 3.74346 16.9245 3.74346 17.4038 4.22274Z" fill="white"></path>
                </svg>
                </div>
                <div class="flex w-full items-center justify-between">
                <div>
                    <h3 class="mb-1 text-lg font-medium text-black">
                        Message Sent Successfully
                    </h3>
                    <p class="text-body-color text-sm">
                        {{ $successMessage }}
                    </p>
                </div>
                <div>
                    <button type="button" wire:click="$set('successMessage', null)" class="hover:text-danger hover:bg-red-100 hover:rounded-full text-[#ACACB0]">
                        <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8839 5.11612C19.372 5.60427 19.372 6.39573 18.8839 6.88388L6.88388 18.8839C6.39573 19.372 5.60427 19.372 5.11612 18.8839C4.62796 18.3957 4.62796 17.6043 5.11612 17.1161L17.1161 5.11612C17.6043 4.62796 18.3957 4.62796 18.8839 5.11612Z"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.11612 5.11612C5.60427 4.62796 6.39573 4.62796 6.88388 5.11612L18.8839 17.1161C19.372 17.6043 19.372 18.3957 18.8839 18.8839C18.3957 19.372 17.6043 19.372 17.1161 18.8839L5.11612 6.88388C4.62796 6.39573 4.62796 5.60427 5.11612 5.11612Z"></path>
                        </svg>
                    </button>
                </div>
                </div>
            </div>
        @endif

        <div class="mb-6">
            <label for="name" class="sr-only">Name</label>
            <div class="relative rounded">
                <input wire:model.debounce.500ms="name" id="name" name="name" value="{{ old('name') }}"
                    class="rounded border border-body-color focus:border-port-primary focus:border-b-2 @error('name')border border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-body-color transition ease-in-out duration-150 outline-none shadow focus:shadow-port-primary/20 focus:dark:shadow-port-primary/90"
                    placeholder="Name">
            </div>
            @error('name')
            <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="email" class="sr-only">Email</label>
            <div class="relative">
                <input wire:model.debounce.500ms="email" id="email" type="text" name="email" value="{{ old('email') }}"
                    class="rounded border border-body-color focus:border-port-primary focus:border-b-2 @error('name')border border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-body-color transition ease-in-out duration-150 outline-none shadow focus:shadow-port-primary/20 focus:dark:shadow-port-primary/90"
                    placeholder="Email">
            </div>
            @error('email')
            <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="phone" class="sr-only">Phone</label>
            <div class="relative rounded-md shadow-sm">
                <input wire:model.debounce.500ms="phone" id="phone" name="phone" value="{{ old('phone') }}"
                    class="rounded border border-body-color focus:border-port-primary focus:border-b-2 @error('name')border border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-body-color transition ease-in-out duration-150 outline-none shadow focus:shadow-port-primary/20 focus:dark:shadow-port-primary/90"
                    placeholder="Phone">
            </div>
            @error('phone')
            <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror

        </div>
        <div class="mb-6">
            <label for="message" class="sr-only">Message</label>
            <div class="relative rounded-md shadow-sm">
                <textarea wire:model="message" id="message" rows="4" name="message"
                    class="rounded border border-body-color focus:border-port-primary focus:border-b-2 @error('name')border border-red-500 @enderror form-input block w-full py-3 px-4 placeholder-body-color transition ease-in-out duration-150 outline-none shadow focus:shadow-port-primary/20 focus:dark:shadow-port-primary/90"
                    placeholder="Message">{{ old('message') }}</textarea>
            </div>
            @error('message')
            <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <span class="inline-flex rounded-md shadow-sm w-full">
                <button type="submit"
                    class="bg-port-primary border-none w-full rounded border p-3 text-white font-thin transition hover:bg-opacity-70 hover:font-medium"
                    >
                    <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span>Submit</span>
                </button>
            </span>
        </div>
    </form>
</div>