<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>ShareIt - @yield('title')</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <!--Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Styles -->
  @livewireStyles
</head>

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
          <section class="flex flex-wrap mt-24 md:ml-16 bg-gray-100 dark:bg-dark dark:text-light justify-center">
            <div class="lg:w-9/12 px-4">
              @yield('content')
            </div>
            <div class="lg:w-3/12 hidden lg:block">
              @section('sidebar-right')
                @include('layouts.sidebar-right')
              @show
            </div>
          </section>
        </main>
      </div>
      <!--Panels-->
      @include('layouts.panels')
    </div>
  </div>
  <script src="{{ Vite::asset('resources/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
  <script src="{{ asset('js/chatify/code.js') }}"></script>
  @stack('modals')
  @livewireScripts
</body>

</html>