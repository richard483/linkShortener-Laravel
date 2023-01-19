@extends('template')

@section('title', 'Register')

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
        accent-color: white;
    }

    .check-input:checked {
        accent-color: #E93B30;
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
<section
    style="width: 50%; display: flex; flex-direction: column; margin: auto; justify-content: center; align-items: center;">
    <span style="font-size: 5vw;">Sign Up Lot<span style="color: #E93B30">.</span>Nest</span>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div>
            <label for="name">Name<span class="text-danger">*</span></label>
            <input type="text" id="name" name="name" placeholder="Enter your name" autofocus class="field-input"
                value={{old('name') }}>
            <label for="name" class="text-muted">Minimum 5 characters</label>
        </div>
        <div>
            <label for="email">Email<span class="text-danger">*</span></label>
            <input type="text" id="email" name="email" placeholder="Enter your email" class="field-input"
                value={{old('email') }}>
            <label for="email" class="text-muted">Maximum 255 characters</label>
        </div>
        <div>
            <label for="password">Password<span class="text-danger">*</span></label>
            <input type="password" id="password" name="password" placeholder="Enter your password" class="field-input">
            <label for="password" class="text-muted">Minimum 8 characters</label>
        </div>
        <div>
            <label for="confirmPassword">Confirm Password<span class="text-danger">*</span></label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password"
                class="field-input">
        </div>
        <div>
            <label for="gender">Gender<span class="text-danger">*</span></label>
            <br>
            <input type="radio" id="gender-male" name="gender" value='male' class="check-input">
            <label for="gender-male">Male</label>
            <br>
            <input type="radio" id="gender-female" name="gender" value='female' class="check-input">
            <label for="gender-female">Female</label>
        </div>
        <div>
            <label for="date">Date of birth<span class="text-danger">*</span></label>
            <br>
            <input type="date" id="date" name="date" class="form-control calender-black field-input">
        </div>

        @if ($errors->any())
        <br>
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

        <br>
        <button type="submit" value="Register" class="submit" onclick="(submitForm(this))">Register</button>
        <br> <br>
        <div>Already have an account? <a href="/login">Login here!</a></div>
</section>
<script>
    function submitData(e){
        return new Promise((resolve, reject)=>{
            e.form.submit();
        });
    }
    async function submitForm (e) {
        e.disabled = true;
        let submit = await submitData(e);
    }
</script>

@endsection
