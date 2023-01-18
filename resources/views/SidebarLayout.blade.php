<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
</head>
<body>
    <div class="d-flex flex-nowrap w-auto">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; background: #171923; color: white; min-height: 100vh;">
            <a href="/" class="d-flex align-items-center mx-auto mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <img src="{{asset('lot-nest-logo.png')}}" alt="alt-logo" height="50">
            </a>
            <li class="d-flex align-items-center mt-3" style="list-style:none;">
                <a href="/shortLink">
                    <button type="button" class="btn btn-lg" style="background: #E93B30; width:100%">Create New</button>
                </a>
            </li>
            <hr>
            <div class="mb-auto">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/home" class="nav-link text-black" style="background: #E93B30;" aria-current="page">
                            <img src="{{asset('Logo link.png')}}"class="bi pe-none me-2">
                            Home
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="/Profile" class="nav-link text-black" style="background: #E93B30;">
                            <img src="{{asset('Settings-icon.png')}}"class="bi pe-none me-2">
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid" style="background: #171923; color: white; min-height: 100vh;">
            @yield('content')
        </div>
    </div>
</body>
<footer>
    @yield('footer')
</footer>
</html>