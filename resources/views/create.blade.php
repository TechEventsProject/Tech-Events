@extends ('layouts.app')
@section('content')
<body class="h-screen w-max-screen text-white">
    <div class="flex justify-center col-span-2">
        <h1 class="text-white font-['Montserrat'] text-3xl font-bold">Create</h1>
    </div>
    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="flex justify-center flex-column w-screen p-4 gap-4 items-center border-1 border-white rounded-3xl">
            <input type="text" name="name" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
            <input type="text" name="speaker" class="rounded-3xl text-center w-64 h-11" placeholder="Speaker">
            <input type="datetime-local" name="date_and_time" class="rounded-3xl text-center w-64 h-11" placeholder="Date and Time">
            <input type="text" name="max_participants" class="rounded-3xl text-center w-64 h-11" placeholder="Maximum participants">
            <textarea rows="10" cols="25" name="description" class="rounded-3xl text-center w-64 h-11 pl-6 pr-6" placeholder="Description"></textarea> 
                    
            <label for="upload-image" class="rounded-3xl text-center w-64 h-11 text-slate-400 bg-white">Upload Image</label>
            <input type="file" name="image" class="-z-1 absolute opacity-0" id="upload-image">
                    
            <input type="text" name="location" class="rounded-3xl text-center w-64 h-11" placeholder="Location">
            <div class="flex justify-center gap-2">
                <button class="h-9 w-32 rounded-3xl bg-[#94DB93] text-white font-['Montserrat'] font-bold" type="submit" onclick="return confirm('Confirm?')">Create</button>
                <a href="{{route('home')}}">
                    <button class="h-9 w-32 rounded-3xl bg-white font-['Montserrat'] font-bold" type="button">Cancel</button>
                </a>
            </div>
        </div>
    </form>
</body>
@endsection
