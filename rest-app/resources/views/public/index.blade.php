@extends('layouts.guest')

@section('content')

    <!-- LOADER -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- OUTER BG WRAPPER -->
    <div class="bg-outer-wrapper position-relative float-left w-100 background-f7f9ff">
        <!-- HEADER SECTION -->
        <header class="w-100 float-left header-con main-box">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <figure class="mb-0">
                            <img src="{{asset('assets/website/images/logo.png')}}" alt="logo-icon">
                        </figure>
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link p-0" href="#ourMenu">Our Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-0" href="#reserveTable">Reserve a table</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-0" href="#testimonials">Testimonials</a>
                            </li>
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link dropdown-toggle p-0" href="blog.html" id="navbarDropdown4" role="button"--}}
{{--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown4">--}}
{{--                                    <a class="dropdown-item" href="blog.html">Blog</a>--}}
{{--                                    <a class="dropdown-item" href="load-more.html">Load More</a>--}}
{{--                                    <a class="dropdown-item" href="single-blog.html">Single Blog</a>--}}
{{--                                    <a class="dropdown-item" href="one-column.html">One Column</a>--}}
{{--                                    <a class="dropdown-item" href="two-column.html">Two Column</a>--}}
{{--                                    <a class="dropdown-item" href="three-column.html">Three Column</a>--}}
{{--                                    <a class="dropdown-item" href="three-colum-sidbar.html">Three Column Sidbar</a>--}}
{{--                                    <a class="dropdown-item" href="four-column.html">Four Column</a>--}}
{{--                                    <a class="dropdown-item" href="six-colum-full-wide.html">Six Column</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                            <li class="nav-item">
                                <a class="nav-link p-0" href="/contact">Contact</a>
                            </li>
                        </ul>
                        <!-- navbar collapse -->
                    </div>
                    <div class="header-contact">
                        <ul class="list-unstyled mb-0">

                            <li class="d-inline-block btn-listing"><a href="#reserveTable" class="contact-btn d-inline-block">Book
                                    Now</a></li>
                            <!-- list unstyled -->
                        </ul>
                        <!-- header contact -->
                    </div>
                </nav>
                <!-- container -->
            </div>
            <!-- header-con -->
        </header>
        <!-- BANNER SECTION -->
        <section class="float-left w-100 banner-con postion-relative main-box">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
          <span class="d-block text-white off-tag barlow-font font-weight-bold">30%
            <span class="d-block text-white barlow-font font-weight-bold span-off"> OFF</span></span>
                        <!--  -->
                        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0">
                                    <figure><img src="{{asset('assets/website/images/banner-smol-img2.png')}}" alt="image"></figure>
                                </li>
                                <li data-target="#carouselExampleIndicators" class="active" data-slide-to="1">
                                    <figure><img src="{{asset('assets/website/images/banner-smol-img1.png')}}" alt="image"></figure>
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                    <figure><img src="{{asset('assets/website/images/banner-smol-img3.png')}}" alt="image"></figure>
                                </li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <figure><img src="{{asset('assets/website/images/banner-img1.png')}}" alt="image" class="img-fluid"></figure>
                                </div>
                                <div class="carousel-item">
                                    <figure><img src="{{asset('assets/website/images/banner-img2.png')}}" alt="image" class="img-fluid"></figure>
                                </div>

                                <div class="carousel-item">
                                    <figure><img src="{{asset('assets/website/images/banner-img3.png')}}" alt="image" class="img-fluid"></figure>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <!-- col -->
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="banner-content-con">
                            <span class="d-block navy-text playfair-font position-relative">Welcome to our</span>
                            <h1 class="navy-text"><span class="d-block green-text">Cozy</span>Restaurant</h1>
                            <p class="font-weight-light">A restaurant located in the heart of Derby!
                            </p>

                            <div class="secondary-button d-inline-block">
                                <a href="#ourMenu" class="d-inline-block">Our Menu</a>
                            </div>
                            <!-- banner content con -->
                        </div>
                        <!-- col -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- banner con -->
        </section>
        <!-- bg outer wrapper -->
    </div>

    <!-- CATEGORIES SECION  -->
    <section class="float-left w-100 position-relative categories-con padding-top padding-bottom main-box">
        <figure class=""><img src="{{asset('assets/website/images/vector.png')}}" alt="vector" class="position-absolute vector"></figure>
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="category-box var1 w-100 position-relative" style="background-image: url({{asset('assets/website/images/burgers.jpg')}})">
                        <div class="category-content z-index-1 position-relative">
                            <h3 class="text-white">Burgers</h3>
                            <p class="text-white">Duis aute irure dolor in reprehenderit vole.</p>
                            <!-- category content -->
                        </div>
                        <!-- category box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="category-box var2 w-100 position-relative" style="background-image: url({{asset('assets/website/images/fries.jpg')}})">
                        <div class="category-content z-index-1 position-relative">
                            <h3 class="text-white">Fries</h3>
                            <p class="text-white">Duis aute irure dolor in reprehenderit vole.</p>
                            <!-- category content -->
                        </div>
                        <!-- category box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="category-box var3 w-100 position-relative" style="background-image: url({{asset('assets/website/images/drinks.jpg')}})">
                        <div class="category-content z-index-1 position-relative float-right">
                            <h3 class="text-white">Drinks</h3>
                            <p class="text-white">Duis aute irure dolor in reprehenderit vole.</p>
                            <!-- category content -->
                        </div>
                        <!-- category box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="category-box var4 w-100 position-relative" style="background-image: url({{asset('assets/website/images/sandwiches.jpg')}})">
                        <div class="category-content z-index-1 position-relative float-right">
                            <h3 class="text-white">Sandwich</h3>
                            <p class="text-white">Duis aute irure dolor in reprehenderit vole.</p>
                            <!-- category content -->
                        </div>
                        <!-- category box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- categories con -->
    </section>



    <!-- OUR MENU SECTION -->
    <section id="ourMenu" class="float-left w-100 position-relative our-menu-con padding-top padding-bottom main-box background-f7f9ff">
        <figure class=""><img src="{{asset('assets/website/images/vector1.png')}}" alt="vector" class="position-absolute vector"></figure>
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text green-text playfair-font font-weight-light">All Items</span>
                <h2 class="mb-0">Explore Our Menu</h2>
                <!-- heading title con -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex left-side flex-column">
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{asset('assets/website/images/thai-noodles.png')}}" alt="thai noodles"></figure>
                        <div class="menu-content">
                            <h4>Thai Noodles <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$30</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{asset('assets/website/images/menu-img2.png')}}" alt="image"></figure>
                        <div class="menu-content">
                            <h4>Italian Pasta <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$50</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{asset('assets/website/images/menu-img3.png')}}" alt="image"></figure>
                        <div class="menu-content">
                            <h4>Cajun Chicken <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$90</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-6 col-md-6 d-flex right-side flex-column">
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{asset('assets/website/images/menu-img4.png')}}" alt="image"></figure>
                        <div class="menu-content">
                            <h4>Fresh Salad <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$20</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{asset('assets/website/images/menu-img5.png')}}" alt="image"></figure>
                        <div class="menu-content">
                            <h4>French Fries <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$60</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <div class="menu-box w-100 position-relative d-flex align-items-center justify-content-between">
                        <figure><img src="{{asset('assets/website/images/menu-img6.png')}}" alt="image"></figure>
                        <div class="menu-content">
                            <h4>Crispy Burger <span
                                    class="d-inline-block float-right green-text price barlow-font font-weight-600">$70</span>
                            </h4>
                            <p>Quia voluptas sit aspernatur aut odit aut fugit</p>
                            <!-- menu content -->
                        </div>
                        <!-- menu box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <div class="float-left w-100 text-center view-all-item-con">
                <div class="secondary-button d-inline-block">
                    <a href="/menu" class="d-inline-block">View the Entire Menu</a>
                </div>
                <!-- view all item con -->
            </div>
            <!-- container -->
        </div>
        <!-- our menu con -->
    </section>

    <!-- TESTIMONIALS SECTION -->
    <div id="testimonials" class="float-left w-100 position-relative testimonials-con padding-top padding-bottom main-box">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="testimonial-img-con position-relative">
                        <figure><img src="{{asset('assets/website/images/testimonial-img.jpg')}}" alt="image"
                                     class="img-fluid border-radius5 z-index-1 position-relative img1">
                        </figure>
                        <figure><img src="{{asset('assets/website/images/green-elipse.png')}}" alt="image" class="position-absolute green-elipse"></figure>
                        <!-- testimonial img con -->
                    </div>

                    <!-- col -->
                </div>
                <div class="col-lg-7 col-md-7">
                    <!-- OWL CAROUSEL -->
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="project-testimonial-content-con">
                                <figure><img src="{{asset('assets/website/images/testimonial-quote-icon.png')}}" alt="icon" class="img-fluid quote-icon">
                                </figure>
                                <p class="font-italic">”Quisquam est, qui dolorem ipsum quia dolor sit
                                    consectetur adipisci velit sed quia non numquam
                                    eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem”</p>
                                <img src="{{asset('assets/website/images/testimonials-stars.png')}}" alt="stars" class="img-fluid stars">
                                <span class="d-inline-block green-text playfair-font font-weight-bold name">Alina Parker</span> <span
                                    class="d-inline-block designation playfair-font font-weight-bold">Ceo, GTD</span>
                                <!-- project testimonial content con -->
                            </div>
                            <!-- item -->
                        </div>
                        <div class="item">
                            <div class="project-testimonial-content-con">
                                <figure><img src="{{asset('assets/website/images/testimonial-quote-icon.png')}}" alt="icon" class="img-fluid quote-icon">
                                </figure>
                                <p class="font-italic">”Quisquam est, qui dolorem ipsum quia dolor sit
                                    consectetur adipisci velit sed quia non numquam
                                    eius modi tempora incidunt ut labore et dolore
                                    magnam aliquam quaerat voluptatem”</p>
                                <img src="{{asset('assets/website/images/testimonials-stars.png')}}" alt="stars" class="img-fluid stars">
                                <span class="d-inline-block green-text playfair-font font-weight-bold name">Alina Parker</span> <span
                                    class="d-inline-block designation playfair-font font-weight-bold">Ceo, GTD</span>
                                <!-- project testimonial content con -->
                            </div>
                            <!-- item -->
                        </div>
                        <!-- owl carousel -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
    </div>

    <!-- RESERVE A TABLE SECTION -->
    <section id="reserveTable"
        class="float-left w-100 position-relative padding-top padding-bottom main-box reserve-table-con background-f7f9ff">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="heading-title-con text-center">
                <span class="d-block special-text green-text playfair-font font-weight-light">Book Now</span>
                <h2 class="mb-0">Reserve a Table </h2>
                <!-- heading title con -->
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <form class="main-form text-center" method="post" id="contactpage">
                        <ul class="list-unstyled p-0 float-left w-100">
                            <li>
                                <input type="text" placeholder="Name" name="fname" id="fname">
                            </li>
                            <li>
                                <input type="tel" placeholder="Phone" name="phone" id="phone">
                            </li>
                            <li>
                                <input type="email" placeholder="Email" name="email" id="email">
                            </li>
                            <li>
                                <input type="date" name="date" id="date">
                            </li>
                            <li>
                                <input type="time" name="time" id="time">
                            </li>
                            <li>
                                <input type="number" placeholder="Members" name="member" id="member">
                            </li>
                        </ul>
                        <div class="secondary-button d-inline-block">
                            <button type="submit" id="submit">Book Now</button>
                        </div>
                    </form>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <div class="float-left w-100 position-relative footer-con main-box background-f7f9ff">
        <figure><img src="{{asset('assets/website/images/footer-vector.png')}}" alt="vector" class="position-absolute vector"></figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="footer-inner-con opening-hrz">
                        <span class="text-white span-heading d-block playfair-font">Opening Hours</span>
                        <ul class="list-unstyled p-0 m-0">
                            <li class="position-relative">
                                <span class="d-block sub-head days barlow-font">Monday – Saturday </span>
                                <p class="mb-0"> 12.00 – 00.00</p>
                            </li>
                            <li class="position-relative mb-0">
                                <span class="d-block sub-head days barlow-font">Sunday</span>
                                <p class="mb-0"> 14.30 – 00.00</p>
                            </li>
                            <!-- list unstyled -->
                        </ul>
                        <!-- footer inner con -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-inner-con">
                        <span class="text-white span-heading d-block playfair-font">Useful Links</span>
                        <ul class="list-unstyled p-0 m-0">
                            <li class="position-relative"><a href="#ourMenu" class="d-inline-block">Our menu</a></li>
                            <li class="position-relative"><a href="#testimonials" class="d-inline-block">Testimonials</a></li>
                            <li class="position-relative"><a href="#reserveTable" class="d-inline-block">Reserve a Table</a></li>
                            <li class="position-relative"><a href="/contact" class="d-inline-block">Contact</a></li>
                            <!-- list unstyled -->
                        </ul>
                        <!-- footer inner con -->
                    </div>
                    <!-- col -->
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-inner-con var3">
                        <span class="text-white span-heading d-block playfair-font">Our Information</span>
                        <ul class="list-unstyled p-0 m-0">
                            <li class="position-relative">
                                <span class="d-block sub-head barlow-font">Address: </span>
                                <p class="mb-0">25 Queen St, Derby, DE1 3DS <br>
                                    England</p>
                            </li>
                            <li class="position-relative">
                                <span class="d-block sub-head barlow-font">Email:</span>
                                <a href="mailto:info@foodzey.com">info@rest.io</a>
                            </li>
                            <li class="position-relative mb-0">
                                <span class="d-block sub-head barlow-font">Phone:</span>
                                <a href="tel:+123456789">+1 23 45 6789</a>
                            </li>
                            <!-- list unstyled -->
                        </ul>

                        <!-- footer inner con -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <hr>
            <div class="float-left w-100 copyright-con d-flex align-items-center main-box">
                <p class="mb-0">Copyright 2025, Foodzey. All Rights Reserved.</p>
                <div class="social-icons-con d-flex">
                    <span class="d-inline-block follow-us">Follow Us:</span>
                    <ul class="list-unstyled p-0 d-flex align-items-center mb-0">
                        <li><a href="https://www.facebook.com/login/"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.pinterest.com/" class="mr-0"><i class="fa-brands fa-pinterest"></i></a></li>
                        <li><a href="https://www.instagram.com/" class="mr-0"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                    <!-- social icons con -->
                </div>
                <!-- copyright con -->
            </div>
            <!-- container -->
        </div>
        <!-- footer con -->
    </div>
@endsection
