@extends ('layouts.app')
@section('content')
<body class="h-screen w-max-screen">
    <form action="{{route('update', $event->id)}}" method="post">
        @method('patch')
        @csrf
        <div class="flex flex-column">
            <span class="font-bold">Name</span>
            <input type="text" name="name" value="{{$event->name}}">
            <span class="font-bold">Speaker</span>
            <input type="text" name="speaker" value="{{$event->speaker}}">
            <span class="font-bold">Date and Time</span>
            <input type="datetime-local" name="date_and_time" value="{{$event->date_and_time}}">
            <span class="font-bold">Participants</span>
            <input type="text" name="participants" value="{{$event->participants}}">
            <span class="font-bold">Maximum participants</span>
            <input type="text" name="max_participants" value="{{$event->max_participants}}">
            <span class="font-bold">Description</span>
            <input type="text" name="description" value="{{$event->description}}">
            <span class="font-bold">image</span>
            <input type="text" name="image" value="{{$event->image}}">
            <span class="font-bold">location</span>
            <input type="text" name="location" value="{{$event->location}}">
    
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="return confirm('validate? {{$event->name}}')">Validate</button>
            <a href="{{route('home')}}">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full" type="button">Cancel</button>
            </a>
        </div>
    </form>
</body>

@endsection