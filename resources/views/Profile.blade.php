@extends('SidebarLayout')
@section('title', 'Profile')
@section('content')
    <body>
        <div class="d-flex justify-content-center align-item-center pt-5 mt-5">
            <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
                <div class="card" style = "border-radius:20px">
                    <div class="card-body py-5 px-md-5"style="background: #27282F; border-radius: 20px">
                        <div class="text-white mt-2">
                            <h2>Profile</h2>
                        </div>
                        <form>
                            @csrf
                            <div class="text-white">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control text-white" style="background: #252A37" id="name" value="{{ $users->name }}"
                                        name="name" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Email</label>
                                    <input type="text" class="form-control text-white"style="background: #252A37" id="name" value="{{ $users->email }}"
                                        name="name" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Gender</label>
                                    <input type="text" class="form-control text-white" style="background: #252A37" id="name" value="{{ $users->gender }}"
                                        name="name" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Date of Birth</label>
                                    <input type="text" class="form-control text-white" style="background: #252A37" id="name" value="{{ $users->dob }}"
                                        name="name" readonly>
                                </div>
                                <div>
                                    <a href='/UpdateProfile/{{$users->id}}' class="btn btn-danger" style="width: 200px; height:50px">
                                        <h5>
                                            Update Profile
                                        </h5>
                                    </a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script> --}}
    </body>
@endsection

