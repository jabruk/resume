<header
    x-data="{navbarOpen: false}"
    class="fixed left-0 top-0 z-50 bg-white w-full flex item-center shadow-md dark:md dark:bg-slate-900 h-24"
>
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <img src="{{ url('/img/logo.png') }}" alt="logo" class="w-[48px] lg:w-[64px] inline-block dark:hidden">
                    <img src="{{ url('/img/logo-white.png') }}" alt="logo" class="w-[48px] lg:w-[64px] hidden dark:inline-block">

                    <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white">The</span>
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <x-layout.navbar.hamvurger @click="navbarOpen = !navbarOpen"
                                                x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar.hamvurger>
                </div>
            </div>
        </div>
    </div>

</header>