@extends ('layouts.app')
@section('content')
<body class="h-screen w-max-screen text-white">
    <form action="{{route('update', $event->id)}}" method="post">
        @method('patch')
        @csrf
        <div class="flex flex-column w-screen p-4">
            <span class="font-bold text-white">Name</span>
            <input type="text" name="name" value="{{$event->name}}">
            <span class="font-bold text-white">Speaker</span>
            <input type="text" name="speaker" value="{{$event->speaker}}">
            <span class="font-bold text-white">Date and Time</span>
            <input type="datetime-local" name="date_and_time" value="{{$event->date_and_time}}">
            <span class="font-bold text-white">Maximum participants</span>
            <input type="text" name="max_participants" value="{{$event->max_participants}}">
            <span class="font-bold text-white">Description</span>
            <input type="text" name="description" value="{{$event->description}}">
            <span class="font-bold text-white">image</span>
            <input type="text" name="image" value="{{$event->image}}">
            <span class="font-bold text-white">location</span>
            <input type="text" name="location" value="{{$event->location}}">
            <div class="flex justify-center">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="return confirm('validate? {{$event->name}}')">Validate</button>
                <a href="{{route('home')}}">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full" type="button">Cancel</button>
                </a>
            </div>
        </div>
    </form>
</body>

@endsection