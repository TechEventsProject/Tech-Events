@extends('layouts.app')

@section('content')



@foreach ($events as $event)

<p>{{$event->name}}</p>
<img src="{{$event->image}}" alt="">

@endforeach

{{$events->links()}}



@endsection
