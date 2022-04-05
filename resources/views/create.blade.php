@extends ('layouts.app')
@section('content')

<form action="{{route('store')}}" method="post">
    @csrf
    <div class="flex flex-column">
            <span class="font-bold">Name</span>
            <input type="text" name="name">
            <span class="font-bold">Speaker</span>
            <input type="text" name="speaker">
            <span class="font-bold">Date and Time</span>
            <input type="datetime-local" name="date_and_time">
            <span class="font-bold">Participants</span>
            <input type="text" name="participants">
            <span class="font-bold">Maximum participants</span>
            <input type="text" name="max_participants">
            <span class="font-bold">Description</span>
            <input type="text" name="description">
            <span class="font-bold">image</span>
            <input type="text" name="image">
            <span class="font-bold">location</span>
            <input type="text" name="location">
    
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit" onclick="return confirm('Confirm?')">Validate</button>
            <a href="{{route('home')}}">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full" type="button">Cancel</button>
            </a>
        </div>


</form>

@endsection
