@extends('SidebarLayout')
@section('title', 'Profile')
@section('content')

<body>
    <div class="d-flex justify-content-center align-item-center pt-5 mt-5">
        <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
            <div class="card" style="border-radius:20px">
                <div class="card-body py-5 px-md-5" style="background: #27282F; border-radius: 20px">
                    <div class="text-white mt-2">
                        <h2>Profile</h2>
                    </div>
                    <form>
                        @csrf
                        <div class="text-white">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control text-white" style="background: #252A37" id="name"
                                    value="{{ $users->name }}" name="name" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Email</label>
                                <input type="text" class="form-control text-white" style="background: #252A37" id="name"
                                    value="{{ $users->email }}" name="name" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Gender</label>
                                <input type="text" class="form-control text-white" style="background: #252A37" id="name"
                                    value="{{ $users->gender }}" name="name" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Date of Birth</label>
                                <input type="text" class="form-control text-white" style="background: #252A37" id="name"
                                    value="{{ $users->dob }}" name="name" readonly>
                            </div>
                            <div>
                                <a href='/UpdateProfile/{{$users->id}}' class="btn btn-danger"
                                    style="width: 200px; height:50px">
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
</body>
@endsection
