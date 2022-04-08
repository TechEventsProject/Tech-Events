@extends('layouts.app')

@section('content')

<section class=" flex flex-col items-center col-span-2 text-lg text-white">
        <h2 class="font-['Montserrat'] font-bold text-xl text-white">{{$event->name}}</h2>
        <p>Speaker: {{$event->speaker}}</p>
        <img src="{{$event->image}}" alt="">
        <p>{{$event->description}}</p>
        <p>{{$event->date_and_time}}</p>
        <p>Location: {{$event->location}}</p>
        <p>Maximum participants: {{$event->max_participants}}</p>
</section>

@endsection