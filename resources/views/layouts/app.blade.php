<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/editProfile.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('TabIcon.png')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/176919793f.js" crossorigin="anonymous"></script>
</head>

<body class="bg-black h-screen">
    <!-- <div id="deletePopup" class="absolute hidden w-screen h-screen z-10 bg-gray-700/50">

    </div>
    <div id="subscribedSuccessPopup">

    </div>
    <div id="unsubscribedSuccessPopup">

    </div>
    <div id="updatePopup">

    </div> -->
    <div id="app">
        <nav>
        @guest 
        <ul class="container flex justify-between p-6 items-center" >
            <div class="dropdown relative">
                <button class="dropdown-toggle hover:text-[#94DB93] active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap" type="button" data-bs-toggle="dropdown">
                    <li class="text-4xl dropdown relative"><i class="fa-solid fa-bars text-[#94DB93]"></i></li>
                    <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
                </button>
                <ul class="dropdown-menu bg-[#94DB93] text-white font-['Montserrat'] font-bold h-max w-64 p-4 text-xl text-center
                space-x-6">
                    <a href="{{route('home')}}">
                        <li>About Us</li>
                    </a>
                    <a href="{{route('home')}}">
                        <li>Masterclass</li>
                    </a>
                    <a href="{{route('home')}}">
                        <li>Workshops</li>
                    </a>
                    <a href="{{route('home')}}">
                        <li>Webinars</li>
                    </a>
                </ul>
            </div>
            <a href="{{route('home')}}">
                <li class="text-white tex-lg">TECH EVENTS</li>
            </a>
            <div class="flex items-center">
                @if(Route::has('login'))
                <a href="{{ route('login') }}">
                    <li  class="mr-3 text-white font-['Montserrat']">{{__('Login')}}</li>
                </a>
                @endif
                @if (Route::has('register'))
                <a href="{{ route('register') }}">
                    <li class="mr-3 text-white font-['Montserrat']">{{ __('Register') }}</li>
                </a>
                @endif
            </div>
            @else
            <ul class="container flex justify-between p-6 items-center" >
                <div class="dropdown relative">
                    <button class="dropdown-toggle hover:text-[#94DB93] active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap" type="button" data-bs-toggle="dropdown">
                        <li class="text-4xl dropdown relative"><i class="fa-solid fa-bars text-[#94DB93]"></i></li>
                        <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
                    </button>
                    <ul class="dropdown-menu bg-[#94DB93] text-white font-['Montserrat'] font-bold h-max w-64 p-4 text-xl text-center
                    space-x-6">
                        <a href="{{route('home')}}">
                            <li>About Us</li>
                        </a>
                        <a href="{{route('home')}}">
                            <li>Masterclass</li>
                        </a>
                        <a href="{{route('home')}}">
                            <li>Workshops</li>
                        </a>
                        <a href="{{route('home')}}">
                            <li>Webinars</li>
                        </a>
                    </ul>
                </div>
                <a href="{{route('home')}}">
                    <li class="text-white tex-lg">TECH EVENTS</li>
                </a>
                <div class="flex items-center">
                    <a id="navbarDropdown" class="text-white nav-link dropdown-toggle font-['Montserrat']" href="#" role="button" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> 
                        <a class="dropdown-item" href="{{ route('my_profile') }}">
                            <button type="button">{{ __('My Profile') }}</button>
                        </a>
                        <a class="dropdown-item" href="{{ route('my_events') }}">
                            <button type="button">{{ __('My Events') }}</button>
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </div>
                    @if(Auth::user()->avatar)
                    <a href="{{route('my_profile')}}">
                        <img src="{{Auth::user()->avatar}}" alt="" class="rounded-full h-11 w-11 object-cover border-1 border-[#94DB93]">
                    </a>                    
                    @else
                    <a href="{{route('my_profile')}}">
                        <li class="text-4xl"><i class="fa-solid fa-circle-user bg-white text-[#94DB93] rounded-full"></i></li>
                    </a>
                    @endif
                </div>
            </ul>
        @endguest
        </nav>
    </div>
    <div>
        <main class="grid grid-cols-2 h-max md:gap-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
