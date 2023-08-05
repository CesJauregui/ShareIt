@extends('auth.app')
@section('content')
<section class="gradient-form h-full text-neutral-800 dark:bg-neutral-700">
    <div class="container h-full p-10 my-30">
        <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
                    <div class="g-0 lg:flex lg:flex-wrap">
                        <div class="px-4 md:px-0 lg:w-full items-center">
                            <div class="md:mx-6 md:px-52">
                                <div class="text-justify">
                                    <img class="mx-auto w-48" src="{{ asset('img/logo.png') }}" alt="logo" />
                                    <h2 class="mt-2 mb-2 pb-1 text-sm font-semibold">
                                    ¿Olvidaste tu contraseña? No hay problema. Simplemente díganos su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.
                                    </h2>
                                </div>
                                <form action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <p class="mb-4">Correo eléctronico</p>
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>
                                    <div class="mb-12 pt-1 pb-1 text-center md:px-18">
                                        <button class="mb-3 inline-block w-full bg-indigo-600 rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="submit" data-te-ripple-init data-te-ripple-color="light">
                                            Enviar enlace
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
