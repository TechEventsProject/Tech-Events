@extends('layouts.app')
@section('content')

    <div class="flex justify-center col-span-2">
        <h1 class="text-white font-['Montserrat'] text-3xl font-bold">My Profile</h1>
    </div>
    <form action="{{ route('profile_update', $user->id) }}" method="post">
        @method('patch')
        @csrf
        <div class="flex justify-center flex-column w-screen p-4 gap-4 items-center border-1 border-white rounded-3xl">
            <input type="text" value="{{$user->name}}" name="name" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Name">
            <input type="text" value="{{$user->email}}" name="email" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="E-mail">
            <input type="text" name="avatar" value="{{$user->avatar}}" class="rounded-3xl text-center w-64 h-11 pl-4 pr-4" placeholder="Image (Url)">
        </div>
        <div class="flex justify-center pl-8 pb-8 p-8 gap-2">
            <button class="flex justify-center py-2 px-20 h-9 w-32 rounded-3xl bg-[#94DB93] text-white font-['Montserrat'] font-bold " type="submit" onclick="return confirm('validate?')">Update</button>
            <a href="{{route('home')}}">
                <button class="flex justify-center py-2 px-20 h-9 w-32 rounded-3xl bg-white font-['Montserrat'] font-bold" type="button">Cancel</button>
            </a>
        </div>
    </form>

@endsection