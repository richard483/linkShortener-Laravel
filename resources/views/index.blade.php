<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lot.Nest - Link Shortener</title>
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

    @font-face {
        font-family: "scandia-line-web";
        src: url("https://use.typekit.net/af/3cdb9c/00000000000000007735db09/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"), url("https://use.typekit.net/af/3cdb9c/00000000000000007735db09/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"), url("https://use.typekit.net/af/3cdb9c/00000000000000007735db09/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
        font-display: auto;
        font-style: normal;
        font-weight: 400;
        font-stretch: normal;
    }

    * {
        font-family: "scandia-web";
    }

    nav {
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        border: 1px solid rgba(255, 255, 255, 0.021);
    }

    .navbar {
        padding: 1rem 6rem;
        height: 12vh;
    }

    .nav-link {
        color: #E93B30;
        display: inline-block;
        position: relative;
        font-weight: 500
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
        gap: 2rem;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 75vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 2rem;
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
        background-color: #E93B30;
        border: none;
        font-size: 1.5rem
    }

    .btn-primary:hover {
        background-color: #282c3d !important;
    }

    #particles-js {
        width: 100%;
        height: 150rem;
        background-color: #171923;
        background-image: url('');
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        position: absolute;
    }

    .illust,
    .quote,
    .contain {
        z-index: 1;

    }

    .why-us {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 0 5rem 5rem;
    }

    .why-contain {
        background: rgba(255, 255, 255, 0.4);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 2rem;
    }

    .why-contain h3 {
        color: #E7E8F2;
        font-size: 2rem;
        font-weight: 700;
    }

    .our-partners {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(4px);
        margin: 0 10rem 10rem;
    }

    .brand-bg {
        padding: 1rem 2rem;
        backdrop-filter: blur(2px);
        background-color: rgba(231, 232, 242, 0.503);
        border-radius: 0.5rem;
    }

    .our-partners h2,
    .why-us h2 {
        color: #E7E8F2;
        font-size: 3rem;
    }

    #separator-line {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 5rem;
    }

    #separator-line h6 {
        color: #E7E8F2;
    }

    .about-us {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        background: rgba(23, 25, 35, 0.25);
        padding: 2rem 5rem 5rem;
    }

    .about-us h3,
    .about-us p {
        color: #E7E8F2;
        text-align: center;
    }

    footer {
        position: relative;
        display: flex;
        background-color: #252A37;
        justify-content: center;
        align-items: center;
        flex-direction: column;

    }

    footer p {
        margin: 0;
        padding: 0;
        font-family: 'scandia-line-web';
        color: #E7E8F2;

    }

    .section-content {
        width: 100%;
        background-color: #252A37;
        color: #E7E8F2;
        padding: 2rem 5rem;
        position: relative;
        display: flex;
        justify-content: space-between
    }

    .credit {
        font-size: 0.75rem;
        margin-bottom: 1rem;
    }
</style>
<div id="particles-js"></div>
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
                and Many Great Features!
                <br>
            </h1>
            <a class="btn btn-primary" href="https://www.youtube.com/">Get Started!</a>
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

    <section class="why-us">
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

    <section class="about-us">
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
