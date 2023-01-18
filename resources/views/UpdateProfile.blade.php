<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>UpdateProfile</title>
</head>

<body>
    <div class="d-flex justify-content-center align-item-center pt-5 mt-5">
        <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
            <div class="card">
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
                       
                                    <input type="radio" id="gender-male" name="gender" value="{{ $users->gender }}"
                                        class="check-input">
                                    <label for="gender-male">Male</label>
                                    <br>
                                    <input type="radio" id="gender-female" name="gender" value="{{ $users->gender }}"
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
