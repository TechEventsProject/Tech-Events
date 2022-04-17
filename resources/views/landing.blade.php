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


    <div id="title" class="text-white m-0 .p-0 font-bold relative flex-start p-16" >
        <h2 id="top" class="m-0 absolute z{2}">TECH </h2>
        <h2 id="bottom" class="z{1} absolute m-0 top-24 pb-12">TECH </h2>
    </div>

    <!-- @foreach ($events as $event) -->
<div>
    <div id="box" class=" flex-row-reverse rounded-full bg-[#94db93] m-11 bg-green-800 w-44 h-72 overflow-hidden pt-9 text-white relative mt-56 ">
        <p class="flex justify-center font-bold text-center text-sm pt-4">{{$event->name}}</p>
        <p class="flex justify-center">{{$event->date_and_time}}</p>
        <img class="pt-20 w-500 h-500" src="{{$event->image}}" alt="events">
    </div>
    
    <!-- 
    @endforeach -->
    <a href="{{route('home', ['id' => $event->id])}}">
        <button id="seeMoreButton" type="button" class="rounded-xl justify-center bg-[#69c4a0] text-white font-bold py-2 px-4 ">
            <p>see more</p>
        </button>
    </a>
</div>
    @endsection


