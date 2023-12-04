<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/logo01.svg') }}" type="image/x-icon">
    <title> @yield('title') - Academia viva bem</title>

    <!--==============================
 All CSS File
 ============================== -->
    <!-- RESET CSS -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}               ">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}       ">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}     ">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}  ">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}           ">
    <!-- Flip Slider -->
    <link rel="stylesheet" href="{{ asset('css/jquery.flipster.min.css') }} ">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}               ">
</head>

<body>

    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader ">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>

    <header class="nav-header header-layout2">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">vivabem@gmail.com</a>
                                </li>
                                <li><i class="far fa-clock"></i>Seg - Sab: 8 hrs - 19 hrs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="me-3">Visite nossas redes sociais</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ url('/home') }}"><img src="{{ asset('img/logo01.svg') }}"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/sobre') }}">Sobre</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="/treino">Treinos</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/treino/hiit') }}">HIIT</a></li>
                                            <li><a href="{{ url('/treino/emagrecimento') }}">Emagrecimento</a></li>
                                            <li><a href="{{ url('/treino/flexibilidade') }}">Flexibilidade</a></li>
                                            <li><a href="{{ url('/treino/reabilitacao') }}">Reabilitação</a></li>
                                            <li><a href="{{ url('/treino/core') }}">Core</a></li>
                                            <li><a href="{{ url('/treino/dropset') }}">Drop Set</a></li>
                                            <li><a href="{{ url('/treino/emom') }}">EMOM</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="/modalidade">Modalidades</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/modalidade/spa') }}">Spa e Bem-estar</a></li>
                                            <li><a href="{{ url('/modalidade/artesmarciais') }}">Artes Marciais</a>
                                            </li>
                                            <li><a href="{{ url('/modalidade/pilates') }}">Pilates</a></li>
                                            <li><a href="{{ url('/modalidade/musculacao') }}">Musculação</a></li>
                                            <li><a href="{{ url('/modalidade/cardiovascular') }}">Cardiovascular</a>
                                            </li>
                                            <li><a href="{{ url('/modalidade/powerlifting') }}">Powerlifting</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/noticia') }}">Noticias</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contato') }}">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xxl-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+2590256215">+55 11 91336-4872</a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="contact.html" class="btn style2 style-r0 d-xl-block d-none">
                                    Entre em contato
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo.svg" alt="Fitmas"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">Home 01</a>
                            </li>
                            <li>
                                <a href="home-2.html">Home 02</a>
                            </li>
                            <li>
                                <a href="home-3.html">Home 03</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="team.html">Team Page</a></li>
                            <li><a href="team-2.html">Team Page 02</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="gallery.html">Gallery Page</a></li>
                            <li><a href="gallery-2.html">Gallery Page 02</a></li>
                            <li><a href="project.html">Project Page</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                            <li><a href="shop.html">Shop Page</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="pricing.html">Pricing Page</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Project</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-2.html">Blog 02</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Área principal
    ==============================-->

    {{-- BANNER OBRIGATÓRIO --}}
    <div class="hero-wrapper hero-2" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true"
            data-xl-arrows="true" data-ml-arrows="true">

            {{-- PRIMEIRO SLIDE --}}

            <div class="hero-slider" data-bg-src="{{ asset('img/hero/fundoSlide1.png') }}">

                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="{{ asset('img/hero/hero_shape_2-1.png') }}" alt="img">
                </div>

                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="{{ asset('img/hero/hero_shape_2-2.png') }}" alt="img">
                </div>

                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="{{ asset('img/hero/hero_shape_2-3.png') }}" alt="img">
                </div>

                <div class="container">

                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">

                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Evolua
                                    na
                                    Academia</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s"
                                    style="color: #00cc99 !important;">VIVA<span id="bem">BEM</span></h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup"
                                    data-ani-delay="0.2s">melhorar
                                    sempre.</span>

                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Consulte conosco</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            {{-- FIM PRIMEIRO SLIDE --}}



            {{-- SEGUNDO SLIDE --}}
            <div class="hero-slider" data-bg-src="{{ asset('img/hero/fundoSlide2.png') }}">

                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="{{ asset('img/hero/hero_shape_2-1.png') }}" alt="img">
                </div>

                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="{{ asset('img/hero/hero_shape_2-2.png') }}" alt="img">
                </div>

                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="{{ asset('img/hero/hero_shape_2-3.png') }}" alt="img">
                </div>

                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s"
                                    style="color: #00cc99 !important;">VIVA<span id="bem">BEM</span></h1>
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Sempre
                                    no
                                    limite, </span>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup"
                                    data-ani-delay="0.2s">não
                                    pare.</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Consulte conosco</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- FIM SEGUNDO SLIDE --}}
        </div>

        <div class="hero-arrow">
            <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">Ant.</button>
            <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">Prox.</button>
        </div>
    </div>
    {{-- ------------------ --}}


    {{-- CONTEÚDO PRÓPRIO DE CADA PÁG --}}
    @yield('conteudo')
    {{-- ---------------------------- --}}


    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('img/bg/footer-1-bg.png') }}">
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('img/logo01.png') }}"
                                            alt="Fitmas"></a>
                                </div>
                                <p class="about-text">A gym, also known as a fitness center or health club, is a
                                    facility dedicated to physical fitness and exercise gyms and typically offer a range
                                </p>
                                <div class="social-btn">
                                    <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/" tabindex="0"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/" tabindex="0"><i
                                            class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service-details.html">Our Mission</a></li>
                                    <li><a href="team.html">Meet The Teams</a></li>
                                    <li><a href="project.html">Our Projects</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Gallery</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed1.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed1.png') }}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed2.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed2.png') }}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed3.png') }}" {{-- feed 3 --}}
                                        alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed3.png') }}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed3.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed4.png') }}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed4.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed5.png') }}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed5.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed6.png') }}"
                                        class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get Newsletter</h3>
                            <p class="footer-text">Get 10% off your first order! Hurry up</p>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input class="form-control" type="email" placeholder="Email Address"
                                        required="">
                                </div>
                                <button type="submit" class="btn style2">SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center">
                        <p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a> All Rights
                            Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- Script -->

    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/circle-progress.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
