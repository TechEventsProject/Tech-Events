@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4 items-center col-span-2">
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
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
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
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-white">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>
    </section>
    </form>
    @endsection
    