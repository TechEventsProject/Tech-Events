@extends('layouts.loginregister')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4 items-center col-span-2 h-max mt-6">
    @csrf
    <section class="flex flex-col gap-4 items-center w-72 h-max bg-[#69C4A0] rounded-3xl p-4">
        <li class="text-9xl list-none"><i class="fa-solid fa-circle-user bg-[#94DB93] text-white rounded-full"></i></li>
        <div>
            <div>
                <input placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror text-center rounded-3xl text-center w-64 h-11" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>
        <div>
            <div>
                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror text-center rounded-3xl text-center w-64 h-11" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <div>
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label text-white" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <div>
            <button type="submit" class="rounded-3xl bg-[#94DB93] text-white font-bold w-36 h-9">
                {{ __('Sign In') }}
            </button>
        </div>
        <div>
            <!-- @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-white">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif -->
        </div>
    </section>
    </form>
    <div class="flex flex-col text-white items-center justify-start col-span-2 mt-4">
        <p class="text-white">Unregistered?</p>
        <a href="{{route('register')}}">
            <p class="font-bold underline-offset-1 text-white">REGISTER HERE</p>
        </a>
    </div>
    <a href="{{route('home')}}" class="absolute bottom-0 left-0">
        <i class="fa-solid fa-arrow-left text-white text-5xl p-4 col-span-2 flex self-end"></i>
    </a>
@endsection
    