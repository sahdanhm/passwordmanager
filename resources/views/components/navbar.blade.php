<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div @click.away="open = false"
    class="sticky top-0 self-start flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0"
    x-data="{ open: false }">
    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
        <a href="#"
            class="text-lg font-semibold tracking-widest bg-violet-500 p-3 text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><span class="text-white">safe</span>tyfy</a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <nav :class="{ 'block': open, 'hidden': !open }" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
        <x-nav-link :active="request()->is('/')" href='/'>Home</x-nav-link>
        <x-nav-link :active="request()->is('mypassword/*') || request()->is('mypassword')" href='/mypassword'>My Password</x-nav-link>
        <x-nav-link :active="request()->is('setting')" href='/setting'>Setting</x-nav-link>
        <x-nav-link :active="request()->is('profile')" href='/profile'>Profile</x-nav-link>
    </nav>
</div>
