@extends('layouts.app')
@section('content')


<div class="flex justify-center col-span-2">
        <h1 class="text-white font-['Montserrat'] text-3xl font-bold">My Profile</h1>
        <div>
            <p class="text-white">Name: {{$user->name}}</p>
            <p class="text-white">Email: {{$user->email}}</p>
        </div>
    </div>


@endsection