@include('Chatify::layouts.headLinks')

<body class="font-sans antialiased bg-gray-100">
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden')" :class="{ 'dark': isDark}" @resize.window="watchScreen()">
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
            <!-- Loading screen -->
            <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-indigo-800">
                Loading.....
            </div>
            <button type="submit" class="p-2 w-10 h-10 rounded-full text-sm font-medium btn-flotante text-white bg-gray-600 border-gray-700 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" id="btnVoice" onclick="VoiceAssistance()">
                <i class="fa-solid fa-microphone"></i>
            </button>
            <!-- Sidebar first column -->
            <!-- Backdrop -->
            <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-indigo-800 md:hidden" style="opacity: 0.5" aria-hidden="true"></div>
            @include('layouts.sidebar-left')
            <div class="flex flex-1 h-screen">
                <!-- Main content -->
                <main class="flex-1">
                    @livewire('navigation-menu')
                    <section class="flex flex-wrap bg-gray-100 md:ml-[75px] h-full dark:bg-dark">
                        <div class="w-full flex">
                            <div class="messenger">
                                {{-- ----------------------Users/Groups lists side---------------------- --}}
                                <div class="messenger-listView {{ !!$id ? 'conversation-active' : '' }} dark:bg-dark  lg:ml-0 sm:ml-20 ">
                                    {{-- Header and search bar --}}
                                    <div class="m-header">
                                        <nav>
                                            <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">Mensajes</span> </a>
                                            {{-- header buttons --}}
                                            <nav class="m-header-right">
                                                <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                                                <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                                            </nav>
                                        </nav>
                                        {{-- Search input --}}
                                        <input type="text" class="messenger-search" placeholder="Search" />
                                        {{-- Tabs --}}
                                        {{-- <div class="messenger-listView-tabs">
                                            <a href="#" class="active-tab" data-view="users">
                                                <span class="far fa-user"></span> Contactos</a>
                                        </div> --}}
                                    </div>
                                    {{-- tabs and lists --}}
                                    <div class="m-body contacts-container">
                                        {{-- Lists [Users/Group] --}}
                                        {{-- ---------------- [ User Tab ] ---------------- --}}
                                        <div class="show messenger-tab users-tab app-scroll" data-view="users">
                                            {{-- Favorites --}}
                                            <div class="favorites-section">
                                                <p class="messenger-title"><span>Favoritos</span></p>
                                                <div class="messenger-favorites app-scroll-hidden"></div>
                                            </div>
                                            {{-- Saved Messages --}}
                                            <p class="messenger-title"><span>Tu espacio</span></p>
                                            {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!}
                                            {{-- Contact --}}
                                            <p class="messenger-title"><span>Todos los mensajes</span></p>
                                            <div class="listOfContacts" style="width: 100%;height: calc(100% - 272px);position: relative;"></div>
                                        </div>
                                        {{-- ---------------- [ Search Tab ] ---------------- --}}
                                        <div class="messenger-tab search-tab app-scroll" data-view="search">
                                            {{-- items --}}
                                            <p class="messenger-title"><span>Buscar</span></p>
                                            <div class="search-records">
                                                <p class="message-hint center-el"><span>Escribe para buscar..</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ----------------------Messaging side---------------------- --}}
                            <div class="messenger-messagingView dark:bg-darker">
                                {{-- header title [conversation name] amd buttons --}}
                                <div class="m-header m-header-messaging dark:bg-dark dark:text-light">
                                    <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                                        {{-- header back button, avatar and user name --}}
                                        <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                                            <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                                            <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                            </div>
                                            <a href="#" class="user-name">{{ config('app.name') }}</a>
                                        </div>
                                        {{-- header buttons --}}
                                        <nav class="m-header-right">
                                            <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                                            <a href="/"><i class="fas fa-home"></i></a>
                                            <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                                        </nav>
                                    </nav>
                                    {{-- Internet connection --}}
                                    <div class="internet-connection">
                                        <span class="ic-connected">Connectado</span>
                                        <span class="ic-connecting">Connectando...</span>
                                        <span class="ic-noInternet">Sin acceso a internet</span>
                                    </div>
                                </div>

                                {{-- Messaging area --}}
                                <div class="m-body messages-container app-scroll">
                                    <div class="messages">
                                        <p class="message-hint center-el"><span>Por favor seleccione un chat para comenzar a enviar mensajes</span></p>
                                    </div>
                                    {{-- Typing indicator --}}
                                    <div class="typing-indicator">
                                        <div class="message-card typing">
                                            <div class="message">
                                                <span class="typing-dots">
                                                    <span class="dot dot-1"></span>
                                                    <span class="dot dot-2"></span>
                                                    <span class="dot dot-3"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- Send Message Form --}}
                                @include('Chatify::layouts.sendForm')
                            </div>
                            {{-- ---------------------- Info side ---------------------- --}}
                                <div class="messenger-infoView app-scroll dark:bg-dark">
                                    {{-- nav actions --}}
                                    <nav>
                                        <p>Detalles de Usuario</p>
                                        <a href="#"><i class="fas fa-times"></i></a>
                                    </nav>
                                    {!! view('Chatify::layouts.info')->render() !!}
                                </div>
                        </div>
                    </section>
                </main>
            </div>
            <!--Panels-->
            @include('layouts.panels')
        </div>
        <script src="{{ Vite::asset('resources/js/main.js') }}"></script>
        @stack('modals')
        @livewireScripts
        @include('Chatify::layouts.modals')
        @include('Chatify::layouts.footerLinks')
</body>