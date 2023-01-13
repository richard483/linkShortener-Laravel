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
    @font-face {
        font-family: "scandia-web";
        src: url("https://use.typekit.net/af/716155/00000000000000007735dd24/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff2"), url("https://use.typekit.net/af/716155/00000000000000007735dd24/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("woff"), url("https://use.typekit.net/af/716155/00000000000000007735dd24/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3") format("opentype");
        font-display: auto;
        font-style: normal;
        font-weight: 700;
        font-stretch: normal;
    }

    html,
    h1 {
        font-family: "scandia-web";
        background: #171923;

    }

    .navbar {
        padding: 1rem 6rem;
        height: 12vh;
        background: #171923;

    }

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

    .hero {
        background: #171923;
        gap: 2rem;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero h1 {
        color: rgb(231, 232, 242);
        font-size: 3rem;
        font-weight: 700;
        text-align: start;
    }

    .quote {
        text-align: start;
        justify-content: start;
    }

    .btn-primary {
        font-family: "scandia-web";
        background-color: #E93B30;
        border: none;
        font-size: 1.5rem
    }

    .btn-primary:hover {
        background-color: #282c3d !important;
    }
</style>
<nav class="navbar navbar-expand-lg">
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
    <section class="hero">
        <div class="quote">
            <h1>
                We arrived!
                <br>
                Easy to use URLs Shortener,
                <br>
                Generate QR Codes
                <br>
                and Many More Features!
                <br>
            </h1>
            <button type="button" class="btn btn-primary">Get Started!</button>
        </div>
        <div class="illust">
            <img src="{{asset('asset.svg')}}" alt="alt-logo" height="500">
        </div>
    </section>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
