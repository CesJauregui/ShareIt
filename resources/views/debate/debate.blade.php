@extends('layouts.app')
@section('title','Debates')
@section('content')

<div x-data="{ modelOpen: false }" class="p-4 flex shadow rounded lg:w-10/12 justify-center w-full">
  <img class="mt-1 mx-1 h-9 w-9 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
  <input @click="modelOpen =!modelOpen" class="mt-1 px-2 py-2 bg-gray-200 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full  sm:text-sm focus:ring-1 italic rounded-full" placeholder="Nueva Publicación o Debate ..." id="btnModal">
  @include('layouts.modal-new-post')
</div>

@endsection