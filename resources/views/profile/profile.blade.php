@extends('layouts.app')
@section('title', 'Perfíl')
@section ('content')
<!-- <a href="{{route ('profile.show')}}"><button>Editar perfil</button></a> -->

<div class="w-full mx-auto h-full">
  <div class="md:flex px-2">
    <div class="md:shrink-0 md:fixed md:w-48 shadow-lg rounded">
      <div class="flex flex-col items-center py-6">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg " src="{{Auth::user()->profile_photo_url}}" alt="Bonnie image" />
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-light">{{ Auth::user()->name }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
          <a href="#" class="inline-flex items-center px-2 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar</a>
          <a href="#" class="inline-flex items-center px-2 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
        </div>
      </div>
      <div class="p-2 border-t-2 border-slate-800">
        <!--TODO: Hacer una lógica que permita ver las redes sociales si es que tiene.-->
        <h5 class="text-center">redes sociales</span>
          <div class="flex justify-evenly items-center p-2">
            <a href=""><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
              </svg></a>
            <a href=""><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
              </svg></a>
            <a href=""><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
              </svg></a>
          </div>
      </div>
    </div>
    <div class="p-8 md:ml-52 shadow-lg rounded">
      <div x-data="{ modelOpen: false }" class="p-4 flex shadow rounded lg:w-12/12 justify-center w-full">
        <img class="mt-1 mx-1 h-9 w-9 rounded-full" src="{{Auth::user()->profile_photo_url}}" alt="">
        <input @click="modelOpen =!modelOpen" class="mt-1 px-2 py-2 bg-gray-200 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full  sm:text-sm focus:ring-1 italic rounded-full" placeholder="Nueva Publicación o Debate ..." id="btnModal">
        @include('layouts.modal-new-post')
      </div>
      <div class="p-4 my-4 shadow rounded mx-auto w-full">
        <div class="flex items-center">
          <img class="mt-1 mr-2 ml-1 h-12 w-12 rounded-full" src="{{Auth::user()->profile_photo_url}}" alt="">
          <div class="p-1">
            <div class="text-sm capitalize">David</div>
            <div class="text-sm text-blueGray-400">23 abr 2023</div>
          </div>
        </div>
        <div class="my-2">
          <p class="text-sm">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
          </p>
          <img class="h-auto max-w-full mx-auto my-2" src="https://infase.net/wp-content/uploads/2017/09/base-de-datos-img.jpg" alt="image description">
          <!--Acá aplica lógica si es una solo imagen, va en centro, si son dos o mas aplicar estilos para que se va varias imagenes-->
        </div>
        <div class="my-2">
          <button class="focus:outline-none focus:ring focus:ring-transparent" id="like-btn" onclick="effectLike()">
            <span class="px-1 text-md"><i class="fa-solid fa-handshake-simple hover:text-green-500 fa-lg ml-2 mt-4 cursor-pointer" id="like" onclick="effectLike()"></i>14</span></button>
          <i class="fa-regular fa-comment-dots fa-lg ml-2 mt-4"></i><span class="px-1 text-md">12</span>
        </div>
        <div class="mt-2">
          <form>
            <label for="chat" class="sr-only">Your message</label>
            <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
              <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                  <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                </svg>
                <span class="sr-only">Upload image</span>
              </button>
              <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.408 7.5h.01m-6.876 0h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM4.6 11a5.5 5.5 0 0 0 10.81 0H4.6Z" />
                </svg>
                <span class="sr-only">Add emoji</span>
              </button>
              <textarea id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
              <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                <svg class="w-5 h-5 rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                </svg>
                <span class="sr-only">Send message</span>
              </button>
            </div>
          </form>
          @php
          $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates illum facere accusamus perspiciatis dolor velit nisi labore sunt! Lorem Lorem ips asdasd loreasdasd asd adwqd qd af agfas asd ards afasdawd qd " 
          @endphp

          <x-card-comment>
            <x-slot name="urlProfile">https://flowbite.com/docs/images/people/profile-picture-2.jpg</x-slot>
            <x-slot name="user">Juan Gutierrez A.</x-slot>
            <x-slot name="comment">
              @if(strlen($texto) > 150)
              <p class="text-sm text-justify"> {{ substr($texto, 0, 150) }} <span x-show="show"> {{ substr($texto, 151) }}</span>
                <button x-on:click="show = ! show" :class="{'hidden': show}" class="text-blue-500 focus:outline-none">Ver más</button>
                <button x-on:click="show = ! show" :class="{'hidden': ! show}" class=" text-blue-500 focus:outline-none">Ver menos</button>
              </p>
              @else
              <p class="text-sm text-justify"> {{ $texto }} </p>
              @endif
            </x-slot>
          </x-card-comment>

          <x-card-comment>
            <x-slot name="urlProfile">https://flowbite.com/docs/images/people/profile-picture-2.jpg</x-slot>
            <x-slot name="user">Juan Gutierrez A.</x-slot>
            <x-slot name="comment">
              @if(strlen($texto) > 150)
              <p class="text-sm text-justify"> {{ substr($texto, 0, 150) }} <span x-show="show"> {{ substr($texto, 151) }}</span>
                <button x-on:click="show = ! show" :class="{'hidden': show}" class="text-blue-500 focus:outline-none">Ver más</button>
                <button x-on:click="show = ! show" :class="{'hidden': ! show}" class=" text-blue-500 focus:outline-none">Ver menos</button>
              </p>
              @else
              <p class="text-sm text-justify"> {{ $texto }} </p>
              @endif
            </x-slot>
          </x-card-comment>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection