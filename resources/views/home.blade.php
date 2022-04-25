@extends('layouts.app')
@section('content')
@if (Auth::check() && Auth::user()->isAdmin())
<a class="col-span-2" href="{{route('create')}}">
    <button type="submit">
        <p class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</p>
    </button>
</a>
@endif
    <div id="title" class=" text-[36px]  justify-center text-white m-0 .p-0 font-[Montserrat] font-bold flex p-16 col-span-2">
        <h2 id="top" class=" m-0 absolute z{2}">MASTERCLASS </h2>
        <h2 id="bottom" class=" z{1} absolute m-0 top-24 pb-12">MASTERCLASS </h2>
    </div>
    <section class=" grid grid-cols-2 col-span-2 md: grid grid-cols-4">
    
    <!--Modal-->
    <div id="overlay" class=" flex hidden absolute inset-0 bg-opacity-50 bg-[#000A12] z-10 align-middle justify-center items-center">
        <div class=" h-[204px] w-[268px] bg-[#94DB93] align-middle items-center rounded-[68px]">
            <p class=" text-center font-[Montserrat]  text-[#FFFDFF] text-[20px] font-bold">
            join us now by creating an account
            <a href="{{ route('register') }}">“Register”</a></p>
        </div>
    </div>

    @foreach ($events as $event)
    <div id="backgroundImage" class="font-[Montserrat] rounded-[38px] bg-cover bg-center bg-[url('{{$event->image}}')]
        flex flex-col text-[#FFFDFF] h-[175px] w-[165px] items-center text-center justify-center">
        <div class="relative -bottom-[14px]">
            <p class='text-sm font-semibold relative -bottom-[5px]'>{{ date('d/m/Y', strtotime($event->date_and_time)) }}</p>
            <p class="text-xl font-semibold">{{$event->speaker}}</p>
        </div>
        <div class="relative flex justify-center items-center bg-[#69C4A0] rounded-3xl relative -bottom-[17px] h-[30px] w-[144px] ">
            <a class="text-sm font-semibold align-middle leading-[12px]" href="{{route('show', ['id' => $event->id])}}">{{$event->name}}</a>
        </div>

        <!--admin crud-->
        @if(Auth::check() && Auth::user()->isAdmin())
                    <div class=" flex justify-center gap-2 relative -bottom-14 ">
                            <form action="{{route('delete', ['id' => $event->id])}}" method="post" onclick="return confirm('Are you sure?')">
                            @method('delete')
                            @csrf
                            <button type="submit">
                                <i class="fa-solid fa-trash bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 leading-none"></i>
                            </button>
                            </form>
                            <a href="{{route('edit', ['id' => $event->id])}}">
                                <i class="fa-solid fa-pencil bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 leading-none"></i>
                            </a>
                            <a href="">
                                <i class="fa-regular fa-star bg-[#FFFDFF] text-[#94DB93] rounded-full p-3  leading-none"></i>
                            </a>
                        </div>

        <!--subscribe route/join button 'only for user and guest, but not needed for admin'-->
        @else
        <div id="join-btn" class=" text-[#94DB93] bg-[#FFFDFF] rounded-3xl relative -bottom-12 h-[22px] w-[86px] ">
    
            <a id="" class=" font-bold text-[10px]" href="" >JOIN</a>
        </div>
        @endif
    </div>
    @endforeach
    </section>
<div class="col-span-2">{{$events->links()}}</div>

<!-- POPUPS -->
<script>
    window.addEventListener
    ('DOMContentLoaded', () =>{
        const overlay = document.querySelector
        ('#overlay')
        const joinBtn = document.querySelector
        ('#join-btn')
        joinBtn.addEventListener ('click', () =>{
            overlay.classList.remove('hidden')
        })
        overlay.addEventListener ('click', () =>{
            overlay.classList.add('hidden')
        })
    })
</script>
@endsection