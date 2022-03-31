@extends('layouts.app')

@section('content')



@foreach ($events as $event)

<p>{{$event->name}}</p>
<img src="{{$event->image}}" alt="">

<form action="{{route('delete', ['id' => $event->id])}}" method="post">
    @method('delete')
    @csrf
    <button type="submit" onclick="return confirm('Are you sure you want to delete this? {{$event->name}}')">
        <p>Delete</p>
        
    </button>
    <button></button>
</form>



@endforeach

{{$events->links()}}



@endsection