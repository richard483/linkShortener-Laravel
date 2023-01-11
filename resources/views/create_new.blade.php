@extends('template')

@section('title', 'Login')

@section('content')
Create:
<form action="{{route('shortLink.store')}}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your url name">
    </div>
    <div>
        <label for="url">Long Url</label>
        <input type="text" id="url" name="url" placeholder="Enter your long url">
    </div>
    <div>
        <label for="description">Description (optional)</label>
        <input type="text" id="description" name="description" placeholder="Enter your desctiption">
    </div>

    <button type="submit">Create</button>

</form>

@endsection
