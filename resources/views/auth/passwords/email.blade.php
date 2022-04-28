@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-4 items-center col-span-2 h-max mt-6">
    @csrf
    <section class="flex flex-col justify-center gap-4 items-center w-72 h-72 bg-[#69C4A0] rounded-3xl p-4">
            <h1 class="font-bold text-white text-lg">Reset your E-mail</h1>
            <div>
                <div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror form-control @error('password') is-invalid @enderror text-center rounded-3xl text-center w-64 h-11" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail Address" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div>
                <div>
                    <button type="submit" class="rounded-3xl bg-[#94DB93] text-white font-bold w-36 h-9">
                        {{ __('Send Reset Link') }}
                    </button>
                </div>
            </div>
        </section>
    </form>
@endsection
