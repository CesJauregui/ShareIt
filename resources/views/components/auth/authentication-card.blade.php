<section class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
  <div class="min-h-screen lg:px-10 p-7">
    <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200 lg:mx-12">
      <div class="w-full">
        <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
          <div class="g-0 lg:flex lg:flex-wrap">
            <!-- Left column container-->
            <div class="container__auth__left">
              <div class="md:mx-6 md:p-12">
                <!--Logo-->
                <div class="text-center">
                  <img class="mx-auto w-52" src="{{ asset('img/logo.png') }}" alt="logo" />
                  <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                    ¡Conéctate, comparte y obtén conocimientos!
                  </h4>
                </div>
                <x-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                  {{ session('status') }}
                </div>
                @endif

                @if($attributes['type']=='login')
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <x-input id="email" type="email" name="email" :value="old('email')" autocomplete="username">
                    <x-slot:inputName>Correo</x-slot>
                  </x-input>
                  <x-input id="password" type="password" name="password" autocomplete="current-password">
                    <x-slot:inputName>Contraseña</x-slot>
                  </x-input>
                  @endif
                  @if($attributes['type']=='register')
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <x-input id="email" type="email" name="email" :value="old('email')" autocomplete="username">
                      <x-slot:inputName>Correo</x-slot>
                    </x-input>
                    <x-input id="password" type="password" name="password" autocomplete="current-password">
                      <x-slot:inputName>Contraseña</x-slot>
                    </x-input>
                    <x-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                      <x-slot:inputName>Confirmar contraseña</x-slot>
                    </x-input>
                    <div class="grid md:grid-cols-2 md:gap-6">
                      <x-input id="name" type="text" name="name" required autofocus autocomplete="name">
                        <x-slot:inputName>Nombre</x-slot>
                      </x-input>
                      <x-input id="lastname" type="text" name="lastname" required autofocus autocomplete="lastname">
                        <x-slot:inputName>Apellidos</x-slot>
                      </x-input>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                      <x-input id="phone" type="tel" name="phone" pattern="[0-9]{9}">
                        <x-slot:inputName>Celular (opcional)</x-slot>
                      </x-input>
                      <x-select>
                        <x-slot:option>
                          <option value="estudiante" class="text-gray-900">Estudiante</option>
                        </x-slot>
                        <x-slot:option>
                          <option value="egresado" class="text-gray-900">Egresado</option>
                        </x-slot>
                      </x-select>
                    </div>

                    @endif

                    @if($attributes['type']=='login')
                    <div class="mb-12 pb-1 pt-1 text-center">
                      <button class="button__auth" type="submit" data-te-ripple-init data-te-ripple-color="light">
                        Ingresar
                      </button>
                      <!--Forgot password link-->
                      <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    </div>
                    @else
                    <div class="mb-12 pb-1 pt-1 text-center">
                      <button class="button__auth" type="submit" data-te-ripple-init data-te-ripple-color="light">
                        Registrarse
                      </button>
                      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                      <div class="mt-4">
                        <x-label for="terms">
                          <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
                            <div class="ml-2 text-gray-500">
                              {!! __('Estoy de acuerdo con los :terms_of_service y :privacy_policy', [
                              'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terminos del servicio').'</a>',
                              'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Política de privacidad').'</a>',
                              ]) !!}
                            </div>
                          </div>
                        </x-label>
                      </div>
                      @endif
                    </div>
                    @endif

                    <!--Register/Login button-->
                    @if($attributes['type']=='register')
                    <div class="flex items-center justify-between pb-6">
                      <p class="mb-0 mr-2">¿Ya tienes una cuenta?</p>
                      <a href="{{ route('login') }}">
                        <x-button>
                            <x-slot:buttonName>Login</x-slot>
                        </x-button>
                      </a>
                    </div>
                    @else
                    <div class="flex items-center justify-between pb-6">
                      <p class="mb-0 mr-2">¿No tienes una cuenta?</p>
                      <a href="{{ route('register') }}">
                        <x-button>
                            <x-slot:buttonName>Regirtrarse</x-slot>
                        </x-button>
                      </a>
                    </div>
                    @endif
                  </form>
              </div>
            </div>
            <!-- Right column container with background and description-->
            <div class="container__auth__right">
              <div class="px-4 py-6 text-black md:mx-6 md:p-5">
                <h4 class="mb-6 text-xl font-semibold">
                  Únete a nuestra comunidad y adquiere o refuerzas tus conocimientos &#128512;
                </h4>
                <img src="{{ asset('img/official-login.jpg') }}">
                <p class="text-sm text-justify">
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