@extends('layouts.app')

@section('content')

<section class=" flex flex-col items-center col-span-2 text-lg">
    <div class="h-screen">
        <h2 class="font-['Montserrat'] font-bold text-xl z-10 absolute top-25 pb-2 m-0 text-green">{{$event->name}}</h2>
        <h2 class="font-['Montserrat'] font-bold text-xl z-0 absolute m-0 text-white">{{$event->name}}</h2>
    </div>
        <div class="flex">
            <p class="font-bold">Speaker:&nbsp</p>
            <p>{{$event->speaker}}</p>
        </div>
        <img src="{{$event->image}}" alt="">
        
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
</section>

@endsection