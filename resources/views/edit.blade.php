@extends ('layouts.app')
@section('content')

<form action="{{route('update', $event->id)}}" method="post">
    @method('patch')
    @csrf
    <div>
        <span>Name</span>
        <input type="text" name="name" value="{{$event->name}}">
        <span>Description</span>
        <input type="text" name="description" value="{{$event->description}}">
        <button type="submit" onclick="return confirm('validate? {{$event->name}}')">Validate</button>
        <a href="{{route('home')}}">
            <button type="button">Cancel</button>
        </a>
    </div>
</form>

@endsection