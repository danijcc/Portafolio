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

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full form-control bg-light shadow-sm" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full form-control bg-light shadow-sm" type="email" name="email" :value="old('email')" required />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full form-control bg-light shadow-sm"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full form-control bg-light shadow-sm"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Ya estas registrado?') }}
                            </a>

                            <div onclick="show_loading();">
                                <x-button class=" btn-primary btn-lg btn-block">
                                    {{ __('Registrar') }}
                                </x-button>
                            </div>

                             <!-- Animacion Loading -->
                            <div id="loading" >
                                <div class="loadingio-spinner-double-ring-wq5jhm2umx rounded mx-auto d-block">
                                    <div class="ldio-p62t5zkgxxi">
                                <div></div><div><div></div></div></div>
                                <div><div></div></div><div></div></div>
                            </div>  
                        </div>

                       
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </div>
    </div>
</div>    