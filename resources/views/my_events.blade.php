@extends('layouts.app')

@section('content')
<div class="flex justify-center flex-column p-2 md:p-20">
    @foreach ($myEventUser as $event) 
    <p class="text-center text-2xl text-white sm:text-lg">{{$event->name}}</p>
    <img class="h-full w-full sm:h-100 w-100" src="{{$event->image}}" alt="events">
    <a href="{{route('unsubscribe', ['id'=>$event->id])}}">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <p>Unsubscribe</p>
        </button>
    </a>
    @endforeach
</div>

@endsection