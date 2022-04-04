@extends ('layouts.app')
@section('content')

<form action="{{route('store')}}" method="post">
    @csrf
    <div>
        <span>Name</span>
        <input type="text" name="name">
        <span>Description</span>
        <input type="text" name="description">
        <button type="submit" onclick="return confirm('Confirm?')">Validate</button>
        <button type="button" onclick="{{ route('home') }}">Cancel</button>
    </div>

</form>

@endsection
