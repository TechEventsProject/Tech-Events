@extends('layouts.app')

@section('content')

@if (Auth::check() && Auth::user()->isAdmin())
<a class="col-span-2" href="{{route('create')}}">
    <button type="submit">
        <p class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</p>
    </button>
</a>
@endif
@foreach ($events as $event)

<div class="flex justify-center flex-column p-2 md:p-20">
    <p class="text-center text-2xl text-white sm: text-lg">{{$event->name}}</p>
    <img class="h-full w-full sm:h-100 w-100" src="{{$event->image}}" alt="events">
    <form class="flex justify-end" action="{{route('delete', ['id' => $event->id])}}" method="post">
        @method('delete')
        @csrf
        @if (Auth::check() && Auth::user()->isAdmin())
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="return confirm('Are you sure you want to delete this? {{$event->name}}')">
                <p>Delete</p>
            </button>
        @endif
        @if (Auth::check() && Auth::user()->isAdmin())
            <a href="{{route('edit', ['id' => $event->id])}}">
                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <p>Edit</p>
                </button>
            </a>
        @endif
        <a href="{{route('show', ['id' => $event->id])}}">
            <button type="button" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                <p>Show</p>
            </button>
        </a>
        <a href="{{route('subscribe', ['id' => $event->id])}}">
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <p>Subscribe</p>
            </button>
        </a>
    </form>
</div>

@endforeach

<div class="col-span-2">{{$events->links()}}</div>



@endsection