<!DOCTYPE html>
<html>

<style>
    @font-face {
        font-family: "scandia-line-web";
        src: url("https://use.typekit.net/af/3cdb9c/00000000000000007735db09/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff2"),
            url("https://use.typekit.net/af/3cdb9c/00000000000000007735db09/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("woff"),
            url("https://use.typekit.net/af/3cdb9c/00000000000000007735db09/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3") format("opentype");
        font-display: auto;
        font-style: normal;
        font-weight: 400;
        font-stretch: normal;
    }

    * {
        font-family: "scandia-web";
    }
</style>

<head>
    <title>Welcome to Lot.Nest</title>
</head>

<body>
    <p>Welcome to Lot.Nest, {{$user->name}}</p>
    <p>
        Get ready for the best link shortener experience!
        <br>We hope you could enjoy your experience with us!
        <br>You can visit this page for starters: <a href="{{route('index')}}">Lot.Nest</a>
        <br>
        <br>Best Regards, Lot.Nest Team
    </p>
    <footer style="background: rgb(228, 219, 197)">Mail host with <a href="https://www.mailgun.com/"
            style="font-size: 0.5rem">Mailgun</a> by <a href="https://www.nephren.xyz/">nephren</a> :D</footer>

</body>

</html>
