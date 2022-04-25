@extends('layouts.app')
@section('content')


<section class="col-span-2 flex justify-center items-center flex-col h-max w-full gap-4">
    <div>
        <h1 class="text-white font-['Montserrat'] text-3xl font-bold">My Profile</h1>
    </div>
    <div class="flex flex-col items-center justify-center text-center gap-4 w-72 h-max bg-[#69C4A0] rounded-3xl p-12">
        <img src="{{Auth::user()->avatar}}" alt="avatar" class="rounded-full h-36 w-36 object-cover border-2 border-white">
        <div class="flex flex-col gap-2 align-middle">
            <p class="font-bold">Name:</p><p class="bg-white rounded-3xl text-center w-52 h-9">{{Auth::user()->name}}</p>
            <p class="font-bold">Email:</p><p class="bg-white rounded-3xl text-center w-52 h-9">{{Auth::user()->email}}</p>
        </div>
    </div>
    <div class="flex justify-center gap-2">
        <a href="{{route('edit_profile')}}">
            <button class="h-9 w-32 rounded-3xl bg-white font-['Montserrat'] font-bold" type="button">Edit</button>
        </a>
        <a href="{{ route('home') }}">
            <button class="h-9 w-32 rounded-3xl bg-[#94DB93] text-white font-['Montserrat'] font-bold" type="button">Cancel</button>
        </a>
    </div>
</section>

@endsection