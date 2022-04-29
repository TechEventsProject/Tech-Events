@extends('layouts.app')
@section('content')
    <section class="flex justify-center text-center col-span-2 w-full">
    <div class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20 col-span-2 mt-5 w-full">
        <h2 id="top" class="m-0 absolute z-10 text-4xl md:text-7xl">EDIT PROFILE</h2>
        <h2 id="bottom" class="absolute z-0 mt-3 text-4xl md:text-7xl">EDIT PROFILE</h2>
    </div>
    </section>

    <form action="{{ route('profile_update', $user->id) }}" method="post" class="flex justify-center col-span-2">
        @method('patch')
        @csrf
        <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
            <input type="text" value="{{$user->name}}" name="name" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Name">
            <input type="text" value="{{$user->email}}" name="email" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="E-mail">
            <input type="text" name="avatar" value="{{$user->avatar}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Image (Url)">
            <div class="flex justify-center gap-2">
                <button class="h-9 w-32 rounded-3xl bg-[#94DB93] text-white font-['Montserrat'] font-bold" type="submit" onclick="return confirm('validate?')">Update</button>
                <a href="{{route('home')}}">
                    <button class="h-9 w-32 rounded-3xl bg-white font-['Montserrat'] font-bold" type="button">Cancel</button>
                </a>
            </div>
        </div>
    </form>
    <a href="{{route('my_profile')}}" class="self-start mt-5">
        <i class="fa-solid fa-arrow-left text-white text-5xl p-4 col-span-2 flex self-end"></i>
    </a>

@endsection