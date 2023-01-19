@extends('SidebarLayout')
@section('title', $shortLink->name.' Details')
@section('content')

<body>
    <div class="d-flex justify-content-center align-item-center pt-5 mt-5">
        <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
            <div class="card" style="border-radius:20px">
                <div class="card-body py-5 px-md-5" style="background: #27282F; border-radius: 20px">
                    <div class="text-white mt-2">
                        <h2 class="mb-3">Short Link Details</h2>
                    </div>
                    <form action="{{route('shortLink.update', $shortLink->id)}}" method="POST">
                        @csrf
                        <div class="text-white">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control text-white" style="background: #252A37" id="name"
                                    value="{{ $shortLink->name }}" name="name" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="shortURL" class="form-label">Short URL</label>
                                <input type="text" class="form-control text-white" style="background: #252A37"
                                    id="shortURL" value="{{ $shortLink->short_url }}" name="short_url" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="url" class="form-label">Long URL</label>
                                <input type="text" class="form-control text-white" style="background: #252A37" id="url"
                                    value="{{ $shortLink->url }}" name="url">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description</label>
                                <textarea class="form-control" id="desc" name="description"
                                    style="height: 16rem; background: #252A37; color: white">{{$shortLink->description}}</textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-danger" style="padding: 0.5rem 1rem"
                                    onclick="alert('Updated ShortLink Information!') ">
                                    <h5>
                                        Update Changes
                                    </h5>
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
@endsection
