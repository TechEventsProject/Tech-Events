@extends('layouts.app')
@section('content')
    <section class="flex justify-center text-center col-span-2 w-full">
    <!-- <div class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20 col-span-2 mt-5">
        <h2 id="top" class="m-0 absolute z-10 text-4xl md:text-7xl">EDIT PROFILE</h2>
        <h2 id="bottom" class="absolute z-0 mt-3 text-4xl md:text-7xl">EDIT PROFILE</h2>
    </div> -->
    </section>

    <form action="{{ route('profile_update', $user->id) }}" method="post">
        @method('patch')
        @csrf
        <div class="flex px-10 flex-column p-6 m-6 w-fit gap-4 border-1 border-white rounded-3xl">
            <input type="text" value="{{$user->name}}" name="name" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Name">
            <input type="text" value="{{$user->email}}" name="email" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="E-mail">
            <input type="text" name="avatar" value="{{$user->avatar}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Image (Url)">
        </div>
        <div class="flex pl-8 pb-8 px-10 p-6 gap-2">
            <button class="flex justify-center py-2 px-20 h-9 w-32 rounded-3xl bg-[#94DB93] text-white font-['Montserrat'] font-bold " type="submit" onclick="return confirm('validate?')">Update</button>
            <a href="{{route('home')}}">
                <button class="flex justify-center py-2 px-20 h-9 w-32 rounded-3xl bg-white font-['Montserrat'] font-bold" type="button">Cancel</button>
            </a>
        </div>
    </form>

@endsection