<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LotNes - Link Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .nav-link {
        color: #E93B30;
        display: inline-block;
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #E7E8F2;
        transform-origin: bottom right;
        transition: transform 0.25s ease-out;
    }

    .nav-link:hover::after {
        color: #E7E8F2;
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    .nav-link:hover {
        color: #E7E8F2;
    }
</style>
<nav class="navbar navbar-expand-lg" style="background: #171923">
    <div class="container-fluid">
        <a class="navbar-brand me-3" href="#"><img src="{{asset('lot-nest-logo.png')}}" alt="alt-logo" height="50"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Why Us?</a>
                </li>
            </ul>
            <ul class="d-flex navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Up Free</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<body>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
