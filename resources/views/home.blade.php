@extends('layouts.app')
@section('content')
@if (Auth::check() && Auth::user()->isAdmin())

@endif

    <!-- <div id="title" class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20" >
        <h2 id="top" class="m-0 absolute z-10 text-7xl md:text-9xl">TECH</h2>
        <h2 id="bottom" class="z-0 absolute mt-4 text-7xl md:text-9xl">TECH</h2>
    </div> -->

    <div class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20 col-span-2 mt-5">
        <h2 id="top" class="m-0 absolute z-10 text-4xl md:text-7xl">MASTERCLASS </h2>
        <h2 id="bottom" class="absolute z-0 mt-3 text-4xl md:text-7xl">MASTERCLASS </h2>
    </div>

    <section class="grid grid-cols-2 col-span-2 gap-20 flex justify-items-center p-9 md:grid-cols-3 lg:grid-cols-4">

    @foreach ($events as $event)

    <div id="backgroundImage" class="rounded-[38px] bg-cover bg-center bg-[url('{{$event->image}}')]
    flex flex-col text-[#FFFDFF] md:h-44 w-40 items-center text-center justify-center h-64 w-60">

    <div class="bg-black/40 font-[Montserrat] rounded-[38px] bg-cover bg-center flex flex-col text-[#FFFDFF] md:h-44 w-40 items-center text-center justify-center h-64 w-60" >

        <div class="relative -bottom-[14px]">
            <p class='text-sm font-semibold relative -bottom-[5px]'>{{ date('d/m/Y', strtotime($event->date_and_time)) }}</p>
            <p class="text-xl font-semibold">{{$event->speaker}}</p>
        </div>

        <button onclick="window.location = `{{ route('show', $event->id) }}`" class=" relative flex justify-center items-center bg-[#69C4A0] rounded-3xl relative -bottom-[17px] h-[30px] w-[144px] ">
            <a class="text-sm font-semibold align-middle leading-[12px]" >{{$event->name}}</a>
        </button> 

        

        <!--admin crud-->
        @if(Auth::check() && Auth::user()->isAdmin())
        <div class=" flex justify-center gap-2 relative -bottom-14 ">
                
                <button  id="delete-btn" type="submit">
                    <i class="fa-solid fa-trash bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 leading-none"></i>
                </button>
                
                <a href="{{route('edit', ['id' => $event->id])}}">
                    <i class="fa-solid fa-pencil bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 leading-none"></i>
                </a>
                <a href="">
                    <i class="fa-regular fa-star bg-[#FFFDFF] text-[#94DB93] rounded-full p-3  leading-none"></i>
                </a>
        </div>
        @endif

        <!--modal_admin_delete_2.0v-->
    <div id="overlay-delete" class=" h-screen w-screen hidden font-[Montserrat] text-[#FFFDFF] text-[20px] flex  absolute inset-0 bg-opacity-30 bg-[#000A12] z-10 align-middle justify-center items-center">
        <div class="space-y-[120px] h-[204px] w-[268px] bg-[#94DB93] flex flex-col align-middle items-center rounded-[68px]">
            
            <div class="flex flex-col text-center ">
                <p class=" flex flex-col text-[16px] font-regular">
                this can't be undone.
                <p class="font-bold">DELETE THIS EVENT?</p></p>
            </div>

            <div class="flex flex-row space-x-[36px] font-bold ">
                
            <button class=" rounded-[28px] items-center bg-[#FFFDFF] h-[64px] w-[80px] text-[#94DB93]">
                <p>NAH</p>
            </button>

            <form action="{{route('delete', ['id' => $event->id])}}" method="post" onclick="return confirm('Are you sure?')">
            @method('delete')
            @csrf
            <button type="submit" class=" rounded-[28px] align-middle  bg-[#69C4A0] h-[64px] w-[80px] ">
                <p>YES</p>
            </button>
            </form>

            </div>
        </div>      
    </div>

        <!--subscribe route/join button 'only for user and guest, but not needed for admin'-->
        
        @if(!Auth::user())
        <button onclick="window.location = `{{ route('show', $event->id) }}`" class=" text-[#94DB93] bg-[#FFFDFF] rounded-3xl relative -bottom-12 h-[22px] w-[86px] ">
            <a class=" font-bold text-[10px] " >EVENT</a>
            <!-- href="{{ route('subscribe', $event->id) }}`"  -->
        </button>
        @else
            @if(Auth::check() && !Auth::user()->isAdmin())
        
        <button onclick="window.location = `{{ route('subscribe', $event->id) }}`" class=" text-[#94DB93] bg-[#FFFDFF] rounded-3xl relative -bottom-12 h-[22px] w-[86px] ">
            <a class=" font-bold text-[10px]" >JOIN</a>
            <!-- href="{{ route('subscribe', $event->id) }}`"  -->
        </button>
        
        @endif
        @endif
        
            <!-- 

        <button id="join-btn" onclick="window.location = `{{ route('show', $event->id) }}`" class=" text-[#94DB93] bg-[#FFFDFF] rounded-3xl relative -bottom-12 h-[22px] w-[86px] ">
            <a id="" class=" font-bold text-[10px]" >EXIT</a>
        </button> -->

        
        </div>
    </div>
    @endforeach

    </section>

<footer class="col-span-2 mt-4">
    <div class="flex justify-center mt-4">
        <hr class="w-80 bg-white">
    </div>
    <div class="gap-4 text-center text-gray-400 text-2xl p-4 flex flex-col justify-center items-center">
        <div class="space-x-6">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-twitter"></i>
        </div>
        <div>
            <p class="text-sm w-80">Etiam Massa tincidunt a sit tristique nec nibh cursus et viverra. Sit nec </p>
        </div>
    </div>
</footer>

<!-- POPUPS -->
<script>
    window.addEventListener
        ('DOMContentLoaded', () =>{
                const overlay = document.querySelector
                ('#overlay-delete')
                const deleteBtn = document.querySelector
                ('#delete-btn')

                deleteBtn.addEventListener ('click', () =>{
                overlay.classList.remove('hidden')
                })
                overlay.addEventListener ('click', () =>{
                overlay.classList.add('hidden')
                })
        })
</script>
@endsection