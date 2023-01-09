<nav class="navbar navbar-light bg-white navbar-expand-lg shadow-sm">
<div class="container">
    
    <a class="navbar-brand display-4 text-primary " href="{{ route('home')}}">
        Dani Colmenares Cadiz{{--  {{ config('app.name')}}  --}}
     </a>
    
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">  
            <ul class="nav nav-pills">
                <li class="nav-item ">
                    <a class="nav-link {{ setActive('home') }}"
                        href="{{ route('home') }}"
                        >@lang('Home')</a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link {{ setActive('about') }}"
                    href="{{ route('about') }}"
                    >@lang('About')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ setActive('projects.*') }}"
                    href="{{ route('projects.index') }}"
                    >@lang('Projects')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ setActive('contact') }}"
                    href="{{ route('contact') }}"
                    >@lang('Contact')</a>
                </li>
            
                {{-- <li class="nav-item">
                    <a class="nav-link {{ setActive('dashboard') }} "
                    href="{{ route('dashboard')}}"
                    >@lang('Dashboard')</a>
                </li> --}}

                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('login') }}"
                        href="{{ route('login')}}"
                        >@lang('Login')</a>
                    </li>
                @else
                @auth
                    <a class="nav-link">
                        Bienvenido: {{ auth()->user()->name}}
                    </a>
                @endauth
                    <li class="nav-link">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                        </form>
                    </li>
                @endguest
                </ul>
      
        </div>
        <button class="nav-toggler" type="button" 
        data-toggle="collapse"
        data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" 
        aria-expanded="false" 
        aria-label="{{ __('Toggle navigation') }}"
        ><span class="navbar-toggler-icon"></span>
    </button>
</div>

</nav>