@extends('auth.app')
@section('content')
<section class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
    <div class="container h-full p-10">
        <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                    <div class="g-0 lg:flex lg:flex-wrap">
                        <div class="px-4 md:px-0 lg:w-6/12">
                            <div class="md:mx-6 md:p-12">
                                <div class="text-center">
                                    <img class="mx-auto w-48" src="{{ asset('img/logo.jpg') }}" alt="logo" />
                                    <h4 class="mt-1 mb-12 pb-1 text-xl font-semibold">
                                        We are The Lotus Team
                                    </h4>
                                </div>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <p class="mb-4">Por favor, ingrese a su cuenta</p>
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                                    </div>
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña"/>
                                    </div>
                                    <div class="mb-12 pt-1 pb-1 text-center">
                                        <button class="mb-3 inline-block w-full rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="submit" data-te-ripple-init data-te-ripple-color="light" style="
                        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                      ">
                                            Ingresar
                                        </button>
                                        <a href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
                                    </div>
                                    <div class="flex items-center justify-between pb-6">
                                        <p class="mb-0 mr-2">¿No tiene una cuenta?</p>
                                        <a href="{{route('register')}}"><button type="button" class="inline-block rounded border-2 border-danger px-6 pt-1 pb-[6px] text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10" data-te-ripple-init data-te-ripple-color="light">
                                            Registrarse
                                        </button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)">
                            <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                                <h4 class="mb-6 text-xl font-semibold">
                                    We are more than just a company
                                </h4>
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
