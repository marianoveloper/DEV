<header class="bg-gray-200">
    <div class="container flex items-center h-16">
        <a class="flex flex-col items-center justify-center h-full px-6 font-semibold text-white bg-white bg-opacity-25 cursor-pointer md:px-4">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </a>
        <a href="/" class="mx-6">
            <x-jet-application-mark class="block w-auto h-9" />
        </a>
        <div class="flex-1 hidden md:block">
            @livewire('search')
        </div>
    </div>
</header>
