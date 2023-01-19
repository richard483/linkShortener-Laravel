@extends('SidebarLayout')
@section('title', 'Update')

@section('content')
        <body>
        <div class="d-flex justify-content-center align-item-center pt-5 mt-5">
            <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
                <div class="card" style ="border-radius:20px">
                    <div class="card-body py-5 px-md-5" style="background: #27282F; border-radius: 20px">
                        <div class="text-white mt-2">
                            <h2>Update Profile</h2>
                        </div>
                        <form action="/UpdateProfile/{{ $users->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="text-white">
                                <!-- Name input -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $users->name }}"
                                    name="name">
                            </div>
                            {{-- Email Input --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" value="{{ $users->email }}"
                                    name="email">
                            </div>

                            <!-- Gender Select -->
                            <div class="mb-3">
                                        <input type="radio" id="gender-male" name="gender" value="male" {{ $users->gender == 'male'? "checked":""}}
                                            class="check-input">
                                        <label for="gender-male">Male</label>
                                        <br>
                                        <input type="radio" id="gender-female" name="gender" value="female" {{ $users->gender == 'female'? "checked":""}}
                                            class="check-input">
                                        <label for="gender-female">Female</label>
                            </div>

                            <!-- Date of Birth input -->
                            <div class="mb-3">
                                <label for="date">Date of birth<span class="text-danger">*</span></label>
                                <br>
                                <input type="date" id="date" name="date" value="{{$users->dob}}" class="form-control calender-black field-input">
                            </div>

                            <!-- Update button -->
                            <button type="submit" class="btn btn-lg btn-danger register-btn mb-4">
                                Update
                            </button>
                            <div>
                                <a href="/Profile">
                                    Cancel
                                </a>
                            </div>
                            </div>
                        
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

