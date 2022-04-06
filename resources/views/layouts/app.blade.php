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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/176919793f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <nav class="bg-black">
        @guest 
        <ul class="container flex justify-between p-6 items-center" >
            <li class="text-4xl"><i class="fa-solid fa-bars text-[#94DB93]"></i></li>
            <div class="flex items-center">
                @if(Route::has('login'))
                <a href="{{ route('login') }}">
                    <li  class="mr-3 text-white font-['Montserrat']">{{__('Login')}}</li>
                </a>
                @endif
                <!-- <li class="text-4xl"><i class="fa-solid fa-circle-user bg-white text-[#94DB93] rounded-full"></i></li> -->
            </div>
                        @else
                            <li class="">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            </ul>
            @endguest
                </div>
            </div>
        </nav>

        <main class="grid grid-cols-2 gap-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
