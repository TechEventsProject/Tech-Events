

<!-- TEST FOR HIGHLIGHTED CAROUSEL  -->
<!-- TEST FOR HIGHLIGHTED CAROUSEL  -->
<!-- TEST FOR HIGHLIGHTED CAROUSEL  -->

@extends('layouts.app')
@section('content')

@foreach($highlighted_events as $event)
    <p class="text-white">
        {{$event->name}}
    </p>
@endforeach



@endsection

<!-- TEST FOR HIGHLIGHTED CAROUSEL  -->
<!-- TEST FOR HIGHLIGHTED CAROUSEL  -->
<!-- TEST FOR HIGHLIGHTED CAROUSEL  -->