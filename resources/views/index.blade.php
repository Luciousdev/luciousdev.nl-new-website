<?php

$heroText = "LUCY PUYENBROEK";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucy Puyenbroek - Desktop</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <script src="{{ asset('js/aos.js') }}"></script>

    <meta name="title" content="Mika Linux" />
    <meta name="description" content="My name is Lucy, I'm an fullstack software developer located in the Netherlands. On my portfolio website I'll show you my journey and what I have to offer." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://luciousdev.nl" />
    <meta property="og:title" content="Lucy Puyenbroek" />
    <meta property="og:description" content="My name is Lucy, I'm an fullstack software developer located in the Netherlands. On my portfolio website I'll show you my journey and what I have to offer." />
    <meta property="og:image" content="https://examples.luciousdev.nl/images/mikalinuxlogo.png" />
    <meta name="theme-color" content="#F34B6C">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://luciousdev.nl" />
    <meta property="twitter:title" content="Lucy Puyenbroek" />
    <meta property="twitter:description" content="My name is Lucy, I'm an fullstack software developer located in the Netherlands. On my portfolio website I'll show you my journey and what I have to offer." />
    <meta property="twitter:image" content="https://examples.luciousdev.nl/images/mikalinuxlogo.png" />
</head>
<body>

    <div id="blob"></div>
    <div class="blur">
        @include('components.navbar')
        @include('components.hero')

        <section>
            <div class="container containerAbout">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">e</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col" data-aos="fade-down">
                        <p class="text-center introText">My name is Lucy, I'm an fullstack software developer located in the Netherlands. On my portfolio website I'll show you my journey and what I have to offer.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-center">
                            <a href="" class="circle-button">
                                <span class="arrow">🡣</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                </div>
            </div>
        </section>

        {{-- FROM -> TO --}}
        <div class="container-fluid">

        </div>
    </div>

    <span class="scrollbar"><span class="scrollbar-thumb" style="height: 374.398px; transform: translate3d(0px, 562.19px, 0px);"></span></span>


    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
