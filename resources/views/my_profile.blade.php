@extends('layouts.app')
@section('content')


<section class="col-span-2 flex justify-center items-center flex-col h-max w-full gap-4">

    <div class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20 w-full col-span-2 mt-5">
        <h2 id="top" class="flex flex-row m-0 absolute z-10 text-4xl md:text-7xl">MY PROFILE</h2>
        <h2 id="bottom" class="absolute z-0 mt-3 text-4xl md:text-7xl">MY PROFILE</h2>
    </div>
    <div class="flex flex-col items-center justify-center text-center gap-4 w-72 h-max bg-[#69C4A0] rounded-3xl p-12 md:mt-3">
    @if(Auth::user()->avatar)
    <a href="{{route('my_profile')}}">
        <img src="{{Auth::user()->avatar}}" alt="" class="rounded-full h-11 w-11 object-cover border-1 border-[#94DB93]">
    </a>                    
    @else
    <a href="{{route('my_profile')}}">
        <i class="fa-solid fa-circle-user bg-white text-[#94DB93] rounded-full text-9xl"></i>
    </a>
    @endif
    <div class="flex flex-col gap-2 align-middle">
        <p class="font-bold">Name:</p><p class="p-2 bg-white text-opacity-60 rounded-3xl text-center w-52 h-9">{{Auth::user()->name}}</p>
        <p class="font-bold">Email:</p><p class="bg-white p-2 rounded-3xl text-center w-52 h-9">{{Auth::user()->email}}</p>
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