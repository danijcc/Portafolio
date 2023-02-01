<script type="text/javascript" src="{{ asset('js/show.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/loading.css') }}" >
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10  col-lg-6 mx-auto">
            <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                        <img src="/img/logo.png" class="rounded mx-auto d-block mb-4 mt-5" alt="logo" width="150" height="100">
                    </x-slot>

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full form-control bg-light shadow-sm"  type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <div onclick="show_loading();">
                            <div class="flex items-center justify-end mt-4">
                                <x-button class=" btn-primary btn-lg btn-block">
                                    {{ __('Enviar enlace de restablecimiento de contraseña') }}
                                </x-button>
                            </div>
                        </div>

                        <!-- Animacion Loading -->
                        <div id="loading" >
                            <div class="loadingio-spinner-double-ring-wq5jhm2umx rounded mx-auto d-block">
                                <div class="ldio-p62t5zkgxxi">
                            <div></div><div><div></div></div></div>
                            <div><div></div></div><div></div></div>
                        </div>  
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </div>
    </div>
</div>