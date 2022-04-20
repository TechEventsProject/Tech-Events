@extends('layouts.app')
@section('content')


<section class="flex justify-center flex-col col-span-2">
    <div>
        <h1 class="text-white font-['Montserrat'] text-3xl font-bold">My Profile</h1>
    </div>
    <div class="text-white">
        <p class="font-bold">Name:</p><p>{{Auth::user()->name}}</p>
        <p class="font-bold">Email:</p><p>{{Auth::user()->email}}</p>
        <img src="{{Auth::user()->avatar}}" alt="avatar">
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