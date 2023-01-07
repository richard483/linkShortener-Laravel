@extends('template')

@section('title', 'Login')

@section('content')
Login:
<form action="{{route('login')}}" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter your email" value={{ Cookie::get('email_cookie')
            !=null ? Cookie::get('email_cookie') : old('email') }}>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" value={{
            Cookie::get('password_cookie') !=null ? Cookie::get('password_cookie') : '' }}>
    </div>
    <div>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label>
    </div>
    <button type="submit" value="Login">Login</button>

    <div>Doesn't have an account? <a href="/register">Register here!</a></div>
</form>

@endsection
