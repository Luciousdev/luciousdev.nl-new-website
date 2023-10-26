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
                    <div class="col" data-aos="fade-down" data-aos-delay="150">
                        <p class="text-center">
                            <a href="#start-story" class="circle-button">
                                <span class="arrow">🡣</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- FROM -> TO --}}
        <div class="container-fluid extra-space-big"></div>
        {{-- Introduction header --}}
        <div class="container-fluid section-header">
            <div class="row">
                <div class="col" data-aos="fade-up">
                    <h2 class="text-center">My Journey</h2>
                </div>
            </div>
        </div>
        {{-- AC --}}
        <div class="container-fluid" id="start-story">
            <div class="row">
                <div class="col-md-6 text-center" data-aos="zoom-in-right">
                    <h2>Amstelveen College <span class="h2-date-span">(2018-2022)</span></h2>
                    <p class="first-text">For my middle school I went to Amstelveen College, there I did HAVO for 4 years until eventually going to MBO. To study what I really love doing, writing code.</p>
                </div>
                <div class="col-md-6 right-image-container" data-aos="zoom-in-left">
                    <a href="https://www.webmd.com/sex-relationships/what-is-transgender" target="_blank">
                        <img src="{{ asset('images/amstelveencollege.jpg') }}" alt="Transgender flag" class="right-image-rotate-right">
                    </a>
                </div>
            </div>
        </div>

        {{-- Me finding out im trans --}}
        <div class="container-fluid extra-space-medium"></div>
        <div class="container-fluid">
            <div class="row" data-aos="zoom-in-right" data-aos-delay="150">
                <div class="col-md-6 text-center">
                    <h2>Finding myself</h2>
                    <p class="first-text">During middle school I was really trying to find myself in this world. Who I really am, from hobbies to how I am as a person. During this time I slowly came out as trans, and now I'm an proud trans woman going happy through life. As my true self.</p>
                </div>
                <div class="col-md-6 right-image-container" data-aos="zoom-in-left" data-aos-delay="150">
                    <a href="https://amstelveencollege.nl/" target="_blank">
                        <img src="{{ asset('images/transflag.webp') }}" alt="Amstelveen College" class="right-image-rotate-left">
                    </a>
                </div>
            </div>
        </div>

        {{-- ROC --}}

    </div>

    <span class="scrollbar"><span class="scrollbar-thumb" style="height: 374.398px; transform: translate3d(0px, 562.19px, 0px);"></span></span>


    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
