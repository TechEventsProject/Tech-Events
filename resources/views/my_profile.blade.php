@extends('layouts.app')
@section('content')


<section class="col-span-2 flex justify-center items-center flex-col h-max w-full">
    <div>
        <h1 class="text-white font-['Montserrat'] text-3xl font-bold">My Profile</h1>
    </div>
    <div class="text-white text-center p-4">
        <img src="{{Auth::user()->avatar}}" alt="avatar" class="rounded-full h-36 w-36 object-cover">
        <p class="font-bold">Name:</p><p>{{Auth::user()->name}}</p>
        <p class="font-bold">Email:</p><p>{{Auth::user()->email}}</p>
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