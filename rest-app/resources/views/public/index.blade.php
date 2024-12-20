@extends('layouts.guest')

@section('content')
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="landing-page"><span class="cursor"><span class="cursor-move-inner"><span class="cursor-inner"></span></span><span class="cursor-move-outer"><span class="cursor-outer"> </span></span></span>
        <!-- Page Body Start-->
        <div class="landing-home" id="home">
            <div class="container-fluid">
                <div class="sticky-header">
                    <header>
                        @include('components.front-menu')
                    </header>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="best-selling"><img class="img-fluid" src="../assets/images/landing/selling-product.png" alt="selling-product">
                            <div class="img-shadow"></div>
                        </div>
                        <div class="nft-marketplace"> <img class="img-fluid" src="../assets/images/landing/nft-marketplace.png" alt="nft-marketplace">
                            <div class="nft-marketplace-shadow"></div>
                        </div>
                        <div class="content text-center">
                            <div>
                                <h1 class="text-center">The Premium Choice<span class="d-flex align-items-center justify-content-center pt-2 sub-content"><span>Admin</span>
                      <button class="animate-button-slide"><span class="notification-slider"><span class="d-flex h-100"><span class="mb-0 f-w-400"> <span class="font-primary">Ecommerce</span></span><i class="icon-arrow-top-right f-light"> </i></span><span class="d-flex h-100"><span class="mb-0 f-w-400"><span class="f-light">PROJECT</span></span></span><span class="d-flex h-100"> <span class="mb-0 f-w-400"><span class="f-light">Default</span></span></span></span></button><span>HTML Template</span></span></h1>
                                <div class="arrow-animate">
                                    <svg>
                                        <use href="../assets/svg/icon-sprite.svg#animated-arrow"> </use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="user-content"> <span class="text-center">The incredible and user-friendly HTML was created using flexible, contemporary, and strong unique parts.</span></div>
                        <div class="star-animate"> <img class="img-fluid" src="../assets/images/landing/Vector.png" alt="Vector"></div>
                        <div class="screen-1"> <img class="img-fluid" src="../assets/images/landing/demo/dashboard-1.png" alt="dashboard-img"></div>
                        <div class="screen-2"> <img class="img-fluid sidebar-cuts-image" src="../assets/images/landing/sidebarcuts.png" alt="sidebarcuts">
                            <div class="screen-sidebar"></div>
                        </div>
                        <div class="total-revenue-img"><img class="img-fluid" src="../assets/images/landing/totalrevenue.png" alt="totalrevenue">
                            <div class="total-revenue-shadow"> </div>
                        </div>
                        <div class="star-img"> <img class="img-fluid start-animate fa-spin" src="../assets/images/landing/star.png" alt="star"></div>
                        <div class="new-user-img"><img class="img-fluid" src="../assets/images/landing/newuser.png" alt="new-user">
                            <div class="new-user-shadow"> </div>
                        </div>
                        <div class="star-img-left">  <img class="img-fluid start-animate-rotate fa-spin" src="../assets/images/landing/star.png" alt="star"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- demo section  -->
        <section class="demo-section section-py-space" id="demo">
            <div class="title text-center">
                <h5>Trending & Clean Design Collection</h5>
                <h2 class="mb-lg-2 mb-0">Creative & Unique Admin Layout</h2>
            </div>
            <div class="container">
                <div class="row demo-block demo-imgs">
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box dashboard-images">
                            <div class="layout-name">
                                <div class="riho-demo-img">
                                    <ul class="dot-group">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div><a href="index.html" target="_blank">Default Dashboard</a>
                            </div>
                            <div class="img-wrraper"><a href="index.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/demo/1.jpg" alt=""></a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box dashboard-images">
                            <div class="layout-name">
                                <div class="riho-demo-img">
                                    <ul class="dot-group">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div><a href="dashboard-02.html" target="_blank">Ecommerce Dashboard</a>
                            </div>
                            <div class="img-wrraper"><a href="dashboard-02.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/demo/2.jpg" alt=""></a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="demo-box dashboard-images">
                            <div class="layout-name">
                                <div class="riho-demo-img">
                                    <ul class="dot-group">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div><a href="dashboard-03.html" target="_blank">Project Dashboard</a>
                            </div>
                            <div class="img-wrraper"> <a href="dashboard-03.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/demo/3.jpg" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--frameworks start-->
        <section class="framework section-py-space light-bg">
            <div class="container-lg container-fluid">
                <div class="row">
                    <div class="col-sm-12 wow pulse">
                        <div class="title text-center">
                            <h5>10+ frameworks available</h5>
                            <h2 class="mb-lg-2 mb-0">Top Frameworks</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 framworks">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                <ul class="framworks-list">
                                    <li class="box wow fadeInUp">
                                        <div><img src="../assets/images/landing/icon/html/bootstrap.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Bootstrap 5</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="../assets/images/landing/icon/html/css.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">CSS</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="../assets/images/landing/icon/html/sass.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Sass</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="../assets/images/landing/icon/html/pug.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Pug</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="../assets/images/landing/icon/html/npm.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">NPM</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="../assets/images/landing/icon/html/charts.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Charts</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="../assets/images/landing/icon/html/gulp.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Gulp</h5>
                                    </li>
                                    <li class="box wow fadeInUp">
                                        <div><img src="../assets/images/landing/icon/html/web-pack.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Web pack</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="../assets/images/landing/icon/html/kit.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Starter Kit</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="../assets/images/landing/icon/html/uikits.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">40+ UI Kits</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="../assets/images/landing/icon/html/builders.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Builders</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="../assets/images/landing/icon/html/iconset.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">11 Icon Sets</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="../assets/images/landing/icon/html/forms.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Forms</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="../assets/images/landing/icon/html/table.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">Tables</h5>
                                    </li>
                                    <li class="box wow bounceIn">
                                        <div><img src="../assets/images/landing/icon/html/apps.png" alt=""></div>
                                        <h5 class="mb-0 f-w-600">17+ Apps</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Applications start-->
        <section class="application-section section-py-space application-sec" id="Applications">
            <div class="title text-center">
                <h5>Usefull Application</h5>
                <h2 class="mb-lg-2 mb-0">Fast & Powerful Applications </h2>
            </div>
            <div class="container">
                <div class="row demo-block">
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"> <a href="social-app.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/1.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title">           <a class="btn btn-primary" href="social-app.html" target="_blank">Social App</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="knowledgebase.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/2.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"> <a class="btn btn-primary" href="knowledgebase.html" target="_blank">Knowledgebase                           </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="support-ticket.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/3.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn btn-primary" href="support-ticket.html" target="_blank">Support Ticket                           </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"> <a href="letter-box.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/4.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn btn-primary" href="letter-box.html" target="_blank">Email Dashboard                           </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="to-do.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/5.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title">                  <a class="btn btn-primary" href="to-do.html" target="_blank">To-Do</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="job-cards-view.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/6.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn btn-primary" href="job-cards-view.html" target="_blank">Job Search                           </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="product.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/7.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn btn-primary" href="product.html" target="_blank">Ecommerce                           </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="kanban.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/8.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn btn-primary" href="kanban.html" target="_blank">Kanban                           </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="file-manager.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/9.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn btn-primary" href="file-manager.html" target="_blank">File Manager                           </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="projects.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/10.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn btn-primary" href="projects.html" target="_blank">Project </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="contacts.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/11.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn btn-primary" href="contacts.html" target="_blank">Contacts                           </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow pulse">
                        <div class="app-box">
                            <div class="img-wrraper"><a href="private-chat.html" target="_blank"><img class="img-fluid" src="../assets/images/landing/application/12.jpg" alt=""></a></div>
                            <div class="demo-detail">
                                <div class="demo-title"><a class="btn btn-primary" href="private-chat.html" target="_blank">Chat</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--choose Riho -->
        <section class="section-py-space feature-section" id="framework">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow pulse">
                        <div class="title text-center">
                            <h5>Why you choose Riho</h5>
                            <h2 class="mb-lg-2 mb-0">Unique Features </h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xxl-3 col-lg-4 col-sm-6 mb-4">
                        <div class="feature-box common-card bg-feature">
                            <div class="feature-icon bg-white">
                                <div><img src="../assets/images/landing/feature-icon/1.svg" alt="feature-icon"></div>
                            </div>
                            <h5 class="text-center">Quality & Clean Code</h5>
                            <p class="mb-0 f-light">All you need to know of using clean code as a manager to make your team and your software awesome.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature">
                            <div class="feature-icon bg-white">
                                <div><img src="../assets/images/landing/feature-icon/2.svg" alt="feature-icon"></div>
                            </div>
                            <h5 class="text-center">Bootstrap v5.0 </h5>
                            <p class="mb-0 f-light">Powerful feature-packed frontend toolkit. Build and customize with Sass, utilize prebuilt grid system.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature">
                            <div class="feature-icon bg-white">
                                <div><img src="../assets/images/landing/feature-icon/3.svg" alt="feature-icon"></div>
                            </div>
                            <h5 class="text-center">Handmade Icons</h5>
                            <p class="mb-0 f-light">let’s learn how to svg icons in riho admin template, handmade icons different materials.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature">
                            <div class="feature-icon bg-white">
                                <div><img src="../assets/images/landing/feature-icon/4.svg" alt="feature-icon"></div>
                            </div>
                            <h5 class="text-center">Limitless Components</h5>
                            <p class="mb-0 f-light">The limitless layout collection and UI kit biggest collection of layouts for web design.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature">
                            <div class="feature-icon bg-white">
                                <div><img src="../assets/images/landing/feature-icon/5.svg" alt="feature-icon"></div>
                            </div>
                            <h5 class="text-center">Easy Customizable</h5>
                            <p class="mb-0 f-light">Easy Step-By-Step Guide for Beginners.customize your layout, settings and content.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature">
                            <div class="feature-icon bg-white">
                                <div><img src="../assets/images/landing/feature-icon/6.svg" alt="feature-icon"></div>
                            </div>
                            <h5 class="text-center">Responsive </h5>
                            <p class="mb-0 f-light">Use Responsive Design to Connect with all Device designing your website for mobile devices.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature">
                            <div class="feature-icon bg-white">
                                <div><img src="../assets/images/landing/feature-icon/7.svg" alt="feature-icon"></div>
                            </div>
                            <h5 class="text-center">Premium Support</h5>
                            <p class="mb-0 f-light">We are always be their for your support and you are facing some issues you can create ticket.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature">
                            <div class="feature-icon bg-white">
                                <div><img src="../assets/images/landing/feature-icon/8.svg" alt="feature-icon"></div>
                            </div>
                            <h5 class="text-center">Colors Options</h5>
                            <p class="mb-0 f-light">Riho provide unlimited main color option.other colors you can change easily using scss variables.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="unique-cards section-py-space light-bg position-relative">
            <div class="support-title">
                <h2>we give it as we think that excellent support is needed</h2>
                <p>“fast issue resolution, and dedicated experts for a seamless experience”</p>
                <div class="premium-button"> <a class="txt-light btn bg-primary f-w-700 support-button" href="https://support.pixelstrap.com/portal/en/signin" target="_blank">Premium Support</a></div>
            </div>
            <div class="pricing-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 support-img"> <img class="img-fluid" src="../assets/images/landing/unique.png" alt="">
                            <h4>Premium Support</h4>
                            <div class="license-title">
                                <h3>Our License</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="marquee">
                <div class="marquee-name">
                    <p class="big-title">Premium Support. Our License . Premium Support .</p>
                </div>
            </div>
        </section>
        <section class="landing-footer section-py-space" id="footer">
            <div class="custom-container">
                <div class="row p-0 m-0">
                    <div class="col-12">
                        <div class="footer-contain">
                            <div class="rating-wrraper"><img class="img-fluid" src="../assets/images/logo/logo.png" alt="logo"></div>
                            <h2 class="f-w-600">"Riho Globally Trusted HTML Admin Theme"</h2>
                            <p class="f-w-500">Copyright 2024-25 © Riho All rights reserved.</p>
                            <ul class="star-rate">
                                <li><i class="fa fa-star font-warning"></i></li>
                                <li><i class="fa fa-star font-warning"></i></li>
                                <li><i class="fa fa-star font-warning"></i></li>
                                <li><i class="fa fa-star font-warning">   </i></li>
                                <li> <i class="fa fa-star font-warning"> </i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
