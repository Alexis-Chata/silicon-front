<header class="navbar-light navbar-sticky header-static">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid px-3 px-xl-5">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ env('APP_URL', 'http://localhost') }}">
                <img class="light-mode-item navbar-brand-item" src="./silicon-front/silicon/logo.svg" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="./silicon-front/silicon/logo-light.svg" alt="logo">
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
                        <a class="nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0" href="#"
                            id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="bi bi-ui-radios-grid me-2"></i><span>Category</span></a>
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
                                <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
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
                                                    <a class="stretched-link h6 mb-0" href="#">Business
                                                        Development Executive(BDE)</a>
                                                    <p class="mb-0 small">No prerequisites</p>
                                                </div>
                                            </div>
                                            <!-- Dropdown item -->
                                            <div class="d-flex mb-4 position-relative">
                                                <h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i>
                                                </h2>
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
                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/request-demo.html">Request
                                    a demo</a></li>
                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/book-class.html">Book a
                                    Class</a></li>
                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/request-access.html">Free
                                    Access</a></li>
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
                                    <li> <a class="dropdown-item" href="https://eduport.webestica.com/about.html">About
                                            Us</a></li>
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
                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/abroad-single.html">Abroad
                                    Single <span class="badge bg-success ms-2 smaller">New</span></a></li>

                            <!-- Dropdown submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">Shop
                                    <span class="badge bg-success ms-2 smaller">New</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                                    <li> <a class="dropdown-item" href="https://eduport.webestica.com/shop.html">Shop
                                            grid</a></li>
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
                                    <li> <a class="dropdown-item" href="https://eduport.webestica.com/sign-in.html">Sign
                                            In</a></li>
                                    <li> <a class="dropdown-item" href="https://eduport.webestica.com/sign-up.html">Sign
                                            Up</a></li>
                                    <li> <a class="dropdown-item"
                                            href="https://eduport.webestica.com/forgot-password.html">Forgot
                                            Password</a></li>
                                </ul>
                            </li>

                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/faq.html">FAQs</a>
                            </li>
                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/error-404.html">Error
                                    404</a></li>
                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/coming-soon.html">Coming
                                    Soon</a></li>
                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/cart.html">Cart</a>
                            </li>
                            <li> <a class="dropdown-item"
                                    href="https://eduport.webestica.com/checkout.html">Checkout</a></li>
                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/empty-cart.html">Empty
                                    Cart</a></li>
                            <li> <a class="dropdown-item"
                                    href="https://eduport.webestica.com/wishlist.html">Wishlist</a></li>
                        </ul>
                    </li>

                    <!-- Nav item 3 Account -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Accounts</a>
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

                            <li> <a class="dropdown-item" href="https://eduport.webestica.com/admin-dashboard.html"><i
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
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Megamenu</a>
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
                                        <h2 class="mb-0"><i class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
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
                                            <img class="avatar-img rounded-circle" src="./silicon-front/silicon/09.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        The personality development class starts at 2:00 pm, click to <a href="#"
                                            class="alert-link">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Nav item 5 link-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
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
                                <a class="dropdown-item" href="https://eduport.webestica.com/rtl/" target="_blank">
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

            <!-- Cart dropdown START -->
            <div class="me-2 me-md-3 dropdown">
                <!-- Cart button -->
                <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" data-bs-auto-close="outside">
                    <i class="bi bi-cart3 fa-fw"></i>
                </a>
                <!-- badge -->
                <span
                    class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-dark mt-xl-2 ms-n1">2
                    <span class="visually-hidden">unread messages</span>
                </span>

                <!-- Cart dropdown menu START -->
                <div
                    class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                    <div class="card bg-transparent">
                        <div class="card-header bg-transparent border-bottom py-4">
                            <h5 class="m-0">Cart items</h5>
                        </div>
                        <div class="card-body p-0">

                            <!-- Cart item START -->
                            <div class="row p-3 g-2">
                                <!-- Image -->
                                <div class="col-3">
                                    <img class="rounded-2" src="silicon-front/silicon/cart-02.jpg" alt="avatar">
                                </div>

                                <div class="col-9">
                                    <!-- Title -->
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">Angular 4 Tutorial in audio (Compact Disk)</h6>
                                        <a href="#" class="small text-primary-hover"><i class="bi bi-x-lg"></i></a>
                                    </div>
                                    <!-- Select item -->
                                    <form class="choices-sm pt-2 col-4">
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                            aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select
                                                    class="form-select js-choice border-0 bg-transparent choices__input"
                                                    data-search-enabled="false" hidden="" tabindex="-1"
                                                    data-choice="active">
                                                    <option value="2" data-custom-properties="[object Object]">2
                                                    </option>
                                                </select>
                                                <div class="choices__list choices__list--single">
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="1" data-value="2"
                                                        data-custom-properties="[object Object]" aria-selected="true">2
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <div class="choices__list" role="listbox">
                                                    <div id="choices--7hld-item-choice-1"
                                                        class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                        role="option" data-choice="" data-id="1" data-value="1"
                                                        data-select-text="Press to select" data-choice-selectable=""
                                                        aria-selected="true">1</div>
                                                    <div id="choices--7hld-item-choice-2"
                                                        class="choices__item choices__item--choice is-selected choices__item--selectable"
                                                        role="option" data-choice="" data-id="2" data-value="2"
                                                        data-select-text="Press to select" data-choice-selectable="">2
                                                    </div>
                                                    <div id="choices--7hld-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="3" data-value="3"
                                                        data-select-text="Press to select" data-choice-selectable="">3
                                                    </div>
                                                    <div id="choices--7hld-item-choice-4"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="4" data-value="4"
                                                        data-select-text="Press to select" data-choice-selectable="">4
                                                    </div>
                                                    <div id="choices--7hld-item-choice-5"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="5" data-value="5"
                                                        data-select-text="Press to select" data-choice-selectable="">5
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Cart item END -->

                            <!-- Divider -->
                            <hr class="m-0">

                            <!-- Cart item START -->
                            <div class="row p-3 g-2">
                                <!-- Image -->
                                <div class="col-3">
                                    <img class="rounded-2" src="silicon-front/silicon/cart-04.jpg" alt="avatar">
                                </div>

                                <div class="col-9">
                                    <!-- Title -->
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">The Principles of Beautiful Graphics Design (Paperback)</h6>
                                        <a href="#" class="small text-primary-hover"><i class="bi bi-x-lg"></i></a>
                                    </div>
                                    <!-- Select item -->
                                    <form class="choices-sm pt-2 col-4">
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                            aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select
                                                    class="form-select js-choice border-0 bg-transparent choices__input"
                                                    data-search-enabled="false" hidden="" tabindex="-1"
                                                    data-choice="active">
                                                    <option value="1" data-custom-properties="[object Object]">1
                                                    </option>
                                                </select>
                                                <div class="choices__list choices__list--single">
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="1" data-value="1"
                                                        data-custom-properties="[object Object]" aria-selected="true">1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <div class="choices__list" role="listbox">
                                                    <div id="choices--q0zc-item-choice-1"
                                                        class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted"
                                                        role="option" data-choice="" data-id="1" data-value="1"
                                                        data-select-text="Press to select" data-choice-selectable=""
                                                        aria-selected="true">1</div>
                                                    <div id="choices--q0zc-item-choice-2"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="2" data-value="2"
                                                        data-select-text="Press to select" data-choice-selectable="">2
                                                    </div>
                                                    <div id="choices--q0zc-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="3" data-value="3"
                                                        data-select-text="Press to select" data-choice-selectable="">3
                                                    </div>
                                                    <div id="choices--q0zc-item-choice-4"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="4" data-value="4"
                                                        data-select-text="Press to select" data-choice-selectable="">4
                                                    </div>
                                                    <div id="choices--q0zc-item-choice-5"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="5" data-value="5"
                                                        data-select-text="Press to select" data-choice-selectable="">5
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Cart item END -->

                            @forelse (Cart::content() as $item)
                                <!-- Cart item START -->
                            <div class="row p-3 g-2">
                                <!-- Image -->
                                <div class="col-3">
                                    <img class="rounded-2" src="silicon-front/silicon/cart-04.jpg" alt="avatar">
                                </div>

                                <div class="col-9">
                                    <!-- Title -->
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">{{ $item->name }}</h6>
                                        <a href="#" class="small text-primary-hover"><i class="bi bi-x-lg"></i></a>
                                    </div>
                                    <!-- Select item -->
                                    <form class="choices-sm pt-2 col-4">
                                        <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                            aria-haspopup="true" aria-expanded="false">
                                            <div class="choices__inner"><select
                                                    class="form-select js-choice border-0 bg-transparent choices__input"
                                                    data-search-enabled="false" hidden="" tabindex="-1"
                                                    data-choice="active">
                                                    <option value="1" data-custom-properties="[object Object]">1
                                                    </option>
                                                </select>
                                                <div class="choices__list choices__list--single">
                                                    <div class="choices__item choices__item--selectable" data-item=""
                                                        data-id="1" data-value="1"
                                                        data-custom-properties="[object Object]" aria-selected="true">1
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                <div class="choices__list" role="listbox">
                                                    <div id="choices--q0zc-item-choice-1"
                                                        class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted"
                                                        role="option" data-choice="" data-id="1" data-value="1"
                                                        data-select-text="Press to select" data-choice-selectable=""
                                                        aria-selected="true">1</div>
                                                    <div id="choices--q0zc-item-choice-2"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="2" data-value="2"
                                                        data-select-text="Press to select" data-choice-selectable="">2
                                                    </div>
                                                    <div id="choices--q0zc-item-choice-3"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="3" data-value="3"
                                                        data-select-text="Press to select" data-choice-selectable="">3
                                                    </div>
                                                    <div id="choices--q0zc-item-choice-4"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="4" data-value="4"
                                                        data-select-text="Press to select" data-choice-selectable="">4
                                                    </div>
                                                    <div id="choices--q0zc-item-choice-5"
                                                        class="choices__item choices__item--choice choices__item--selectable"
                                                        role="option" data-choice="" data-id="5" data-value="5"
                                                        data-select-text="Press to select" data-choice-selectable="">5
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Cart item END -->
                            @empty

                            @endforelse

                        </div>
                        <!-- Button -->
                        <div
                            class="card-footer bg-transparent border-top py-3 text-center d-flex justify-content-between position-relative">
                            <a href="{{ route('carrito') }}" class="btn btn-sm btn-light mb-0">View Cart</a>
                            <a href="#" class="btn btn-sm btn-success mb-0">Checkout</a>
                        </div>
                    </div>
                </div>
                <!-- Cart dropdown menu END -->
            </div>
            <!-- Cart dropdown END -->



            <!-- Profile START -->
            <div class="dropdown ms-1 ms-lg-0">
                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside"
                    data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
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
