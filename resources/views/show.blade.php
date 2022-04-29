@extends('layouts.app')

@section('content')

<div id="event" class="flex flex-col items-center col-span-2">
        <div id="speaker" class="relative font-['Montserrat'] uppercase font-bold text-[2rem] text-center mb-4">
                <h2 class="text-white bg-transparent">{{$event->speaker}}</h2>
                <h2 class="absolute top-[25%] z-[-1] stroke bg-transparent">{{$event->speaker}}</h2>
        </div>
        <section class="w-[85%] h-[22rem] bg-[url('{{ $event->image }}')] rounded-[105px] p-10 bg-cover bg-no-repeat relative bg-center flex items-center justify-center lg:w-[40%] lg:h-[40em]">
                @if(Auth::check() && Auth::user()->isAdmin())
                <div class="absolute -bottom-7 flex justify-center gap-2 w-full">
                        <form action="{{ route('delete', $event->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button id="delete-btn" class="bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 text-2xl leading-none" type="submit" onclick="return confirm('Do you want to delete {{ $event->name }}?')"><i class="fa-solid fa-trash"></i></button>
                                
                        </form>
                        <a href="{{ route('edit', $event->id) }}"><i class="fa-solid fa-pencil bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 text-2xl leading-none"></i></a>
                        <form method="post" action="{{ route('highlight') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $event->id }}" />
                                <button type="submit">
                                @if($event->highlighted)
                                <i class="fa-solid fa-star bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 text-2xl leading-none"></i>    
                                @else
                                <i class="fa-regular fa-star bg-[#FFFDFF] text-[#94DB93] rounded-full p-3 text-2xl leading-none"></i>
                                @endif
                                </button>
                        </form>

                </div>
                @endif
        </section>
        <div id="info" class="text-[#FFFDFF] w-[85%] lg:w-[60%] mt-10 mb-3">
                <h1 class="text-center font-bold font-['Poppins'] uppercase text-[20px] mb-3">{{ $event->name }}</h1>
                <p class="mb-3 font['Montserrat'] text-[14px] text-center">{{ $event->description }}
                <h3 class="font-bold font-['Poppins'] text-[18px] text-center">Place:<span class="font-['Montserrat'] text-[14px] font-medium"> {{$event->location}}</span></h3>
        </div>
        <div id="pills" class="grid grid-cols-3 gap-4 justify-around mb-4">
                <div class="flex flex-col items-center rounded-full bg-[#94DB93] text-white py-5 px-1">
                        <p class="font-['Poppins'] ">Event Date:</p>
                        <p class="font-['Poppins'] font-black">{{ date('d/m/Y', strtotime($event->date_and_time)) }}</p>
                </div>
                <div class="flex flex-col items-center rounded-full bg-[#94DB93] text-white py-5 px-1">
                        <p class="font-['Poppins'] ">Hour:</p>
                        <p class="font-['Poppins'] font-black">{{ date('H:m', strtotime($event->date_and_time)) }}</p>
                </div>
                <div class="flex flex-col items-center rounded-full bg-[#94DB93] text-white py-5 px-1">
                        <p class="font-['Poppins'] ">Capacity:</p>
                        <p class="font-['Poppins'] font-black">{{$users}}/{{$event->max_participants}}</p>
                </div>
        </div>
        @if(!Auth::user())
        <button onclick="window.location = `{{ route('login') }}`" class="bg-[#69C4A0] font-black font-['Montserrat'] text-white uppercase rounded-full py-2 px-10">
                Login
        </button>
        @else
                @if ($event->user->contains(Auth::user()->id))
                <button onclick="window.location = `{{ route('unsubscribe', $event->id) }}`" class="bg-[#69C4A0] font-black font-['Montserrat'] text-white uppercase rounded-full py-2 px-10">
                        Cancel Subscription
                </button>
                @else
                <button id="join-btn" onclick="window.location = `{{ route('subscribe', $event->id) }}`" class="bg-[#69C4A0] font-black font-['Montserrat'] text-white uppercase rounded-full py-2 px-10">
                        Join the Event
                </button>
        @endif 
        @endif 
        
<a href="{{URL::previous()}}" class="self-start mt-5">
        <i class="fa-solid fa-arrow-left text-white text-5xl p-4 col-span-2 flex self-end"></i>
</a>
</div>

@endsection