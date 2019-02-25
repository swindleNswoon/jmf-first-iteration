<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jack Mattsson Foundation</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pangolin" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand logo-link" href="/">
        <img class="d-inline-block" src={{asset('img/jmfLogoSmall2.png')}}>
        Jack Mattsson Foundation
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link underline" href="/" id="news">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link underline" href="/news" id="news">News/Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link underline" href="/about" id="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/donate" id="donate">Donate</a>
            </li>
        </ul>

    </div>
</nav>
@yield('content')

    <footer>
        <div class="container">
            <hr>
        </div>
        <div class="container">
            <p class="smaller">The Jack Mattsson Foundation is an IRS approved 501(c)(3) non-profit organization (EIN: 82-5083706)</p>
            <p class="smaller">Contact Info:</p>
            <ul>
                <li><p class="smaller">Email: jackmattssonfoundation@gmail.com</p></li>
                <li><p class="smaller">Tel: (201) 444 4117</p> </li>
                <li><p class="smaller">Address:</p>
                    <p class="smaller">The Jack Mattsson Foundation <br>224 Pinelynn Rd <br>Glen Rock, NJ 07452</p></li>
            </ul>
        </div>
        <div class="container">
            <p><small>&copy; 2018-<?php echo date("Y"); ?> Jack Mattsson Foundation, All rights reserved.</small></p>
            <p><small>Site Development by Brian Lynch</small></p>
        </div>
    </footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
