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
        <button type="submit" onclick="return confirm('madafaka {{$event->name}}')">Validate</button>
        <button type="button" onclick="{{ route('home') }}">Cancel</button>
    </div>

</form>

@endsection