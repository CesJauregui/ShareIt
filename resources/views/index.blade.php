@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div x-data="{ modelOpen: false }" class="p-4 flex shadow rounded lg:w-10/12 justify-center w-full">
  <img class="mt-1 mx-1 h-9 w-9 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
  <input @click="modelOpen =!modelOpen" class="mt-1 px-2 py-2 bg-gray-200 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full  sm:text-sm focus:ring-1 italic rounded-full" placeholder="Nueva Publicación o Debate ..." id="btnModal">
  @include('layouts.modal-new-post')
</div>
<div class="p-4 my-4 shadow rounded mx-auto w-full">
  <div class="flex items-center">
    <img class="mt-1 mr-2 ml-1 h-12 w-12 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="">
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
  <div class="my-2 border-t border-blueGray-200">
    <button class="focus:outline-none focus:ring focus:ring-transparent" id="like-btn" onclick="effectLike()">
      <span class="px-1 text-md"><i class="fa-solid fa-handshake-simple hover:text-green-500 fa-lg ml-2 mt-4 cursor-pointer" id="like" onclick="effectLike()"></i>14</span></button>
    <i class="fa-regular fa-comment-dots fa-lg ml-2 mt-4"></i><span class="px-1 text-md">12</span>
  </div>
  <div class="mt-2">
    <form>
      <div class="w-full mb-2 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <div class="flex items-center justify-between px-3 py-0 dark:border-gray-600">
          <input placeholder="Escriba un comentario..." type="text" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" required>
          <button type="input" class="inline-flex justify-center items-center p-2 bg-white text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
            <i class="fa-solid fa-paper-plane w-4 h-4" aria-hidden="true"></i>
            <span class="sr-only">Attach file</span>
          </button>
          <div class="flex pl-0 space-x-1 sm:pl-2">
            <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
              </svg>
              <span class="sr-only">Attach file</span>
            </button>
            <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
              </svg>
              <span class="sr-only">Upload image</span>
            </button>
          </div>
        </div>
      </div>
    </form>
    <div class="inline-flex w-full">
      <img class="mx-2 h-7 w-7 rounded-full my-3" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
      <div class="px-1">
        <span class="text-sm text-gray-400 font-semibold capitalize text-justify">Juan Gutierrez</span>
        <!--TODO: TERMINAR LA SECCION DE COMENTARIOS Y AGREGAR EL BOTON DE VER MAS/VER MENOS https://codepen.io/Idered/pen/ExYROd -->
        <div x-data="{ show: false }">
          <?php
          $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates illum facere accusamus perspiciatis dolor velit nisi labore sunt dicta tempora! Ip  sam nobis sed quod dolorum dignissimos assumenda nulla quidem nihil. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel at, ducimus a, id ab velit quod minima obcaecati consequatur assumenda corporis explicabo perspiciatis accusamus facere ipsa molestias error, magnam asperiores!"
          ?>
          <p class="text-sm text-justify"> <?php echo substr($texto, 0, 150) ?> <span x-show="show"> <?php echo substr($texto, 151) ?></span>
            <button x-on:click="show = ! show" :class="{'hidden': show}" class="text-blue-500 focus:outline-none">Ver más</button>
            <button x-on:click="show = ! show" :class="{'hidden': ! show}" class=" text-blue-500 focus:outline-none">Ver menos</button>
          </p>
        </div>
      </div>
    </div>
    <div class="inline-flex w-full">
      <img class="mx-2 h-7 w-7 rounded-full my-3" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
      <div class="px-1">
        <span class="text-sm text-gray-400 font-semibold capitalize text-justify">Juan Gutierrez</span>
        <div x-data="{ show: false }">
          <p class="text-sm text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure esse voluptates minima quae ex consectetur ipsam consequatur porro. Consequuntur eum quod a corrupti repellendus fugit, nobis itaque? Sequi, numquam repudiandae. <span x-show="show">Libero fuga facilis vel consectetur quos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatem!</span>
            <button x-on:click="show = ! show" :class="{'hidden': show}" class="text-blue-500 focus:outline-none">Ver más</button>
            <button x-on:click="show = ! show" :class="{'hidden': ! show}" class=" text-blue-500 focus:outline-none">Ver menos</button>
          </p>
        </div>
      </div>
    </div>
    <div class="inline-flex w-full">
      <img class="mx-2 h-7 w-7 rounded-full my-3" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
      <div class="px-1">
        <span class="text-sm text-gray-400 font-semibold capitalize text-justify">Juan Gutierrez</span>
        <div x-data="{ show: false }">
          <p class="text-sm text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi vitae esse asperiores excepturi fuga officiis. Quod sed sunt aliquam, perspiciatis quas nesciunt? Eveniet consequatur et, unde magnam accusantium facilis dolores. <span x-show="show">Libero fuga facilis vel consectetur quos sapiente deleniti eveniet dolores tempore eos deserunt officia quis ab? Excepturi vero tempore minus beatae voluptatem!</span>
            <button x-on:click="show = ! show" :class="{'hidden': show}" class="text-blue-500 focus:outline-none">Ver más</button>
            <button x-on:click="show = ! show" :class="{'hidden': ! show}" class=" text-blue-500 focus:outline-none">Ver menos</button>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection