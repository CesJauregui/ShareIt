<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
@include('layouts.navigation')

<body>


  <div class="main-page">
    <section class="relative mt-64 py-20 bg-blueGray-200">
      <div class="mx-auto h-350-px ">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
          <button type="submit" class="p-2 w-10 h-10 rounded-full text-sm font-medium btn-flotante text-white bg-gray-600 border-gray-700 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" id="btnVoice" onclick="VoiceAssistance()">
            <i class="fa-solid fa-microphone"></i>
          </button>
          <div class="px-6">
            <div class="flex flex-wrap justify-center">
              @if($page_title == 'Perfil')
              <div class="w-full sm:w-full lg:w-3/12 px-4 lg:order-1 justify-center">
                <div class="relative shadow rounded p-3">
                  @include('layouts.sidebar')
                </div>
                @else
                <div class="w-full sm:w-full lg:w-3/12 px-4 lg:order-1 justify-center">
                  <div class="relative shadow rounded p-3 mt-3 hidden lg:block">
                    @include('layouts.sidebar')
                  </div>
                  @endif
                  <div class="w-full lg:w-3/12 px-4 lg:order-3 hidden lg:block lg:justify-center ">
                    @include('layouts.sidebar-right')
                  </div>
                  <div class="w-full lg:w-6/12 px-0 lg:order-2">
                    @yield('content')
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
  </div>
  @include('layouts.script')
</body>

</html>