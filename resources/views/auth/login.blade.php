
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

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}" 
                                        class="shadow p-3">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full form-control bg-light shadow-sm " type="email" name="email" :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full form-control bg-light shadow-sm "
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center ">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <div onclick="show_loading();">
                                <x-button class=" btn-primary btn-lg btn-block">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>

                            <div id="loading" >
                                <div class="loadingio-spinner-double-ring-wq5jhm2umx rounded mx-auto d-block">
                                    <div class="ldio-p62t5zkgxxi">
                                <div></div><div><div></div></div></div>
                                <div><div></div></div><div></div></div>
                            </div>  
                                
                                
                           

                             </body>
                        </div>
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </div>
    </div>
</div>
