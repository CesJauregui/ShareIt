@extends('layouts.app')
@section('title', 'Home')
@section('content')
<x-new-post />
<!-- <a href="{{route ('profile.show')}}"><button>Editar perfil</button></a>  -->
@foreach($debates as $debate)
<div class="post">
  <div class="post__header">
    <img class="mr-2 ml-1 h-12 w-12 rounded-full" src="{{asset($debate->user->profile_photo_path)}}" alt="">
    <input type="hidden" name="" value="{{ $debate->file_path }}">
    <div class="p-1">
      <div class="text-sm capitalize">{{ $debate->user->name }}</div>
      <div class="text-xs text-blueGray-400">{{ date('d M Y - h:i a', strtotime($debate->created_at)) }}</div>
    </div>
  </div>
  <div class="post__content">
    <h3 class="font-bold">{{ $debate->title }}</h3>
    <p class="text-sm" x-data="{ show: false }">{{ substr($debate->description, 0, 150) }} <span x-show="show">{{ substr($debate->description, 151) }}</span>
      @if(strlen($debate->description) >= 300)
      <button x-on:click="show = ! show" :class="{'hidden': show}" class="text-blue-500 focus:outline-none">Ver más</button>
      <button x-on:click="show = ! show" :class="{'hidden': ! show}" class=" text-blue-500 focus:outline-none">Ver menos</button>
      @endif
    </p>
    <!-- <img src="{{asset('/fotos-de-usuarios/'.$debate->file_path)}}" alt=""> -->
  </div>
  <div class="post__reactions">
    <button class="focus:outline-none focus:ring focus:ring-transparent" id="like-btn" onclick="effectLike()">
      <span class="px-1 text-sm"><i class="fa-solid fa-handshake-simple hover:text-green-500 fa-lg ml-2 mt-4 cursor-pointer" id="like" onclick="effectLike()"></i>14</span></button>
    <span class="px-1 text-sm"><i class="fa-regular fa-comment-dots fa-md ml-2 mt-4"></i>12</span>
  </div>
  <div class="post__comment">
    <x-card-comment>
      <x-slot:urlProfile>{{ asset($debate->user->profile_photo_path) }}</x-slot>
        <x-slot:user>Juana Gutierrez</x-slot>
          <?php
          $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates illum facere accusamus perspiciatis dolor velit nisi labore sunt dicta tempora! Ip  sam nobis sed quod dolorum dignissimos assumenda nulla quidem nihil. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel at, ducimus a, id ab velit quod minima obcaecati consequatur assumenda corporis explicabo perspiciatis accusamus facere ipsa molestias error, magnam asperiores!sss"
          ?>
          <p class="text-sm p-1 dark:bg-dark rounded-md"> <?php echo substr($texto, 0, 150) ?> <span x-show="show"> <?php echo substr($texto, 151) ?></span>
            <button x-on:click="show = ! show" :class="{'hidden': show}" class="text-blue-500 focus:outline-none">Ver más</button>
            <button x-on:click="show = ! show" :class="{'hidden': ! show}" class=" text-blue-500 focus:outline-none">Ver menos</button>
          </p>
    </x-card-comment>
    <form class="post__comment-form">
      <img class="post__comment-photo" src="{{asset(Auth::user()->profile_photo_path)}}" alt="">
      <textarea rows="1" class="post__comment-input post__comment-input--focus" type="text" placeholder="Escriba un comentario..." required></textarea>
      <div class="flex pl-0 space-x-1 sm:pl-2">
        <button type="input" class="post__comment-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
          </svg>
          <span class="sr-only">Send</span>
        </button>
        <label for="upload" class="post__comment-icon">
          <input type="file" id="upload" class="hidden">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
          </svg>
          <span class="sr-only">Attach file</span>
        </label>
      </div>
    </form>
  </div>
</div>
@endforeach
@endsection