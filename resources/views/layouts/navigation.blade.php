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
                <form class="flex items-center p-4">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" required id="q" name="q">
                    </div>

                </form>
                <div class="p-4 capitalize font-semibold lg:text-sm">Bienvenido {{ Auth::user()->name }}</div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">

                        <button class="flex items-center text-md font-medium text-gray-500 hover:border-gray-300 focus:outline-none  focus:border-gray-300 transition duration-150 ease-in-out">

                            <img class="h-8 w-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')">
                            {{__('Perfil')}}
                        </x-dropdown-link>
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