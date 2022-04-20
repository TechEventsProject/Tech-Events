@extends('layouts.app')

@section('content')
<div id="event" class="flex flex-col items-center col-span-2">
        <div id="speaker" class="relative font-['Montserrat'] uppercase font-bold text-[2rem] text-center mb-4">
                <h2 class="text-white bg-transparent">{{$event->speaker}}</h2>
                <h2 class="absolute top-[25%] z-[-1] stroke bg-transparent">{{$event->speaker}}</h2>
        </div>
        <section class="w-[85%] h-[22rem] bg-[url('{{ $event->image }}')] rounded-[105px] p-10 bg-cover bg-no-repeat bg-center"></section>
        <div id="info" class="text-[#FFFDFF] w-[85%] lg:w-[60%] mt-10 mb-3">
                <h1 class="text-center font-bold font-['Poppins'] uppercase text-[20px] mb-3">{{ $event->name }}</h1>
                <p class="mb-3 font['Montserrat'] text-[14px] text-center">{{ $event->description }}
                <h3 class="font-bold font-['Poppins'] text-[18px] text-center">Place:<span class="font-['Montserrat'] text-[14px] font-medium"> {{$event->location}}</span></h3>
        </div>
        <div id="pills" class="grid grid-cols-3 gap-4 justify-around mb-4">
                <div class="flex flex-col items-center rounded-full bg-[#94DB93] text-white py-5 px-1">
                        <p class="font-['Poppins'] ">Event Date:</p>
                        <p class="font-['Poppins'] font-black">{{ date('d/m/Y', strtotime($event->date_and_time)) }}</p>
                </div>
                <div class="flex flex-col items-center rounded-full bg-[#94DB93] text-white py-5 px-1">
                        <p class="font-['Poppins'] ">Hour:</p>
                        <p class="font-['Poppins'] font-black">{{ date('H:m', strtotime($event->date_and_time)) }}</p>
                </div>
                <div class="flex flex-col items-center rounded-full bg-[#94DB93] text-white py-5 px-1">
                        <p class="font-['Poppins'] ">Capacity:</p>
                        <p class="font-['Poppins'] font-black">{{$users}}/{{$event->max_participants}}</p>
                </div>
        </div>
        <form action="{{ route('sub', $event->id) }}" method="post">
                <button class="bg-[#69C4A0] font-black font-['Montserrat'] text-white uppercase rounded-full py-2 px-10">
                        Join the Event
                </button>
        </form>
        <a href="{{URL::previous()}}" class="self-start mt-5">
                <i class="fa-solid fa-arrow-left text-white text-3xl pl-4"></i>
        </a>
</div>

@endsection