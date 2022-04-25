@extends ('layouts.app')
@section('content')
    <div class="flex justify-center col-span-2">
        <h1 class="text-white font-['Montserrat'] text-3xl font-bold">Edit</h1>
    </div>
    <form action="{{route('update', $event->id)}}" method="post">
        @method('patch')
        @csrf
        <div class="flex justify-center flex-column w-screen p-4 gap-4 items-center border-1 border-white rounded-3xl">
            <input type="text" name="name" value="{{$event->name}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Name">
            <input type="text" name="speaker" value="{{$event->speaker}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Speaker">
            <input type="datetime-local" name="date_and_time" value="{{$event->date_and_time}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Date and Time">
            <input type="text" name="max_participants" value="{{$event->max_participants}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Maximum participants">
            <textarea rows="10" cols="25" name="description" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Description">{{$event->description}}</textarea>
            <input type="text" name="image" value="{{$event->image}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Image (Url)">
            <input type="text" name="location" value="{{$event->location}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Location">

            <div class="flex items-center form-check">
                <input class="form-check-input appearance-none h-6 w-6 rounded-sm checked:bg-[#94DB93] focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer switch-input" type="checkbox" id="checkbox" name="highlighted" {{ ($event->highlighted) ? "checked" : ""}}>
                <label class="form-check-label inline-block text-white" for="checkbox">Highlighted</label>
            </div>

            <div class="flex justify-center gap-2">
                <button class="h-9 w-32 rounded-3xl bg-[#94DB93] text-white font-['Montserrat'] font-bold" type="submit" onclick="return confirm('validate? {{$event->name}}')">Edit</button>
                <a href="{{ URL::previous() }}">
                    <button class="h-9 w-32 rounded-3xl bg-white font-['Montserrat'] font-bold" type="button">Cancel</button>
                </a>
            </div>
        </div>
    </form>
    <a href="{{URL::previous()}}" class="col-span-2">
        <i class="fa-solid fa-arrow-left text-white text-5xl p-4"></i>
    </a>
@endsection