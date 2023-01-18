<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="/">Barbatos Shop</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="/category/{{$category->id}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        @if (Auth::user()!=null && Auth::user()->role == 'admin')
                        <a class="nav-link ms-1" href="/showproduct">Manage Product</a>
                        @endif
                    </li>
                </ul>
                <ul class="d-flex navbar-nav ">
                    @auth
                    @if (Auth::user()->role == 'admin')
                    <li class="nav-item dropdown dropstart">
                        <a class="nav-link dropdown-toggle" role="button" aria-expanded="false"
                            data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <form action="/logout" method="POST">
                                @csrf
                                <input class="dropdown-item" type="submit" value="Logout">
                            </form>
                            <a class="dropdown-item" href="/profile">Profile</a>
                        </ul>
                    </li>
                    @elseif (Auth::user()->role == 'member')
                    <li class="nav-item">
                        <a class="nav-link " href="/showcart" role="button" aria-expanded="false">
                            <img src="{{ asset('general/cart.svg') }}" alt="cart" width="24">
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false"
                            data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <form action="/logout" method="POST">
                                @csrf
                                <input class="dropdown-item" type="submit" value="Logout">
                            </form>
                            <a class="dropdown-item" href="/profile">Profile</a>
                            <a class="dropdown-item" href="/history">History</a>
                        </ul>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> 
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
    @endif --}}
    <div class="p-5" style="background: #171923; color: white; min-height: 100vh;">
        @yield('content')
    </div>
</body>
<footer>
    @yield('footer')
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>

</html>
