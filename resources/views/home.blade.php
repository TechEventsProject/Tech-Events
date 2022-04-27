@extends('layouts.app')
@section('content')
@if (Auth::check() && Auth::user()->isAdmin())
<a class="col-span-2" href="{{route('create')}}">
    <button type="submit">
        <p class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</p>
    </button>
</a>
@endif

<!---------- MASTERCLASS ---------->

    <div class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20 col-span-2 mt-5">
        <h2 id="top" class="m-0 absolute z-10 text-4xl md:text-7xl">MASTERCLASS </h2>
        <h2 id="bottom" class="absolute z-0 mt-3 text-4xl md:text-7xl">MASTERCLASS </h2>
    </div>

    <section class="grid grid-cols-2 col-span-2 gap-20 flex justify-items-center p-9 md:grid-cols-3 lg:grid-cols-4">
    @foreach ($events as $event)
    <div id="backgroundImage" class="font-[Montserrat] rounded-[38px] bg-cover bg-center bg-[url('{{$event->image}}')]
        flex flex-col text-[#FFFDFF] h-44 w-40 items-center text-center justify-center md:h-64 md:w-60">

        <section class="bg-black/60 h-full w-full flex justify-around items-center flex-col">

        <div class="relative -bottom-[14px]">
            <p class='text-sm font-semibold relative -bottom-[5px]'>{{ date('d/m/Y', strtotime($event->date_and_time)) }}</p>
            <p class="text-xl font-semibold">{{$event->speaker}}</p>
        </div>
        <div class="relative flex justify-center items-center bg-[#69C4A0] rounded-3xl relative -bottom-[17px] h-[30px] w-[144px] ">
            <a class="text-sm font-semibold align-middle leading-[12px]" href="{{route('show', ['id' => $event->id])}}">{{$event->name}}</a>
        </div>

        <!-----admin crud------>
        
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
                @if($event->highlighted)
                <a href="{{route('highlighted')}}">
                    <i class="fa-solid fa-star bg-[#FFFDFF] text-[#94DB93] rounded-full p-3  leading-none"></i>
                </a>
                @else
                <a href="{{route('highlighted')}}">
                    <i class="fa-regular fa-star bg-[#FFFDFF] text-[#94DB93] rounded-full p-3  leading-none"></i>
                </a>
                @endif
            </div>

<!----subscribe route/join button 'only for user and guest, but not needed for admin----->

        @else
        <div id="join-btn" class="flex items-center justify-center text-[#94DB93] bg-[#FFFDFF] rounded-3xl relative -bottom-12 h-[22px] w-[86px] md:h-10 w-32 -bottom-20">
            <a id="" class="font-bold text-[10px] md:text-sm" href="" >JOIN</a>
        </div>
        @endif
        </section>
    </div>
    @endforeach
    </section>


<!------------ PAST EVENTS ---------->

    <div class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20 col-span-2 mt-5 w-full">
        <h2 id="top" class="m-0 absolute z-10 text-4xl md:text-7xl">PAST EVENTS</h2>
        <h2 id="bottom" class="absolute z-0 mt-3 text-4xl md:text-7xl">PAST EVENTS</h2>
    </div>

    <section class="grid grid-cols-2 col-span-2 gap-20 flex justify-items-center p-9 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($past_events as $past_event)
        <div id="backgroundImage" class="font-[Montserrat] rounded-[38px] bg-cover bg-center bg-[url('{{$past_event->image}}')]
            flex flex-col text-[#FFFDFF] h-44 w-40 items-center text-center justify-center md:h-64 md:w-60">

            <section class="bg-black/60 h-full w-full flex justify-around items-center flex-col">

            <div class="relative -bottom-[14px]">
                <p class='text-sm font-semibold relative -bottom-[5px]'>{{ date('d/m/Y', strtotime($past_event->date_and_time)) }}</p>
                <p class="text-xl font-semibold">{{$past_event->speaker}}</p>
            </div>
            <div class="relative flex justify-center items-center bg-[#69C4A0] rounded-3xl relative -bottom-[17px] h-[30px] w-[144px] ">
                <a class="text-sm font-semibold align-middle leading-[12px]" href="{{route('show', ['id' => $past_event->id])}}">{{$past_event->name}}</a>
            </div>
    
<!--------admin crud------->

            @if(Auth::check() && Auth::user()->isAdmin())
            <div class=" flex justify-center gap-2 relative -bottom-14 ">
                <form action="{{route('delete', ['id' => $past_event->id])}}" method="post" onclick="return confirm('Are you sure?')">
                @method('delete')
                @csrf
                    <button type="submit">
                        <i class="fa-solid fa-trash bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 leading-none"></i>
                    </button>
                </form>
                <a href="{{route('edit', ['id' => $past_event->id])}}">
                    <i class="fa-solid fa-pencil bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 leading-none"></i>
                </a>
                @if($past_event->highlighted)
                <a href="{{route('highlighted')}}">
                    <i class="fa-solid fa-star bg-[#FFFDFF] text-[#94DB93] rounded-full p-3  leading-none"></i>
                </a>
                @else
                <a href="{{route('highlighted')}}">
                    <i class="fa-regular fa-star bg-[#FFFDFF] text-[#94DB93] rounded-full p-3  leading-none"></i>
                </a>
                @endif
                </div>
    
<!------subscribe route/join button 'only for user and guest, but not needed for admin'----->

            @else
            <div id="join-btn" class="flex items-center justify-center text-[#94DB93] bg-[#FFFDFF] rounded-3xl relative -bottom-12 h-[22px] w-[86px] md:h-10 w-32 -bottom-20">
                <a id="" class="font-bold text-[10px] md:text-sm" href="" >JOIN</a>
            </div>
            @endif
            </section>
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
    // window.addEventListener
    // ('DOMContentLoaded', () =>{
    //     const overlay = document.querySelector
    //     ('#overlay')
    //     const joinBtn = document.querySelector
    //     ('#join-btn')
    //     joinBtn.addEventListener ('click', () =>{
    //         overlay.classList.remove('hidden')
    //     })
    //     overlay.addEventListener ('click', () =>{
    //         overlay.classList.add('hidden')
    //     })
    // })
</script>
@endsection