@extends('layouts.app')

<!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"> -->

@section('content')
<div class="flex space-x-2 py-4 lg:pt-4 pt-8 justify-center">
    <div class="flex items-center space-x-4 overflow-y-auto md:max-w-lg xl:max-w-5xl 2xl:max-w-7xl lg:max-w-3xl whitespace-nowrap">
      <a href="/components" class="px-3 py-1.5 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg capitalize">All</a>
      <a href="/components" class="px-3 py-1.5 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg capitalize">Fotos</a>
      <a href="/components" class="px-3 py-1.5 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg capitalize">Amigos</a>
      <a href="/components" class="px-3 py-1.5 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg capitalize">Más</a>
    </div>
  </div>
  <div x-data="{ modelOpen: false }" class="p-4 flex shadow rounded">
    <img class="mt-1 mx-1 h-9 w-9 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
    <input @click="modelOpen =!modelOpen" class="mt-1 px-2 py-2 bg-gray-200 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full sm:text-sm focus:ring-1 italic rounded-full" placeholder="Nueva Publicación o Debate ..." id="btnModal">
    @include('layouts.modal-new-post')
  </div>
  <div class="p-4 my-4 shadow rounded">
    <div class="flex">
      <img class="mt-1 mr-2 ml-1 h-12 w-12 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
      <div class="relative p-1">
        <div class="text-lg capitalize">{{ Auth::user()->name }}</div>
        <div class="text-sm text-blueGray-400">23 abr 2023</div>
      </div>
    </div>
    <div class="my-2">
      Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
      <img class="h-auto max-w-full mx-auto my-2" src="https://infase.net/wp-content/uploads/2017/09/base-de-datos-img.jpg" alt="image description">
      <!--Acá aplica lógica si es una solo imagen, va en centro, si son dos o mas aplicar estilos para que se va varias imagenes-->
    </div>
    <div class="my-2 border-t border-blueGray-200">
      <button class="focus:outline-none focus:ring focus:ring-transparent" id="like-btn" onclick="effectLike()">
        <span class="px-1 text-md"><i class="fa-solid fa-handshake-simple hover:text-green-500 fa-lg ml-2 mt-4 cursor-pointer" id="like" onclick="effectLike()"></i>14</span></button>
      <i class="fa-regular fa-comment-dots fa-lg ml-2 mt-4"></i><span class="px-1 text-md">12</span>
    </div>
  </div>
@endsection
