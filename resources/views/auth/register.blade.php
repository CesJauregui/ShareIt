@extends('auth.app')

@section('content')
<section class="gradient-form h-full bg-current dark:bg-neutral-700">
    <div class="container h-full p-10">
        <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                    <div class="g-0 lg:flex lg:flex-wrap">
                        <div class="px-4 md:px-0 lg:w-6/12">
                            <div class="md:mx-6 md:p-12">
                                <div class="text-center">
                                    <img class="mx-auto w-48" src="{{ asset('img/logo.png') }}" alt="logo" />
                                    <h4 class="mt-1 mb-12 pb-1 text-xl font-semibold">
                                        ¡Conéctate, comparte y obtén conocimientos!
                                    </h4>
                                </div>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <p class="mb-4">Registrarse</p>
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Nombre" required autofocus />
                                    </div>
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                                    </div>
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Contraseña" required autocomplete="new-password" />
                                    </div>
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required />
                                    </div>
                                    <div class="mb-12 pt-1 pb-1 text-center">
                                    <button class="mb-3 inline-block w-full rounded bg-indigo-600 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="submit" data-te-ripple-init data-te-ripple-color="light">
                                            Registrarse
                                        </button>
                                    </div>
                                    <!--TODO: Implementar el Socialite (revisar documentacion de laravel)-->
                                    <div class="flex items-center justify-between pb-6">
                                        <p class="mb-0 mr-2">¿Ya estás registrado?</p>
                                        <a href="{{route('login')}}"><button type="button" class="inline-block rounded border-2 border-blue-600 px-6 pt-1 pb-[6px] text-xs font-medium uppercase leading-normal indigo-600 transition duration-150 ease-in-out hover:border-indigo-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-indigo-600 focus:text-indigo-600 focus:outline-none focus:ring-0 active:indigo-600 active:text-indigo-600 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10" data-te-ripple-init data-te-ripple-color="light">
                                                Login
                                            </button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)"> -->
                        <div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none">
                            <!--TODO: PONER UN VIDEO DE ACUERDO AL TAMAÑO DEL DIV-->
                            <video src="{{ asset('img/fondo.mp4') }}" autoplay="true" muted="true" loop="true" class="w-full"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
