@extends('layouts.app')

@section('content')

@foreach ($events as $event)
<div class="flex justify-center flex-column p-20">
    <p class="text-center text-2xl">{{$event->name}}</p>
    <img class="h-full w-full" src="{{$event->image}}" alt="events">
    <form class="flex justify-end" action="{{route('delete', ['id' => $event->id])}}" method="post">
        @method('delete')
        @csrf
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="return confirm('Are you sure you want to delete this? {{$event->name}}')">
            <p>Delete</p>
        </button>
        <a href="{{route('edit', ['id' => $event->id])}}" method="post">
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <p>Edit</p>
            </button>
        </a>
    </form>
</div>




@endforeach

<div class="col-span-2">{{$events->links()}}</div>



@endsection