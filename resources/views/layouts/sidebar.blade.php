<!-- <div class="relative shadow rounded p-3"> -->
  <img alt="..." src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" class="shadow-xl rounded-none  border-4 border-solid h-auto align-middle border-green-100 max-w-180-px mx-auto">
  <div class="mt-2">
    <h5 class="capitalize text-center sm:text-start font-semibold leading-normal text-md text-blueGray-700 mb-2">
      {{ Auth::user()->name }}
    </h5>
    <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
      <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
      <span class="text-sm">Lima, Perú</span>
    </div>
    <div class="mb-2 text-blueGray-600">
      <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i><span class="text-sm">Solution Manager - System Engineer</span>
    </div>
    <div class="mb-2 text-blueGray-600">
      <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i><span class="text-sm">Universidad de Ciencias y Humanidades</span>
    </div>
    <div class="flex flex-col items-center">
      <button class=" w-3/4 bg-gray-300 rounded-full text-sm hover:text-gray-200 hover:bg-gray-600 transition-colors duration-500 text-blueGray-400 p-1">Mas información</button>
    </div>
  </div>
</div>
<div class="relative shadow rounded p-3 mt-3 hidden lg:block">
  <div class="border-b-2 border-blueGray-200">
    <i class="fa-solid fa-images"></i> <span class="text-md font-bold pb-3">Imágenes</span>
  </div>
  <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pt-2">
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
    </div>
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="">
    </div>
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
    </div>
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
    </div>
    <div>
      <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
    </div>
    <a href="">
      <div class="bg-gray-200 hover:bg-gray-400 hover:text-white transition-colors duration-500 rounded-lg m-3 p-1 text-sm">
        <div class="text-center">
          <i class="fab fa-envira"></i>
        </div>
      </div>
    </a>
  </div>
</div>

<!--Sidebar Mobile-->
<div class="fixed left-0 top-0 bottom-0 w-64 overflow-y-auto z-40 bg-gray-800 shadow md:h-full pt-16 flex-col justify-between lg:hidden transition duration-150 ease-in-out" id="mobile-nav" aria-modal="true">
  <div class="inline-flex">
    <img alt="..." src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" class="shadow-xl rounded-full lg:border-4 border-2 border-solid h-auto border-green-100 max-w-180-px w-8 mt-3 ml-4">
    <h5 class="capitalize text-center font-semibold leading-normal text-md text-white mb-2">
      {{ Auth::user()->name }}
    </h5>
  </div>
  <form class="flex items-center pl-3 pr-3 mt-4">
    <div class="relative w-full">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
        </svg>
      </div>
      <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar" required>
    </div>
    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-gray-600 rounded-lg border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
      </svg>
      <span class="sr-only">Search</span>
    </button>
  </form>
  <div class="px-8">
    <ul class="mt-12">
      <li class="flex w-full justify-between text-gray-300 cursor-pointer items-center mb-6">
        <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
          <i class="fa-solid fa-share-from-square fa-md"></i>
          <span class="text-md ml-2">Mis debates</span>
        </a>
      </li>
      <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
        <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
          <i class="fa-solid fa-paper-plane fa-md"></i>
          <span class="text-md ml-2">Mis Publicaciones</span>
        </a>
      </li>
      <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
        <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
          <i class="fa-solid fa-user-group"></i>
          <span class="text-md ml-2">Amigos</span>
        </a>
      </li>
    </ul>
  </div>
</div>