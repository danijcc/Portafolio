
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10  col-lg-6 mx-auto">
            <x-guest-layout>
                <x-auth-card>
                    <x-slot name="logo">
                       <img src="/img/logo.png" class="rounded mx-auto d-block mb-4 mt-4" alt="logo" width="200" height="150">
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
                           
                           <x-button class=" btn-primary btn-lg btn-block">
                                {{ __('Log in') }}
                                </x-button>
            
                             {{-- loading doble rueda --}}
                             <div class="loadingio-spinner-double-ring-mltvxtjvqo rounded mx-auto d-block">
                                <div class="ldio-5yh9ye47g8a">
                              <div></div>
                              <div></div>
                              <div><div></div></div>
                              <div><div></div></div>
                              </div></div>
                              <style type="text/css">
                              @keyframes ldio-5yh9ye47g8a {
                                0% { transform: rotate(0) }
                                100% { transform: rotate(360deg) }
                              }
                              .ldio-5yh9ye47g8a div { box-sizing: border-box!important }
                              .ldio-5yh9ye47g8a > div {
                                position: absolute;
                                width: 144px;
                                height: 144px;
                                top: 28px;
                                left: 28px;
                                border-radius: 50%;
                                border: 16px solid #000;
                                border-color: #1d6072 transparent #1d6072 transparent;
                                animation: ldio-5yh9ye47g8a 1s linear infinite;
                              }
                              
                              .ldio-5yh9ye47g8a > div:nth-child(2), .ldio-5yh9ye47g8a > div:nth-child(4) {
                                width: 108px;
                                height: 108px;
                                top: 46px;
                                left: 46px;
                                animation: ldio-5yh9ye47g8a 1s linear infinite reverse;
                              }
                              .ldio-5yh9ye47g8a > div:nth-child(2) {
                                border-color: transparent #56bed2 transparent #56bed2
                              }
                              .ldio-5yh9ye47g8a > div:nth-child(3) { border-color: transparent }
                              .ldio-5yh9ye47g8a > div:nth-child(3) div {
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                transform: rotate(45deg);
                              }
                              .ldio-5yh9ye47g8a > div:nth-child(3) div:before, .ldio-5yh9ye47g8a > div:nth-child(3) div:after { 
                                content: "";
                                display: block;
                                position: absolute;
                                width: 16px;
                                height: 16px;
                                top: -16px;
                                left: 48px;
                                background: #1d6072;
                                border-radius: 50%;
                                box-shadow: 0 128px 0 0 #1d6072;
                              }
                              .ldio-5yh9ye47g8a > div:nth-child(3) div:after {
                                left: -16px;
                                top: 48px;
                                box-shadow: 128px 0 0 0 #1d6072;
                              }
                              
                              .ldio-5yh9ye47g8a > div:nth-child(4) { border-color: transparent; }
                              .ldio-5yh9ye47g8a > div:nth-child(4) div {
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                transform: rotate(45deg);
                              }
                              .ldio-5yh9ye47g8a > div:nth-child(4) div:before, .ldio-5yh9ye47g8a > div:nth-child(4) div:after {
                                content: "";
                                display: block;
                                position: absolute;
                                width: 16px;
                                height: 16px;
                                top: -16px;
                                left: 30px;
                                background: #56bed2;
                                border-radius: 50%;
                                box-shadow: 0 92px 0 0 #56bed2;
                              }
                              .ldio-5yh9ye47g8a > div:nth-child(4) div:after {
                                left: -16px;
                                top: 30px;
                                box-shadow: 92px 0 0 0 #56bed2;
                              }
                              .loadingio-spinner-double-ring-mltvxtjvqo {
                                width: 200px;
                                height: 200px;
                                display: inline-block;
                                overflow: hidden;
                                background: #ffffff;
                              }
                              .ldio-5yh9ye47g8a {
                                width: 100%;
                                height: 100%;
                                position: relative;
                                transform: translateZ(0) scale(1);
                                backface-visibility: hidden;
                                transform-origin: 0 0; /* see note above */
                              }
                              .ldio-5yh9ye47g8a div { box-sizing: content-box; }
                              /* generated by https://loading.io/ */
                              </style>
                           

                             </body>
                        </div>
                    </form>
                </x-auth-card>
            </x-guest-layout>
        </div>
    </div>
</div>
