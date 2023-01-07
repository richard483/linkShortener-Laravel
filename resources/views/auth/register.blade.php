@extends('template')

@section('title', 'Register')

@section('content')
Register:
<form action="{{route('register')}}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" value={{old('name') }}>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter your email" value={{old('email') }}>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
    </div>
    <div>
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password">
    </div>
    <div>
        <label for="gender">Gender</label>
        <br>
        <input type="radio" id="gender-male" name="gender" value='male'>
        <label for="gender-male">Male</label>
        <br>
        <input type="radio" id="gender-female" name="gender" value='female'>
        <label for="gender-female">Female</label>
    </div>
    <div>
        <label for="date">Date of birth</label>
        <br>
        <input type="date" id="date" name="date">
    </div>

    <button type="submit" value="Register">Register</button>

    <div>Already have an account? <a href="/login">Login here!</a></div>
</form>

@endsection
