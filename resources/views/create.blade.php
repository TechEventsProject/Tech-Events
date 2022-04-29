@extends ('layouts.app')
@section('content')
    <div class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20 col-span-2 mt-5 w-full">
        <h2 id="top" class="m-0 absolute z-10 text-4xl md:text-7xl">CREATE</h2>
        <h2 id="bottom" class="absolute z-0 mt-3 text-4xl md:text-7xl">CREATE</h2>
    </div>
    <form action="{{route('store')}}" method="post" class="flex justify-center col-span-2">
        @csrf
        <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
            <input type="text" name="name" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
            <input type="text" name="speaker" class="rounded-3xl text-center w-64 h-11" placeholder="Speaker">
            <input type="datetime-local" name="date_and_time" class="rounded-3xl text-center w-64 h-11" placeholder="Date and Time">
            <input type="text" name="max_participants" class="rounded-3xl text-center w-64 h-11" placeholder="Maximum participants">
            <textarea rows="10" cols="25" name="description" class="rounded-3xl text-center w-64 h-11 pl-6 pr-6" placeholder="Description"></textarea> 
                    
            <input type="text" name="image" class="rounded-3xl text-center w-64 h-11 text-black bg-white" placeholder="Image (Url)">
                    
            <input type="text" name="location" class="rounded-3xl text-center w-64 h-11" placeholder="Location">

<!-- HIGHLIGHT CHECKBOX -->

            <div class="flex items-center form-check">
                <input class="form-check-input appearance-none h-6 w-6 rounded-sm checked:bg-[#94DB93] focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer switch-input" type="checkbox" id="checkbox" name="highlighted">
                <label class="form-check-label inline-block text-white" for="checkbox">Highlighted</label>
            </div>


            <div class="flex justify-center gap-2">
                <button class="h-9 w-32 rounded-3xl bg-[#94DB93] text-white font-['Montserrat'] font-bold" type="submit" onclick="return confirm('Confirm?')">Create</button>
                <a href="{{route('home')}}">
                    <button class="h-9 w-32 rounded-3xl bg-white font-['Montserrat'] font-bold" type="button">Cancel</button>
                </a>
            </div>
            
        </div>
    </form>
    <a href="{{URL::previous()}}" class="col-span-2">
        <i class="fa-solid fa-arrow-left text-white text-5xl p-4"></i>
    </a>
@endsection

