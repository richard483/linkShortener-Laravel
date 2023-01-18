@extends('SidebarLayout')

@section('content')
    <header>
        <nav class="navbar navbar-expand-lg d-flex flex-row mt-3" style="background: #171923;">
            <form class="d-flex mx-auto form-inline">
                <input class="form-control mr-sm-2" style="width: 50rem" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>user</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Log out</a></li>
                </ul>
            </div>
        </nav>
        <hr>
    </header>
    <div>
        <h1 style="color: #E93B30">Link</h1>
        <button type="button" class="btn mb-2" style="background: #E93B30;">Filter</button>
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Date Created</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Top Performing</label>
        </div>
        <hr>
    </div>
    <div>
        <hr>
        @foreach ($shortlinks as $sl)
            <small class="text-muted">{{ $sl->created_at }} date</small>
            <p class="text-white">{{ $sl->url }} url</p>
            <p style="color: #71B2FF"><small>{{ short_url }} short</small></p>
            <hr>
        @endforeach
    </div>
@endsection