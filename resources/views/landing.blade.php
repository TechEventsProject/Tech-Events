@extends('layouts.landing')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/landing.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet"> 

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/176919793f.js" crossorigin="anonymous"></script>
</head>

<div>
    <div id="title" class="flex justify-center text-white m-0 .p-0 font-bold relative h-20" >
        <h2 id="top" class="m-0 absolute z{2}">TECH </h2>
        <h2 id="bottom" class="z-10 absolute mt-6">TECH </h2>
    </div>

    <section class="flex slider justify-center">
        <div class="m-14 flex justify-center">
            @foreach ($events as $event)
            <div class="rounded-full bg-[#94DB93] m-4  w-44 h-72 overflow-hidden text-white  ">
                <p class="flex justify-center font-bold text-center text-sm pt-12 pl-4 pr-4">{{$event->name}}</p>
                <p class="flex justify-center">{{$event->date_and_time}}</p>
                <img class="pt-16 w-500 h-500 ">
            </div>
            @endforeach
        </div>
    </section>

    <section>
        <div class="flex justify-center p-4">
            <p class="text-[#FFFDFF] pb-4 font-light text-center max-w-[80%] text-xs"> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eos in quod esse explicabo quae amet cumque obcaecati libero aut. Modi eaque libero debitis a repellat doloribus! Blanditiis, officia ducimus!</p>
        </div>

        <div class="flex justify-center pb-8">
            <a href="{{route('home', ['id' => $event->id])}}">
                <button id="button" type="button" class="rounded-3xl bg-[#69C4A0] text-white font-bold py-2 px-20 ">
                    <p>see more</p>
                </button>
            </a>
        </div>
    </section>

    
</div>
<footer>
    <div class="flex justify-center mt-4">
        <hr class="w-80 bg-white">
    </div>
    <div class="flex flex-col justify-center items-center gap-4 text-center text-gray-400 text-2xl p-4">
        <div class="flex space-x-6">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-twitter"></i>
        </div>
        <div>
            <p class="text-sm w-80">Etiam Massa tincidunt a sit tristique nec nibh cursus et viverra. Sit nec </p>
        </div>
    </div>
</footer>

    @endsection
