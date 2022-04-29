@extends('layouts.loginregister')

@section('content')
<form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4 items-center col-span-2">
    @csrf
    <section class="flex flex-col gap-4 items-center w-72 h-max bg-[#69C4A0] rounded-3xl p-4">
        <li class="text-9xl list-none"><i class="fa-solid fa-circle-user bg-[#94DB93] text-white rounded-full"></i></li>
            <div>
                <input placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror text-center rounded-3xl text-center w-64 h-11" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <input placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror text-center rounded-3xl text-center w-64 h-11" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror text-center rounded-3xl text-center w-64 h-11" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control text-center rounded-3xl text-center w-64 h-11" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div>
                <button type="submit" class="rounded-3xl bg-[#94DB93] text-white font-bold w-36 h-9">
                    {{ __('Register') }}
                </button>
            </div>
    </section>
</form>
    <div class="flex flex-col text-white items-center justify-start col-span-2">
        <p class="text-white">Already have an account?</p>
        <a href="{{route('login')}}">
            <p class="font-bold underline-offset-1 text-white">LOG IN</p>
        </a>
    </div>
    <a href="{{URL::previous()}}" class="absolute bottom-0 left-0">
        <i class="fa-solid fa-arrow-left text-white text-5xl p-4 col-span-2 flex self-end"></i>
    </a>
@endsection
