@extends('layouts.landing_layout')

@section('content')

<div>
    <div id="title" class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20" >
        <h2 id="top" class="m-0 absolute z-10 text-7xl md:text-9xl">TECH</h2>
        <h2 id="bottom" class="z-0 absolute mt-4 text-7xl md:text-9xl">TECH</h2>
    </div>
</section>

    <section class="flex slider justify-center">
        <div class="p-12 flex justify-center">
            @foreach ($events as $event)
            <div onclick="window.location = `{{ route('show', $event->id) }}`" class="rounded-full bg-[url('{{$event->image}}')] bg-no-repeat bg-cover bg-center m-4 w-44 h-72 overflow-hidden text-white">
                <div class="bg-black/40 z-10 bg-cover  w-44 h-72 justify-center">
                <p class="flex justify-center font-bold text-center text-sm pt-12 pl-4 pr-4">{{$event->name}}</p>
                <p class="flex justify-center">{{ date('d/m/Y', strtotime($event->date_and_time)) }}</p>
                    <img class="pt-16 w-500 h-500 ">
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section>
        <div class="flex justify-center p-4">
            <p class="text-[#FFFDFF] pb-4 font-light text-center max-w-[70%] text-xs"> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eos in quod esse explicabo quae amet cumque obcaecati libero aut. Modi eaque libero debitis a repellat doloribus! Blanditiis, officia ducimus!</p>
        </div>

        <div class="flex justify-center pb-8">
            <a href="{{route('home', ['id' => $event->id])}}">
                <button id="button" type="button" class="rounded-3xl bg-[#69C4A0] animate-pulse  hover:animate-bounce text-white font-bold py-2 px-20 ">
                    <p>See more</p>
                </button>
            </a>
        </div>
    </section>
</div>

<footer>
    <div class="flex justify-center mt-4">
        <hr class="w-80 bg-white">
    </div>
    <div class="gap-4 text-center text-gray-400 text-2xl p-4 flex flex-col justify-center items-center">
        <div class="space-x-6">
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
