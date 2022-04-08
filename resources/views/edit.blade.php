@extends ('layouts.app')
@section('content')
<body class="h-screen w-max-screen text-white">
    <div class="flex justify-center col-span-2">
        <h1 class="text-white font-['Montserrat'] text-3xl font-bold">Edit</h1>
    </div>
    <form action="{{route('update', $event->id)}}" method="post">
        @method('patch')
        @csrf
        <div class="flex justify-center flex-column w-screen p-4 gap-4 items-center">
            <input type="text" name="name" value="{{$event->name}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Name">
            <input type="text" name="speaker" value="{{$event->speaker}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Speaker">
            <input type="datetime-local" name="date_and_time" value="{{$event->date_and_time}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Date and Time">
            <input type="text" name="max_participants" value="{{$event->max_participants}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Maximum participants">
            <textarea rows="10" cols="25" name="description" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Description">{{$event->description}}</textarea>
            <input type="text" name="image" value="{{$event->image}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Image (Url)">
            <input type="text" name="location" value="{{$event->location}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Location">
            <div class="flex justify-center gap-2">
                <button class="h-9 w-32 rounded-3xl bg-[#94DB93] text-white font-['Montserrat'] font-bold" type="submit" onclick="return confirm('validate? {{$event->name}}')">Edit</button>
                <a href="{{route('home')}}">
                    <button class="h-9 w-32 rounded-3xl bg-white font-['Montserrat'] font-bold" type="button">Cancel</button>
                </a>
            </div>
        </div>
    </form>
</body>

@endsection