<!DOCTYPE html>
<html>


<!--Um zu schauen ob der Header und footer transparent sind-->
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1 {font-family: "Raleway", sans-serif}
        body, html {height: 100%}
        .bgimg {
            background-image: url('https://images5.alphacoders.com/109/1099191.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <header>
        <ul>
            <li style="float:left"><a href="/"><img src="{{ asset('images/icon.png') }}"><br>Home </a></li>
            <li class="center"><a href="/info">Info</a></li>
            <li class="center"><a href="/team">Team</a></li>
            <li style="float:right"><a href="/sign-in"><img src="{{ asset('images/icon.png') }}"></a></li>
        </ul>
    </header>

    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge">
            Logo
        </div>
        <div class="w3-display-middle">
            <h1 class="w3-jumbo w3-animate-top">COMING SOON</h1>
            <hr class="w3-border-grey" style="margin:auto;width:40%">
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-item">
                gamehelper@info.com
            </div>
            <div class="footer-item">
                FAQ
            </div>
            <div class="footer-item">
                Reviews
            </div>
            <div class="footer-item">
                Terms & Conditions
            </div>
            <div class="footer-item">
                Privacy Policy
            </div>
            <div class="footer-item">
                Socials
            </div>
            <div class="footer-item">
                <img src="{{asset('images/instagram-icon.png')}}">
            </div>
            <div class="footer-item">
                <img src="{{asset('images/twitter-icon.png')}}">
            </div>
            <div class="footer-item">
                <img src="{{asset('images/discord-icon.png')}}">
            </div>
        </div>
    </footer>
</body>


</html>
