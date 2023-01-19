@extends('SidebarLayout')

@section('title', 'Home')

@section('content')
    <header>
        <nav class="navbar navbar-expand-lg d-flex flex-row mt-3" style="background: #171923;">
            <form class="d-flex mx-auto form-inline" action="/shortLink/search">
                @csrf
                <input class="form-control mr-sm-2" style="width: 50rem" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="dropdown mr-2">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>{{ Auth::user()->name }}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="/logout">Log out</a></li>
                </ul>
            </div>
        </nav>
        <hr>
    </header>
    <div>
        <h1 style="color: #E93B30">Link</h1>
    </div>
    <div>
        <hr>
        @foreach ($shortLinks as $sl)
            <P>{{ $sl->name }}</P>
            <small class="text-muted">{{ $sl->created_at }}</small>
            <p class="text-white">{{ $sl->url }}</p>
            <a href="{{ $sl->short_url }}" style="color: #71B2FF"><small>{{ $sl->short_url }}</small></a>
            <hr>
        @endforeach
    </div>
@endsection