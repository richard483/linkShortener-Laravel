@extends('template')

@section('title', 'Login')

@section('content')
<style>
    .field-input {
        background: #252A37;
        border: none;
        border-radius: 4px;
        caret-color: white;
        color: white;
        padding: 5px;
        width: 100%;
    }

    .field-input:focus {
        outline: 2px solid #E93B30;
    }

    .check-input {
        background-color: white;
    }

    .check-input:checked {
        background-color: #E93B30;
    }

    .submit {
        background: #E93B30;
        border: none;
        padding: 5px 15px;
        border-radius: 4px;
        width: 100%;
    }

    .submit:hover {
        background: #b93127;
    }

</style>

<section style="width: 50%; display: flex; flex-direction: column; margin: auto; justify-content: center; align-items: center;">
    <span style="font-size: 5vw;">Login Lot<span style="color: #E93B30">.</span>Nest</span>
    <form action="{{route('login')}}" method="POST" class="mt-3">
        @csrf
        <div>
            <label for="email">Email<span class="text-danger">*</span></label>
            <br>
            <input type="text" id="email" name="email" placeholder="Enter your email" class="field-input" autofocus value={{ Cookie::get('email_cookie')
                !=null ? Cookie::get('email_cookie') : old('email') }}>
            <label for="email" class="text-muted">Maximum 255 characters</label>
        </div>
        <div>
            <label for="password">Password<span class="text-danger">*</span></label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" class="field-input" value={{
                Cookie::get('password_cookie') !=null ? Cookie::get('password_cookie') : '' }}>
        </div>
        <br>
        <div class="form-check form-switch">
            <input class="form-check-input check-input" type="checkbox" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @elseif (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <button type="submit" value="Login" class="submit">Login</button>
        <br><br>
        <span style="text-align: end;">Doesn't have an account? <a href="/register">Register here!</a></span>
    </form>
</section>

@endsection
