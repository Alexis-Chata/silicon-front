<!DOCTYPE html>
<!-- saved from url=(0030)https://eduport.webestica.com/ -->
<html lang="en" data-theme="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Eduport - LMS, Education and Course Theme</title>

    <!-- Meta Tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="jademlearning.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ env('APP_URL', 'http://localhost') }}/silicon-front/assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="stylesheet" href="./silicon-front/silicon/css2">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/all.min.css">
    <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/bootstrap-icons.css">

    @if (Route::currentRouteName() == 'index')
        <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/tiny-slider.css">
        <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/glightbox.css">
    @endif

    @if (Route::currentRouteName() == 'cursos')
        <link rel="stylesheet" type="text/css" href="./silicon-front/silicon/choices.min.css">
    @endif

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="./silicon-front/silicon/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="./silicon-front/silicon/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7N7LGGGWT1');
    </script>

    <style></style>
</head>

<body cz-shortcut-listen="true">

    <!-- Header START -->
    <header class="navbar-light navbar-sticky header-static">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid px-3 px-xl-5">
                <!-- Logo START -->
                <a class="navbar-brand" href="{{ env('APP_URL', 'http://localhost') }}">
                    <img class="light-mode-item navbar-brand-item" src="./silicon-front/silicon/logo.svg"
                        alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="./silicon-front/silicon/logo-light.svg"
                        alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse w-100 collapse" id="navbarCollapse">

                    <!-- Nav category menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown dropdown-menu-shadow-stacked">
                            <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0"
                                href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="bi bi-ui-radios-grid me-2"></i><span>Category</span></a>
                            <ul class="dropdown-menu" aria-labelledby="categoryMenu">

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Development</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <!-- dropdown submenu open right -->
                                        <li class="dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#">Web Development</a>
                                            <ul class="dropdown-menu" data-bs-popper="none">
                                                <li> <a class="dropdown-item" href="#">CSS</a> </li>
                                                <li> <a class="dropdown-item" href="#">JavaScript</a> </li>
                                                <li> <a class="dropdown-item" href="#">Angular</a> </li>
                                                <li> <a class="dropdown-item" href="#">PHP</a> </li>
                                                <li> <a class="dropdown-item" href="#">HTML</a> </li>
                                                <li> <a class="dropdown-item" href="#">React</a> </li>
                                            </ul>
                                        </li>
                                        <li> <a class="dropdown-item" href="#">Data Science</a> </li>
                                        <li> <a class="dropdown-item" href="#">Mobile Development</a> </li>
                                        <li> <a class="dropdown-item" href="#">Programing Language</a> </li>
                                        <li> <a class="dropdown-item" href="#">Software Testing</a> </li>
                                        <li> <a class="dropdown-item" href="#">Software Engineering</a> </li>
                                        <li> <a class="dropdown-item" href="#">Software Development Tools</a>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="#">Design</a></li>
                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Marketing</a>
                                    <div class="dropdown-menu dropdown-menu-start dropdown-width-lg"
                                        data-bs-popper="none">
                                        <div class="row p-4">
                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                                <h6 class="mb-0">Get started</h6>
                                                <hr> <!-- Divider -->
                                                <ul class="list-unstyled">
                                                    <li> <a class="dropdown-item" href="#">Market Research</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                                    <li> <a class="dropdown-item" href="#">Consumer Behavior</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="#">Digital Marketing</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="#">Marketing Ethics</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="#">Social Media
                                                            Marketing</a> </li>
                                                    <li> <a class="dropdown-item" href="#">Public Relations</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                                    <li> <a class="dropdown-item" href="#">Decision Science</a>
                                                    </li>
                                                    <li> <a class="dropdown-item" href="#">SEO</a> </li>
                                                    <li> <a class="dropdown-item" href="#">Business
                                                            Marketing</a> </li>
                                                </ul>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                                                <h6 class="mb-0">Degree</h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="./silicon-front/silicon/uni-logo-01.svg" class="icon-md"
                                                        alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="#">American
                                                            Century University, New Mexico</a>
                                                        <p class="mb-0 small">Bachelor of computer science</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="./silicon-front/silicon/uni-logo-02.svg" class="icon-md"
                                                        alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="#">Indiana
                                                            College of - Bloomington</a>
                                                        <p class="mb-0 small">Masters of computer science</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="./silicon-front/silicon/uni-logo-03.svg" class="icon-md"
                                                        alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="#">College of
                                                            South Florida</a>
                                                        <p class="mb-0 small">Medical science college</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <img src="./silicon-front/silicon/uni-logo-01.svg" class="icon-md"
                                                        alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="#">Andeerson
                                                            Campus</a>
                                                        <p class="mb-0 small">Bachelor of computer science</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex position-relative">
                                                    <img src="./silicon-front/silicon/uni-logo-04.svg" class="icon-md"
                                                        alt="">
                                                    <div class="ms-3">
                                                        <a class="stretched-link h6 mb-0" href="#">University of
                                                            South California</a>
                                                        <p class="mb-0 small">Masters of business development</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Dropdown column item -->
                                            <div class="col-xl-6 col-xxl-4">
                                                <h6 class="mb-0">Certificate</h6>
                                                <hr> <!-- Divider -->
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <h2 class="mb-0"><i
                                                            class="fab fa-fw fa-google text-google-icon"></i></h2>
                                                    <div class="ms-2">
                                                        <a class="stretched-link h6 mb-0" href="#">Google SEO
                                                            certificate</a>
                                                        <p class="mb-0 small">No prerequisites</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <h2 class="mb-0"><i
                                                            class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
                                                    <div class="ms-2">
                                                        <a class="stretched-link h6 mb-0" href="#">Business
                                                            Development Executive(BDE)</a>
                                                        <p class="mb-0 small">No prerequisites</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <h2 class="mb-0"><i
                                                            class="fab fa-fw fa-facebook text-facebook"></i></h2>
                                                    <div class="ms-2">
                                                        <a class="stretched-link h6 mb-0" href="#">Facebook
                                                            social media marketing</a>
                                                        <p class="mb-0 small">Expert advice</p>
                                                    </div>
                                                </div>
                                                <!-- Dropdown item -->
                                                <div class="d-flex mb-4 position-relative">
                                                    <h2 class="mb-0"><i
                                                            class="fas fa-fw fa-basketball-ball text-dribbble"></i>
                                                    </h2>
                                                    <div class="ms-2">
                                                        <a class="stretched-link h6 mb-0" href="#">Creative
                                                            graphics design</a>
                                                        <p class="mb-0 small">No prerequisites</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Advertisement -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden"
                                                    style="background:url(silicon-front/assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                                                    <!-- SVG decoration -->
                                                    <figure
                                                        class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                                                        <svg width="92.6px" height="135.2px">
                                                            <path class="fill-white"
                                                                d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z">
                                                            </path>
                                                            <path class="fill-white"
                                                                d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z">
                                                            </path>
                                                            <path class="fill-white"
                                                                d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z">
                                                            </path>
                                                            <path class="fill-warning"
                                                                d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z">
                                                            </path>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="31.2,12.3 4.7,5.4 25.1,17.2"></polygon>
                                                            <polygon class="fill-warning opacity-6"
                                                                points="21.5,19.5 15,24.8 4.7,5.4 "></polygon>
                                                        </svg>
                                                    </figure>
                                                    <!-- Body -->
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h5 class="card-title text-white mb-2">Access 25K Online
                                                            courses from 120 institutions, Start today!</h5>
                                                        <p class="text-white text-opacity-75">Here is the description
                                                            of premium features which will allow users to get benefits
                                                            and save a lot of money</p>
                                                        <!-- Button -->
                                                        <a href="#" class="btn btn-sm btn-dark mb-0">Purchase
                                                            Premium</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li> <a class="dropdown-item" href="#">Music</a></li>
                                <li> <a class="dropdown-item" href="#">Lifestyle</a></li>
                                <li> <a class="dropdown-item" href="#">IT &amp; software</a></li>
                                <li> <a class="dropdown-item" href="#">Personal development</a></li>
                                <li> <a class="dropdown-item" href="#">Health &amp; fitness</a></li>
                                <li> <a class="dropdown-item" href="#">Teaching</a></li>
                                <li> <a class="dropdown-item" href="#">Social science</a></li>
                                <li> <a class="dropdown-item" href="#">Math &amp; logic</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0"
                                        href="#">View all categories</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Nav category menu END -->

                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto">
                        <!-- Nav item 1 Demos -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Route::currentRouteName() == 'index' ? 'active' : '' }}"
                                href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Demos</a>
                            <ul class="dropdown-menu" aria-labelledby="demoMenu">
                                <li> <a class="dropdown-item {{ Route::currentRouteName() == 'index' ? 'active' : '' }}"
                                        href="https://eduport.webestica.com/index.html">Home Default</a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/index-2.html">Home
                                        Education</a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/index-3.html">Home
                                        Academy</a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/index-4.html">Home
                                        Course</a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/index-5.html">Home
                                        University</a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/index-6.html">Home
                                        Kindergarten</a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/index-7.html">Home
                                        Landing</a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/index-8.html">Home
                                        Tutor</a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/index-9.html">Home
                                        School <span class="badge bg-success ms-2 smaller">New</span></a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/index-10.html">Home
                                        Abroad <span class="badge bg-success ms-2 smaller">New</span></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/request-demo.html">Request a demo</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/book-class.html">Book a Class</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/request-access.html">Free Access</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/university-admission-form.html">Admission
                                        Form</a></li>
                            </ul>
                        </li>

                        <!-- Nav item 2 Pages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ in_array(request()->route()->getName(),['profile', 'cursos'])? 'active': '' }}"
                                href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle {{ in_array(request()->route()->getName(),['profile', 'cursos'])? 'active': '' }}"
                                        href="#">Course</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/course-categories.html">Course
                                                Categories <span class="badge bg-success ms-2 smaller">New</span></a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/course-grid.html">Course Grid
                                                Classic</a></li>
                                        <li> <a class="dropdown-item {{ in_array(request()->route()->getName(),['profile', 'cursos'])? 'active': '' }}"
                                                href="https://eduport.webestica.com/course-grid-2.html">Course Grid
                                                Minimal</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/course-list.html">Course List
                                                Classic</a></li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/course-list-2.html">Course List
                                                Minimal</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/course-detail.html">Course Detail
                                                Classic</a></li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/course-detail-min.html">Course
                                                Detail Minimal</a></li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/course-detail-adv.html">Course
                                                Detail Advance</a></li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/course-video-player.html">Course
                                                Full Screen Video</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">About</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/about.html">About Us</a></li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/contact-us.html">Contact Us</a>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/blog-grid.html">Blog Grid</a></li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/blog-masonry.html">Blog Masonry</a>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/blog-detail.html">Blog Detail</a>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/pricing.html">Pricing</a></li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/instructor-list.html">Instructor List</a>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/instructor-single.html">Instructor
                                        Single</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/become-instructor.html">Become an
                                        Instructor</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/abroad-single.html">Abroad Single <span
                                            class="badge bg-success ms-2 smaller">New</span></a></li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Shop
                                        <span class="badge bg-success ms-2 smaller">New</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/shop.html">Shop grid</a></li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/shop-product-detail.html">Product
                                                detail</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Help
                                        <span class="badge bg-success ms-2 smaller">New</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/help-center.html">Help Center</a>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/help-center-detail.html">Help
                                                Center Single</a></li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/sign-in.html">Sign In</a></li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/sign-up.html">Sign Up</a></li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/forgot-password.html">Forgot
                                                Password</a></li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/faq.html">FAQs</a>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/error-404.html">Error 404</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/coming-soon.html">Coming Soon</a></li>
                                <li> <a class="dropdown-item" href="https://eduport.webestica.com/cart.html">Cart</a>
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/checkout.html">Checkout</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/empty-cart.html">Empty Cart</a></li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>

                        <!-- Nav item 3 Account -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="accounntMenu"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                            <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#"><i
                                            class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/instructor-dashboard.html"><i
                                                    class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/instructor-manage-course.html"><i
                                                    class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/instructor-create-course.html"><i
                                                    class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create
                                                Course</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/course-added.html"><i
                                                    class="bi bi-file-check-fill fa-fw me-1"></i>Course Added</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/instructor-quiz.html"><i
                                                    class="bi bi-question-diamond fa-fw me-1"></i>Quiz <span
                                                    class="badge bg-success ms-2 smaller">New</span></a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/instructor-earning.html"><i
                                                    class="fas fa-chart-line fa-fw me-1"></i>Earnings</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/instructor-studentlist.html"><i
                                                    class="fas fa-user-graduate fa-fw me-1"></i>Students</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/instructor-order.html"><i
                                                    class="bi bi-cart-check-fill fa-fw me-1"></i>Orders</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/instructor-review.html"><i
                                                    class="bi bi-star-fill fa-fw me-1"></i>Reviews</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/instructor-payout.html"><i
                                                    class="fas fa-wallet fa-fw me-1"></i>Payout</a> </li>
                                    </ul>
                                </li>

                                <!-- Dropdown submenu -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#"><i
                                            class="fas fa-user-graduate fa-fw me-1"></i>Student</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/student-dashboard.html"><i
                                                    class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/student-subscription.html"><i
                                                    class="bi bi-card-checklist fa-fw me-1"></i>My Subscriptions</a>
                                        </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/student-course-list.html"><i
                                                    class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/student-course-resume.html"><i
                                                    class="far fa-fw fa-file-alt me-1"></i>Course Resume <span
                                                    class="badge bg-success ms-2 smaller">New</span></a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/student-quiz.html"><i
                                                    class="bi bi-question-diamond fa-fw me-1"></i>Quiz <span
                                                    class="badge bg-success ms-2 smaller">New</span></a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/student-payment-info.html"><i
                                                    class="bi bi-credit-card-2-front-fill fa-fw me-1"></i>Payment
                                                Info</a> </li>
                                        <li> <a class="dropdown-item"
                                                href="https://eduport.webestica.com/student-bookmark.html"><i
                                                    class="fas bi-cart-check-fill fa-fw me-1"></i>Wishlist</a> </li>
                                    </ul>
                                </li>

                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/admin-dashboard.html"><i
                                            class="fas fa-user-cog fa-fw me-1"></i>Admin</a> </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/instructor-edit-profile.html"><i
                                            class="fas fa-fw fa-edit me-1"></i>Edit Profile</a> </li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/instructor-setting.html"><i
                                            class="fas fa-fw fa-cog me-1"></i>Settings</a> </li>
                                <li> <a class="dropdown-item"
                                        href="https://eduport.webestica.com/instructor-delete-account.html"><i
                                            class="fas fa-fw fa-trash-alt me-1"></i>Delete Profile</a> </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <!-- Dropdown Level -->
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                                    <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">

                                        <!-- dropdown submenu open right -->
                                        <li class="dropdown-submenu dropend">
                                            <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                                            <ul class="dropdown-menu" data-bs-popper="none">
                                                <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                                <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            </ul>
                                        </li>
                                        <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>

                                        <!-- dropdown submenu open left -->
                                        <li class="dropdown-submenu dropstart">
                                            <a class="dropdown-item dropdown-toggle" href="#">Dropdown
                                                (start)</a>
                                            <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                                <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                                <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                            </ul>
                                        </li>
                                        <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Nav item 4 Megamenu-->
                        <li class="nav-item dropdown dropdown-fullwidth">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Megamenu</a>
                            <div class="dropdown-menu dropdown-menu-end pb-0" data-bs-popper="none">
                                <div class="row p-4 g-4">
                                    <!-- Dropdown column item -->
                                    <div class="col-xl-6 col-xxl-3">
                                        <h6 class="mb-0">Get started</h6>
                                        <hr>
                                        <ul class="list-unstyled">
                                            <li> <a class="dropdown-item" href="#">Market research</a> </li>
                                            <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                            <li> <a class="dropdown-item" href="#">Consumer behavior</a> </li>
                                            <li> <a class="dropdown-item" href="#">Digital marketing</a> </li>
                                            <li> <a class="dropdown-item" href="#">Marketing ethics</a> </li>
                                            <li> <a class="dropdown-item" href="#">Social media marketing</a>
                                            </li>
                                            <li> <a class="dropdown-item" href="#">Public relations</a> </li>
                                            <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                                            <li> <a class="dropdown-item" href="#">Decision science</a> </li>
                                            <li> <a class="dropdown-item" href="#">SEO</a> </li>
                                            <li> <a class="dropdown-item" href="#">Business marketing</a> </li>
                                        </ul>
                                    </div>

                                    <!-- Dropdown column item -->
                                    <div class="col-xl-6 col-xxl-3">
                                        <h6 class="mb-0">Degree</h6>
                                        <hr>
                                        <!-- Dropdown item -->
                                        <div
                                            class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                            <a class="stretched-link h6 mb-0" href="#">Contact management</a>
                                            <p class="mb-0 small text-truncate-2">Speedily say has suitable disposal
                                                add boy. On forth doubt miles of child.</p>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div
                                            class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                            <a class="stretched-link h6 mb-0" href="#">Sales pipeline</a>
                                            <p class="mb-0 small text-truncate-2">Speedily say has suitable disposal
                                                add boy. On forth doubt miles of child.</p>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div
                                            class="mb-2 position-relative bg-primary-soft-hover rounded-2 transition-base p-3">
                                            <a class="stretched-link h6 mb-0" href="#">Security &amp;
                                                Permission</a>
                                            <p class="mb-0 small text-truncate-2">Speedily say has suitable disposal
                                                add boy. On forth doubt miles of child.</p>
                                        </div>
                                    </div>

                                    <!-- Dropdown column item -->
                                    <div class="col-xl-6 col-xxl-3">
                                        <h6 class="mb-0">Certificate</h6>
                                        <hr>
                                        <!-- Dropdown item -->
                                        <div class="d-flex mb-4 position-relative">
                                            <h2 class="mb-0"><i class="fab fa-fw fa-google text-google-icon"></i>
                                            </h2>
                                            <div class="ms-2">
                                                <a class="stretched-link h6 mb-0" href="#">Google SEO
                                                    certificate</a>
                                                <p class="mb-0 small">No prerequisites</p>
                                            </div>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div class="d-flex mb-4 position-relative">
                                            <h2 class="mb-0"><i class="fab fa-fw fa-linkedin-in text-linkedin"></i>
                                            </h2>
                                            <div class="ms-2">
                                                <a class="stretched-link h6 mb-0" href="#">Business Development
                                                    Executive(BDE)</a>
                                                <p class="mb-0 small">No prerequisites</p>
                                            </div>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div class="d-flex mb-4 position-relative">
                                            <h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i>
                                            </h2>
                                            <div class="ms-2">
                                                <a class="stretched-link h6 mb-0" href="#">Facebook social media
                                                    marketing</a>
                                                <p class="mb-0 small">Expert advice</p>
                                            </div>
                                        </div>
                                        <!-- Dropdown item -->
                                        <div class="d-flex mb-4 position-relative">
                                            <h2 class="mb-0"><i
                                                    class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
                                            <div class="ms-2">
                                                <a class="stretched-link h6 mb-0" href="#">Creative graphics
                                                    design</a>
                                                <p class="mb-0 small">No prerequisites</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Dropdown column item -->
                                    <div class="col-xl-6 col-xxl-3">
                                        <h6 class="mb-0">Download Eduport</h6>
                                        <hr>
                                        <!-- Image -->
                                        <img src="./silicon-front/silicon/14.svg" alt="">

                                        <!-- Download button -->
                                        <div class="row g-2 justify-content-center mt-3">
                                            <!-- Google play store button -->
                                            <div class="col-6 col-sm-4 col-xxl-6">
                                                <a href="#"> <img src="./silicon-front/silicon/google-play.svg"
                                                        class="btn-transition" alt="google-store"> </a>
                                            </div>
                                            <!-- App store button -->
                                            <div class="col-6 col-sm-4 col-xxl-6">
                                                <a href="#"> <img src="./silicon-front/silicon/app-store.svg"
                                                        class="btn-transition" alt="app-store"> </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action box -->
                                    <div class="col-12">
                                        <div class="alert alert-success alert-dismissible fade show mt-2 mb-0 rounded-3"
                                            role="alert">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-xs me-2">
                                                <img class="avatar-img rounded-circle"
                                                    src="./silicon-front/silicon/09.jpg" alt="avatar">
                                            </div>
                                            <!-- Info -->
                                            The personality development class starts at 2:00 pm, click to <a
                                                href="#" class="alert-link">Join Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Nav item 5 link-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
                                <li>
                                    <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                                        <i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://eduport.webestica.com/docs/index.html"
                                        target="_blank">
                                        <i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://eduport.webestica.com/rtl/"
                                        target="_blank">
                                        <i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/"
                                        target="_blank">
                                        <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Eduport!
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://eduport.webestica.com/docs/alerts.html"
                                        target="_blank">
                                        <i class="text-orange fa-fw bi bi-puzzle-fill me-2"></i>Components
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="position-relative">
                                <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button
                                    class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                    type="submit"><i class="fas fa-search fs-6 "></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                <!-- Profile START -->
                <div class="dropdown ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="./silicon-front/silicon/01.jpg" alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                        aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow" src="./silicon-front/silicon/01.jpg"
                                        alt="avatar">
                                </div>
                                <div>
                                    <a class="h6" href="#">Lori Ferguson</a>
                                    <p class="small m-0">example@gmail.com</p>
                                </div>
                            </div>
                            <hr>
                        </li>
                        <!-- Links -->
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit
                                Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account
                                Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i
                                    class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                        <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i
                                    class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Dark mode switch START -->
                        <li>
                            <div class="modeswitch-wrap" id="darkModeSwitch">
                                <div class="modeswitch-item">
                                    <div class="modeswitch-icon"></div>
                                </div>
                                <span>Dark mode</span>
                            </div>
                        </li>
                        <!-- Dark mode switch END -->
                    </ul>
                </div>
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <div id="sticky-space"></div>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
        Page Banner START -->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light p-4 text-center rounded-3">
                            <h1 class="m-0">Course Grid Minimal</h1>
                            <!-- Breadcrumb -->
                            <div class="d-flex justify-content-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-dots mb-0">
                                        <li class="breadcrumb-item"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Course minimal</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Page Banner END -->

        <!-- =======================
        Page content START -->
        <section class="pt-0">
            <div class="container">

                <!-- Filter bar START -->
                <form class="bg-light border p-4 rounded-3 my-4 z-index-9 position-relative">
                    <div class="row g-3">
                        <!-- Input -->
                        <div class="col-xl-3">
                            <input class="form-control me-1" type="search" placeholder="Enter keyword">
                        </div>

                        <!-- Select item -->
                        <div class="col-xl-8">
                            <div class="row g-3">
                                <!-- Select items -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                        aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select
                                                class="form-select form-select-sm js-choice choices__input"
                                                aria-label=".form-select-sm example" hidden="" tabindex="-1"
                                                data-choice="active">
                                                <option value="" data-custom-properties="[object Object]">
                                                    Categories</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__placeholder choices__item--selectable"
                                                    data-item="" data-id="1" data-value=""
                                                    data-custom-properties="[object Object]" aria-selected="true">
                                                    Categories</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <input type="search" name="search_terms"
                                                class="choices__input choices__input--cloned" autocomplete="off"
                                                autocapitalize="off" spellcheck="false" role="textbox"
                                                aria-autocomplete="list" aria-label="Categories" placeholder="">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--2hkt-item-choice-3"
                                                    class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                    role="option" data-choice="" data-id="3" data-value=""
                                                    data-select-text="Press to select" data-choice-selectable=""
                                                    aria-selected="true">Categories</div>
                                                <div id="choices--2hkt-item-choice-1"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="1"
                                                    data-value="Accounting" data-select-text="Press to select"
                                                    data-choice-selectable="">Accounting</div>
                                                <div id="choices--2hkt-item-choice-2"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="2" data-value="All"
                                                    data-select-text="Press to select" data-choice-selectable="">All
                                                </div>
                                                <div id="choices--2hkt-item-choice-4"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="4" data-value="Design"
                                                    data-select-text="Press to select" data-choice-selectable="">
                                                    Design</div>
                                                <div id="choices--2hkt-item-choice-5"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="5"
                                                    data-value="Development" data-select-text="Press to select"
                                                    data-choice-selectable="">Development</div>
                                                <div id="choices--2hkt-item-choice-6"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="6"
                                                    data-value="Finance" data-select-text="Press to select"
                                                    data-choice-selectable="">Finance</div>
                                                <div id="choices--2hkt-item-choice-7"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="7" data-value="Legal"
                                                    data-select-text="Press to select" data-choice-selectable="">Legal
                                                </div>
                                                <div id="choices--2hkt-item-choice-8"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="8"
                                                    data-value="Marketing" data-select-text="Press to select"
                                                    data-choice-selectable="">Marketing</div>
                                                <div id="choices--2hkt-item-choice-9"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="9"
                                                    data-value="Photography" data-select-text="Press to select"
                                                    data-choice-selectable="">Photography</div>
                                                <div id="choices--2hkt-item-choice-10"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="10"
                                                    data-value="Translation" data-select-text="Press to select"
                                                    data-choice-selectable="">Translation</div>
                                                <div id="choices--2hkt-item-choice-11"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="11"
                                                    data-value="Writing" data-select-text="Press to select"
                                                    data-choice-selectable="">Writing</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Search item -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                        aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select
                                                class="form-select form-select-sm js-choice choices__input"
                                                aria-label=".form-select-sm example" hidden="" tabindex="-1"
                                                data-choice="active">
                                                <option value="" data-custom-properties="[object Object]">Price
                                                    level</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__placeholder choices__item--selectable"
                                                    data-item="" data-id="1" data-value=""
                                                    data-custom-properties="[object Object]" aria-selected="true">
                                                    Price level</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <input type="search" name="search_terms"
                                                class="choices__input choices__input--cloned" autocomplete="off"
                                                autocapitalize="off" spellcheck="false" role="textbox"
                                                aria-autocomplete="list" aria-label="Price level" placeholder="">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--r94e-item-choice-4"
                                                    class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                    role="option" data-choice="" data-id="4" data-value=""
                                                    data-select-text="Press to select" data-choice-selectable=""
                                                    aria-selected="true">Price level</div>
                                                <div id="choices--r94e-item-choice-1"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="1" data-value="All"
                                                    data-select-text="Press to select" data-choice-selectable="">All
                                                </div>
                                                <div id="choices--r94e-item-choice-2"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="2" data-value="Free"
                                                    data-select-text="Press to select" data-choice-selectable="">Free
                                                </div>
                                                <div id="choices--r94e-item-choice-3"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="3" data-value="Paid"
                                                    data-select-text="Press to select" data-choice-selectable="">Paid
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Search item -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                        aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select
                                                class="form-select form-select-sm js-choice choices__input"
                                                aria-label=".form-select-sm example" hidden="" tabindex="-1"
                                                data-choice="active">
                                                <option value="" data-custom-properties="[object Object]">Skill
                                                    level</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__placeholder choices__item--selectable"
                                                    data-item="" data-id="1" data-value=""
                                                    data-custom-properties="[object Object]" aria-selected="true">
                                                    Skill level</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <input type="search" name="search_terms"
                                                class="choices__input choices__input--cloned" autocomplete="off"
                                                autocapitalize="off" spellcheck="false" role="textbox"
                                                aria-autocomplete="list" aria-label="Skill level" placeholder="">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--7j4t-item-choice-5"
                                                    class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                    role="option" data-choice="" data-id="5" data-value=""
                                                    data-select-text="Press to select" data-choice-selectable=""
                                                    aria-selected="true">Skill level</div>
                                                <div id="choices--7j4t-item-choice-1"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="1"
                                                    data-value="Advanced" data-select-text="Press to select"
                                                    data-choice-selectable="">Advanced</div>
                                                <div id="choices--7j4t-item-choice-2"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="2"
                                                    data-value="All levels" data-select-text="Press to select"
                                                    data-choice-selectable="">All levels</div>
                                                <div id="choices--7j4t-item-choice-3"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="3"
                                                    data-value="Beginner" data-select-text="Press to select"
                                                    data-choice-selectable="">Beginner</div>
                                                <div id="choices--7j4t-item-choice-4"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="4"
                                                    data-value="Intermediate" data-select-text="Press to select"
                                                    data-choice-selectable="">Intermediate</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Search item -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                        aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select
                                                class="form-select form-select-sm js-choice choices__input"
                                                aria-label=".form-select-sm example" hidden="" tabindex="-1"
                                                data-choice="active">
                                                <option value="" data-custom-properties="[object Object]">
                                                    Language</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__placeholder choices__item--selectable"
                                                    data-item="" data-id="1" data-value=""
                                                    data-custom-properties="[object Object]" aria-selected="true">
                                                    Language</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <input type="search" name="search_terms"
                                                class="choices__input choices__input--cloned" autocomplete="off"
                                                autocapitalize="off" spellcheck="false" role="textbox"
                                                aria-autocomplete="list" aria-label="Language" placeholder="">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--emom-item-choice-5"
                                                    class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted"
                                                    role="option" data-choice="" data-id="5" data-value=""
                                                    data-select-text="Press to select" data-choice-selectable=""
                                                    aria-selected="true">Language</div>
                                                <div id="choices--emom-item-choice-1"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="1"
                                                    data-value="Bengali" data-select-text="Press to select"
                                                    data-choice-selectable="">Bengali</div>
                                                <div id="choices--emom-item-choice-2"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="2"
                                                    data-value="English" data-select-text="Press to select"
                                                    data-choice-selectable="">English</div>
                                                <div id="choices--emom-item-choice-3"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="3"
                                                    data-value="Francas" data-select-text="Press to select"
                                                    data-choice-selectable="">Francas</div>
                                                <div id="choices--emom-item-choice-4"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="4"
                                                    data-value="Hindi" data-select-text="Press to select"
                                                    data-choice-selectable="">Hindi
                                                </div>
                                                <div id="choices--emom-item-choice-6"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="6"
                                                    data-value="Russian" data-select-text="Press to select"
                                                    data-choice-selectable="">Russian</div>
                                                <div id="choices--emom-item-choice-7"
                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                    role="option" data-choice="" data-id="7"
                                                    data-value="Spanish" data-select-text="Press to select"
                                                    data-choice-selectable="">Spanish</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Row END -->
                        </div>
                        <!-- Button -->
                        <div class="col-xl-1">
                            <button type="button" class="btn btn-primary mb-0 rounded z-index-1 w-100"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </div> <!-- Row END -->
                </form>
                <!-- Filter bar END -->

                <div class="row mt-3">
                    <!-- Main content START -->
                    <div class="col-12">

                        <!-- Course Grid START -->
                        <div class="row g-4">

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/08.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <!-- Card body -->
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Sketch from A
                                                to Z: for app designer</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>12h 56m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0">
                                                <button type="button"
                                                    class="course-card-btn small s-border-none background transparent-color s-cursor-pointer s-cross-center s-nowrap base"
                                                    style="background-color: transparent; border: none; padding: 0;">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.25em"
                                                        height="1.25em" viewBox="0 0 20 21"
                                                        class="svg-icon normal s-mr-05 fill blue-500 undefined text-danger"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M1.66663 2.89306C1.66663 2.43283 2.03972 2.05973 2.49996 2.05973H4.16663C4.56386 2.05973 4.90587 2.34011 4.98378 2.72963L5.18313 3.7264H17.5C17.7888 3.7264 18.057 3.87594 18.2088 4.12162C18.3607 4.3673 18.3745 4.67408 18.2453 4.93241L14.912 11.5991C14.7708 11.8814 14.4823 12.0597 14.1666 12.0597H6.17847L4.5118 13.7264L14.1666 13.7264C15.5473 13.7264 16.6666 14.8457 16.6666 16.2264C16.6666 17.6071 15.5473 18.7264 14.1666 18.7264C12.7859 18.7264 11.6666 17.6071 11.6666 16.2264C11.6666 15.9342 11.7168 15.6537 11.8089 15.3931H8.19104C8.28316 15.6537 8.33329 15.9342 8.33329 16.2264C8.33329 17.6071 7.214 18.7264 5.83329 18.7264C4.45258 18.7264 3.33329 17.6071 3.33329 16.2264C3.33329 15.8296 3.42572 15.4545 3.59022 15.1212C2.77429 14.5792 2.53374 13.3474 3.33329 12.5479L4.92868 10.9525L3.48346 3.7264H2.49996C2.03972 3.7264 1.66663 3.3533 1.66663 2.89306ZM6.51646 10.3931H13.6516L16.1516 5.39306H5.51646L6.51646 10.3931ZM5.83329 15.3931C5.37306 15.3931 4.99996 15.7662 4.99996 16.2264C4.99996 16.6866 5.37306 17.0597 5.83329 17.0597C6.29353 17.0597 6.66663 16.6866 6.66663 16.2264C6.66663 15.7662 6.29353 15.3931 5.83329 15.3931ZM14.1666 15.3931C13.7064 15.3931 13.3333 15.7662 13.3333 16.2264C13.3333 16.6866 13.7064 17.0597 14.1666 17.0597C14.6269 17.0597 15 16.6866 15 16.2264C15 15.7662 14.6269 15.3931 14.1666 15.3931Z">
                                                        </path>
                                                    </svg>
                                                    <span class="color s-font-semibold blue-500 s-whitespace-nowrap undefined">S/ 84 SOLES</span>
                                                </button>
                                            </span>
                                            <span class="h6 fw-light mb-0"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/ps.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Graphic
                                                Design
                                                Masterclass</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>9h 56m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>65 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/figma.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Create a
                                                Design System in Figma</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>5h 56m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>32 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/07.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Deep Learning
                                                with React-Native </a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>18h 56m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>99 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/11.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Build
                                                Responsive Websites with HTML</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>15h 30m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>68 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/12.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Build
                                                Websites with CSS</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>36h 30m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>72 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/05.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">The Complete
                                                Web Development in python</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>10h 00m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>26 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/06.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-info bg-opacity-10 text-info">Intermediate</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Angular – The
                                                Complete Guider</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>9h 32m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>42 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/10.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-info bg-opacity-10 text-info">Intermediate</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Bootstrap 5
                                                From Scratch</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>25h 56m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>38 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/13.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">PHP with -
                                                CMS Project</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>21h 22m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>30 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/01(1).jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-success bg-opacity-10 text-success">Beginner</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Digital
                                                Marketing Masterclass</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>6h 56m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>82 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <a href="#">
                                        <img src="./silicon-front/silicon/in.jpg" class="card-img-top"
                                            alt="course image"></a>
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="badge bg-purple bg-opacity-10 text-purple">All level</a>
                                            <a href="https://eduport.webestica.com/course-grid-2.html#"
                                                class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="https://eduport.webestica.com/course-grid-2.html#">Learn
                                                Invision</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i
                                                    class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">3.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>6h 56m</span>
                                            <span class="h6 fw-light mb-0"><i
                                                    class="fas fa-table text-orange me-2"></i>82 lectures</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                        </div>
                        <!-- Course Grid END -->

                        <!-- Pagination START -->
                        <div class="col-12">
                            <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                                <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                    <li class="page-item mb-0"><a class="page-link"
                                            href="https://eduport.webestica.com/course-grid-2.html#"
                                            tabindex="-1"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item mb-0"><a class="page-link"
                                            href="https://eduport.webestica.com/course-grid-2.html#">1</a></li>
                                    <li class="page-item mb-0 active"><a class="page-link"
                                            href="https://eduport.webestica.com/course-grid-2.html#">2</a></li>
                                    <li class="page-item mb-0"><a class="page-link"
                                            href="https://eduport.webestica.com/course-grid-2.html#">..</a></li>
                                    <li class="page-item mb-0"><a class="page-link"
                                            href="https://eduport.webestica.com/course-grid-2.html#">6</a></li>
                                    <li class="page-item mb-0"><a class="page-link"
                                            href="https://eduport.webestica.com/course-grid-2.html#"><i
                                                class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Page content END -->

        <!-- =======================
        Newsletter START -->
        <section class="pt-0">
            <div class="container position-relative overflow-hidden">
                <!-- SVG decoration -->
                <figure class="position-absolute top-50 start-50 translate-middle ms-3">
                    <svg>
                        <path class="fill-white opacity-2"
                            d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z">
                        </path>
                        <path class="fill-white opacity-2"
                            d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z">
                        </path>
                        <path class="fill-white opacity-2"
                            d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z">
                        </path>
                        <path class="fill-white opacity-2"
                            d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z">
                        </path>
                    </svg>
                </figure>
                <!-- Svg decoration -->
                <figure class="position-absolute bottom-0 end-0 mb-5 d-none d-sm-block">
                    <svg class="rotate-130" width="258.7px" height="86.9px" viewBox="0 0 258.7 86.9">
                        <path stroke="white" fill="none" stroke-width="2"
                            d="M0,7.2c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5">
                        </path>
                        <path stroke="white" fill="none" stroke-width="2"
                            d="M0,57c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5">
                        </path>
                    </svg>
                </figure>

                <div class="bg-grad-blue p-3 p-sm-5 rounded-3">
                    <div class="row justify-content-center position-relative">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-0 translate-middle-y">
                            <svg width="141px" height="141px">
                                <path class="fill-white opacity-1"
                                    d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z">
                                </path>
                            </svg>
                        </figure>
                        <!-- Newsletter -->
                        <div class="col-12 position-relative my-2 my-sm-3">
                            <div class="row align-items-center">
                                <!-- Title -->
                                <div class="col-lg-6">
                                    <h3 class="text-white mb-3 mb-lg-0">Are you ready for a more great Conversation?
                                    </h3>
                                </div>
                                <!-- Input item -->
                                <div class="col-lg-6 text-lg-end">
                                    <form class="bg-body rounded p-2">
                                        <div class="input-group">
                                            <input class="form-control border-0 me-1" type="email"
                                                placeholder="Type your email here">
                                            <button type="button"
                                                class="btn btn-dark mb-0 rounded">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
        </section>
        <!-- =======================
        Newsletter END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <footer class="pt-5">
        <div class="container">
            <!-- Row START -->
            <div class="row g-4">

                <!-- Widget 1 START -->
                <div class="col-lg-3">
                    <!-- logo -->
                    <a class="me-0" href="{{ env('APP_URL', 'http://localhost') }}">
                        <img class="light-mode-item h-40px" src="./silicon-front/silicon/logo.svg" alt="logo">
                        <img class="dark-mode-item h-40px" src="./silicon-front/silicon/logo-light.svg"
                            alt="logo">
                    </a>
                    <p class="my-3">Eduport education theme, built specifically for the education centers which is
                        dedicated to teaching and involve learners.</p>
                    <!-- Social media icon -->
                    <ul class="list-inline mb-0 mt-3">
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook"
                                href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram"
                                href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter"
                                href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin"
                                href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
                    </ul>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Company</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">News and Blogs</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Library</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Career</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Community</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">Documentation</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Faq</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Forum</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Sitemap</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class="col-6 col-md-4">
                            <h5 class="mb-2 mb-md-4">Teaching</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">Become a teacher</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">How to guide</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->

                <!-- Widget 3 START -->
                <div class="col-lg-3">
                    <h5 class="mb-2 mb-md-4">Contact</h5>
                    <!-- Time -->
                    <p class="mb-2">
                        Toll free:<span class="h6 fw-light ms-2">+1234 568 963</span>
                        <span class="d-block small">(9:AM to 8:PM IST)</span>
                    </p>

                    <p class="mb-0">Email:<span class="h6 fw-light ms-2">example@gmail.com</span></p>

                    <div class="row g-2 mt-2">
                        <!-- Google play store button -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                            <a href="#"> <img src="./silicon-front/silicon/google-play.svg" alt="">
                            </a>
                        </div>
                        <!-- App store button -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                            <a href="#"> <img src="./silicon-front/silicon/app-store.svg" alt="app-store">
                            </a>
                        </div>
                    </div> <!-- Row END -->
                </div>
                <!-- Widget 3 END -->
            </div><!-- Row END -->

            <!-- Divider -->
            <hr class="mt-4 mb-0">

            <!-- Bottom footer -->
            <div class="py-3">
                <div class="container px-0">
                    <div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-left">
                        <!-- copyright text -->
                        <div class="text-primary-hover"> Copyrights <a href="#" class="text-body">©2021
                                Eduport</a>. All rights reserved. </div>
                        <!-- copyright links-->
                        <div class=" mt-3 mt-md-0">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <!-- Language selector -->
                                    <div class="dropup mt-0 text-center text-sm-end">
                                        <a class="dropdown-toggle nav-link" href="#" role="button"
                                            id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-globe me-2"></i>Language
                                        </a>
                                        <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                                            <li><a class="dropdown-item me-4" href="#"><img
                                                        class="fa-fw me-2" src="./silicon-front/silicon/uk.svg"
                                                        alt="">English</a></li>
                                            <li><a class="dropdown-item me-4" href="#"><img
                                                        class="fa-fw me-2" src="./silicon-front/silicon/gr.svg"
                                                        alt="">German </a></li>
                                            <li><a class="dropdown-item me-4" href="#"><img
                                                        class="fa-fw me-2" src="./silicon-front/silicon/sp.svg"
                                                        alt="">French</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a class="nav-link" href="#">Terms of use</a>
                                </li>
                                <li class="list-inline-item"><a class="nav-link pe-0" href="#">Privacy
                                        policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
Footer END -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="./silicon-front/silicon/bootstrap.bundle.min.js"></script>

    <!-- Vendors -->
    @if (Route::currentRouteName() == 'index')
        <script src="./silicon-front/silicon/tiny-slider.js"></script>
        <script src="./silicon-front/silicon/glightbox.js"></script>
        <script src="./silicon-front/silicon/purecounter_vanilla.js"></script>
    @endif

    @if (Route::currentRouteName() == 'cursos')
        <script src="./silicon-front/silicon/choices.min.js"></script>
    @endif

    <!-- Template Functions -->
    <script src="./silicon-front/silicon/functions.js"></script>


</body>

</html>
