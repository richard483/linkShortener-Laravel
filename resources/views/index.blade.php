<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lot.Nest - Link Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<div id="particles-js"></div>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand me-3" href="#"><img src="{{asset('lot-nest-logo.png')}}" alt="alt-logo" height="50"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#why-us">Why Us?</a>
                </li>
            </ul>
            <ul class="d-flex navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Sign Up Free</a>
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
                and Many Great Features!
                <br>
            </h1>
            <a class="btn btn-primary" href="/register">Get Started!</a>
        </div>
        <div class="illust">
            <img src="{{asset('asset.svg')}}" alt="alt-logo" height="500">
        </div>
    </section>

    <div id="separator-line">
        <img class="mb-3" src="{{asset('assets/scroll-down.svg')}}" alt="arrow-down" style="width: 1.5rem">
        <h6>Scroll down</h6>
    </div>

    <section class="our-partners">
        <h2 class="mb-5">Our Partners</h2>
        <div class="d-flex justify-content-around mb-3" style="gap: 1.5rem">
            <div class="brand-bg">
                <img src="{{asset('assets/partners/disney.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/st-jude.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/twitch.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/warner-bros.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/wwe.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/bankrate.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/the-new-york-times.png')}}" alt="" style="height: 2rem">
            </div>
        </div>
        <div class="d-flex justify-content-around" style="gap: 2rem">
            <div class="brand-bg">
                <img src="{{asset('assets/partners/mailgun.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/datacamp.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/mongo.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/vscode.png')}}" alt="" style="height: 2rem">
            </div>
            <div class="brand-bg">
                <img src="{{asset('assets/partners/codespaces.png')}}" alt="" style="height: 2rem">
            </div>
        </div>
    </section>

    <section class="why-us" id="why-us">
        <h2 class="mb-5">Why Us?</h2>
        <div class="d-flex justify-content-center mb-3" style="gap: 2rem">
            <div class="why-contain text-center ">
                <img src="{{asset('assets/easy.svg')}}" alt="" style="width: 16rem">
                <h3 class="mt-5">Easy to use</h3>
            </div>
            <div class="why-contain text-center">
                <img src="{{asset('assets/premium features.svg')}}" alt="" style="width: 16rem">
                <h3 class="mt-5">Fully protected</h3>
            </div>
            <div class="why-contain text-center">
                <img src="{{asset('assets/save-mone.svg')}}" alt="" style="width: 16rem">
                <h3 class="mt-5">Save more<br>money!</h3>
            </div>
        </div>
    </section>

    <section class="about-us" id="about-us">
        <h3 class="mb-5">About Us</h3>
        <p style="font-family: 'scandia-line-web'">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nobis
            excepturi non asperiores, doloremque ex
            accusantium alias totam, libero distinctio eum voluptatum inventore, vitae dolorum! Enim dolore id facilis,
            nemo recusandae consectetur suscipit vero eaque iste? Temporibus obcaecati blanditiis dolorem, dicta est
            enim qui fuga illo excepturi odio. Voluptatem dicta molestiae eos veritatis. Aliquam reprehenderit ipsa
            officia autem omnis animi, minima accusamus praesentium rem, ipsum consequatur voluptas neque? Eius eum,
            illum sunt illo deleniti hic rerum magni voluptas vitae corrupti, sit sequi culpa ab possimus earum magnam
            mollitia ea doloribus, ut commodi corporis perferendis! Provident itaque ullam sit amet est accusantium eum
            qui fugiat excepturi architecto veritatis, numquam magnam sunt deserunt porro aspernatur nobis. Incidunt
            officiis necessitatibus fuga, esse repellendus expedita dolorum sapiente, culpa nobis maxime, aliquid
            similique?</p>

    </section>
</body>

<footer>
    <div class=" section-content">

        <section class="left-footer">
            <img class="mb-3" src="{{asset('lot-nest-logo.png')}}" alt="" style="width: 12rem">
            <p style="font-family: 'scandia-line-web'">Lot Nest, Inc.<br>1234 Main Street<br>Anytown,
                USA<br>123-456-7890
            </p>
        </section>
        {{-- <section class="right-footer">
            <h3>This Web built using:</h3>
        </section> --}}
    </div>
    <p class="credit">©2023 Lot.Nest All Right Reserved.<br>Create with ❤ by beenuz Lot.Nest</p>
</footer>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="{{asset('js/lib/particles.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>


</html>
