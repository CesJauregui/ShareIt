<nav x-data="{ open: false }" class="fixed top-0 z-50 w-full shadow bg-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('app') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-white-600" />
                </a>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:ml-10 items-center sm:flex">
                <x-nav-link :href="route('app')" :active="request()->routeIs('app')" title="Inicio">
                    <i class="fa-solid fa-house fa-lg"></i>
                </x-nav-link>
                <x-nav-link :href="url('chat')" :active="request()->routeIs('chat')" title="Chat">
                    <i class="fa-sharp fa-solid fa-comments fa-lg"></i>
                </x-nav-link>
                <x-nav-link :href="route('debates')" :active="request()->routeIs('debates')" title="Debates">
                    <i class="fa-solid fa-share-from-square fa-lg"></i>
                </x-nav-link>
                <x-nav-link :href="route('publicaciones')" :active="request()->routeIs('publicaciones')" title="Publicaciones">
                    <i class="fa-solid fa-paper-plane fa-lg"></i>
                </x-nav-link>
            </div>
            <!-- Settings Dropdown -->
            <div class="hidden lg:flex lg:items-center lg:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-md font-medium text-gray-500 hover:border-gray-300 focus:outline-none  focus:border-gray-300 transition duration-150 ease-in-out">
                            <div class="p-4">{{ Auth::user()->name }}</div>
                            <img class="h-8 w-8 rounded-full" src="https://cdn1.iconfinder.com/data/icons/website-internet/48/website_-_male_user-512.png" alt="">
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out " onclick="sidebarHandler(true)" id="openSideBar" aria-expanded="false">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <button @click="open = ! open" :class="{'block': open, 'hidden': ! open}" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out " onclick="sidebarHandler(false)" id="closeSideBar">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
</nav>