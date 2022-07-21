@extends('base.layout')

@section('content')

    <!-- banner section -->
    <section class="w3l-banner py-5" id="home">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center pt-4">
                <div class="col-md-6 banner-left pe-xl-5">
                    <h4>Hi, I'm Mary Ateer</h4>
                    <h3 class="mb-3 mt-1">Developer</h3>
                    <p class="banner-sub me-md-5">I love to work in UI/UX designing.
                        I always try my best to make good UI with the best UX.
                    </p>
                    <div class="d-flex align-items-center buttons-banner mt-sm-5 mt-4">
                        <a href="about.html" class="btn btn-style me-2">Hire Me</a>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <!-- animations icons -->
        <div class="icon-effects-w3-1 text-right">
            <img src="{{ asset("template/assets/images/icon2.png") }}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-2 text-right">
            <img src="{{ asset("template/assets/images/icon3.png") }}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-3 text-right">
            <img src="{{ asset("template/assets/images/icon1.png") }}" alt="" class="img-fluid">
        </div>
        <div class="icon-effects-w3-4 text-right">
            <img src="{{ asset("template/assets/images/icon6.png") }}" alt="" class="img-fluid">
        </div>
        <!-- //animations icons -->
    </section>
    <!-- //banner section -->

    <!-- logo partners -->
    <section class="w3l-clients pt-5 pb-4" id="clients">
        <div class="container">
            <div class="company-logos text-center">
                <div class="row mx-auto justify-content-center">
                    <div class="col-md-2 col-sm-4 col-6 ">
                        <img src="{{ asset("template/assets/images/logo1.png") }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <img src="{{ asset("template/assets/images/logo2.png") }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-sm-0 mt-3">
                        <img src="{{ asset("template/assets/images/logo3.png") }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="{{ asset("template/assets/images/logo4.png") }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mt-md-0 mt-3">
                        <img src="{{ asset("template/assets/images/logo5.png") }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //logo partners -->

    <!-- grids section -->
    <section class="w3l-bottom-grids-6 pt-sm-5 pb-5" id="features">
        <div class="container pt-lg-4">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-md-3 col-sm-4 ps-xl-5">
                    <h4 class="ab-exper-count mb-sm-4 ps-lg-4">22</h4>
                    <p class="ab-content ps-lg-4">years of experience working</p>
                </div>
                <div class="col-xl-8 col-md-9 col-sm-8 offset-xl-1 ps-xl-0 pe-xl-5 mt-sm-0 mt-4">
                    <h3 class="title-style mb-sm-5 mb-4">I'm a designer & developer with a passion for web design</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 grids-feature">
                            <div class="area-box active">
                                <div class="icon-style">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">Creative Design</a></h4>
                                <a href="about.html" class="btn more p-0">Explore More<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                            <div class="area-box">
                                <div class="icon-style">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">Web Design</a></h4>
                                <a href="about.html" class="btn more p-0">Explore More<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                            <div class="area-box">
                                <div class="icon-style">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <h4><a href="#feature" class="title-head">Brand Identity</a></h4>
                                <a href="about.html" class="btn more p-0">Explore More<i
                                        class="fas fa-long-arrow-alt-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //grids section -->


    <!-- projects section -->
    <section class="w3l-gallery pb-5" id="gallery">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">Portfolio</h5>
                <h3 class="title-style">Some of my most recent projects</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <a href="{{ asset("template/assets/images/g1.jpg") }}" data-lightbox="example-set" data-title="Project 1"
                       class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{ asset("template/assets/images/g1.jpg") }}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 1</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 item mt-md-0 mt-4">
                    <a href="{{ asset("template/assets/images/g2.jpg") }}" data-lightbox="example-set" data-title="Project 2"
                       class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{ asset("template/assets/images/g2.jpg") }}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 2</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mt-lg-0 mt-4">
                    <a href="{{ asset("template/assets/images/g3.jpg") }}" data-lightbox="example-set" data-title="Project 3"
                       class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{ asset("template/assets/images/g3.jpg") }}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 3</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                    <a href="{{ asset("template/assets/images/g5.jpg") }}" data-lightbox="example-set" data-title="Project 4"
                       class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{ asset("template/assets/images/g5.jpg") }}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 4</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                    <a href="{{ asset("template/assets/images/g6.jpg") }}" data-lightbox="example-set" data-title="Project 5"
                       class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{ asset("template/assets/images/g6.jpg") }}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 5</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
                    <a href="{{ asset("template/assets/images/g4.jpg") }}" data-lightbox="example-set" data-title="Project 6"
                       class="zoom d-block">
                        <img class="card-img-bottom d-block" src="{{ asset("template/assets/images/g4.jpg") }}" alt="Card image cap">
                        <span class="overlay__hover"></span>
                        <span class="hover-content">
                            <span class="title">Project 6</span>
                            <span class="content">Quisque ut lectus, eros et, sed commodo risus.</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- //projects section -->

    <!-- home service section -->
    <section class="w3l-servicesblock1 py-5" id="services">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small mb-1">What i do?</h5>
                <h3 class="title-style">How I can help your next project</h3>
            </div>
            <div class="w3-services-grids py-lg-4">
                <div class="fea-gd-vv row">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-gd icon-yellow">
                            <div class="icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Web design<br> and development </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="feature-gd icon-vilot">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Mobile app<br> development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                        <div class="feature-gd icon-blue">
                            <div class="icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Android app<br> development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-md-5 mt-4">
                        <div class="feature-gd icon-red">
                            <div class="icon">
                                <i class="fab fa-php"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Php Web<br> development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-light-green">
                            <div class="icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">iOS App<br> development </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-light-blue">
                            <div class="icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">JQuery & Java<br> programming</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-dark-green">
                            <div class="icon">
                                <i class="fas fa-link"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">Blockchain<br> development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-5 mt-4">
                        <div class="feature-gd icon-pink">
                            <div class="icon">
                                <i class="fas fa-code-branch"></i>
                            </div>
                            <div class="icon-info">
                                <a href="#url">.net program<br> development</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="services.html" class="btn btn-style">Learn More</a>
            </div>
        </div>
    </section>
    <!-- //home service section -->

    <!-- testimonials section -->
    <section class="w3l-testimonials py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="{{ asset("template/assets/images/quote.png") }}" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Phillip Hunt</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="{{ asset("template/assets/images/c1.jpg") }}" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="{{ asset("template/assets/images/quote.png") }}" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Sara Grant</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="{{ asset("template/assets/images/c2.jpg") }}" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="{{ asset("template/assets/images/quote.png") }}" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Luke Jacobs</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="{{ asset("template/assets/images/c3.jpg") }}" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="message">
                                    <img src="{{ asset("template/assets/images/quote.png") }}" alt="" class="img-fluid mb-2" />
                                    <p><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sit id
                                            accusantium
                                            officia quod quasi necessitatibus perspiciatis Harum error provident
                                            quibusdam tenetur.</q></p>
                                    <div class="name mt-4 mb-4">
                                        <h4>Claire Olson</h4>
                                        <p>Subtitle goes here</p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="{{ asset("template/assets/images/c4.jpg") }}" class="img-fluid radius-image" alt="client">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials section -->

@endsection
