<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page . ' | '. $title ?></title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="../../site_file/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../site_file/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../site_file/css/line-awesome.css">
    <link rel="stylesheet" href="../../site_file/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../site_file/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../site_file/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../site_file/css/daterangepicker.css">
    <link rel="stylesheet" href="../../site_file/css/animate.min.css">
    <link rel="stylesheet" href="../../site_file/css/animated-headline.css">
    <link rel="stylesheet" href="../../site_file/css/jquery-ui.css">
    <link rel="stylesheet" href="../../site_file/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../site_file/css/style.css">
</head>
<body>
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-left">
                            <ul class="list-items">
                                <li><a href="#"><i class="la la-phone mr-1"></i>(123) 123-456</a></li>
                                <li><a href="#"><i class="la la-envelope mr-1"></i>trizen@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <div class="header-right-action">
                                <div class="select-contain select--contain w-auto">
                                    <select class="select-contain-select">
                                        <option data-content='<span class="flag-icon flag-icon-id mr-1"></span> Bahasa Indonesia'>Bahasa Indonesia</option>
                                        <option data-content='<span class="flag-icon flag-icon-de mr-1"></span> Deutsch'>Deutsch</option>
                                        <option data-content='<span class="flag-icon flag-icon-us mr-1"></span> English(US)' selected>English US</option>
                                        <option data-content='<span class="flag-icon flag-icon-gb-eng mr-1"></span> English(UK)'>English UK</option>
                                        <option data-content='<span class="flag-icon flag-icon-ro mr-1"></span> Romanian'>Romanian</option>
                                        <option data-content='<span class="flag-icon flag-icon-es mr-1"></span> Español'>Español</option>
                                      
                                    </select>
                                </div>
                            </div>
                            <div class="header-right-action">
                                <div class="select-contain select--contain w-auto">
                                    <select class="select-contain-select">
                                        <option value="1">AED</option>
                                        <option value="2">AUD</option>
                                        <option value="3">BRL</option>
                                        <option value="4">CAD</option>
                                        <option value="5">CHF</option>
                                        <option value="6">CNY</option>
                                        <option value="7">EUR</option>
                                        <option value="8">GBP</option>
    
                                    </select>
                                </div>
                            </div>
                            <div class="header-right-action">
                                    <!---  <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1" data-toggle="modal" data-target="#signupPopupForm">Sign Up</a> --->
                                    <a href="/login" class="theme-btn theme-btn-small" data-toggle="modal"
                                        data-target="#loginPopupForm">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu-wrapper padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                            <div class="logo">
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div><!-- end menu-toggler -->
                            </div><!-- end logo -->
                            <div class="main-menu-content">
                                <nav>
                                    <ul>
                                        <li><a href="/sites">Home</a></li>
                                        <li><a href="/about">About</a></li>
                                        <li>
                                            <a href="#"> Service<i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="/canopies">Canopies</a></li>
                                                <li><a href="/chairs">Chairs</a></li>
                                                <li><a href="/tables">Tables</a></li>
                                                <li><a href="/mattress">Mattress</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contact">Contact Us</a></li>
                                    </ul>
                                </nav>
                                

                            </div><!-- end main-menu-content -->
                            <div class="nav-btn">
                                <!----    <a href="become-local-expert.html" class="theme-btn">Become Local Expert</a>--->
                            </div><!-- end nav-btn -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-wrapper -->
     
</header>
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-9">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Our Services</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="/sites">Home</a></li>
                         
                            <li><a href="/sites">Our Services</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START SERVICE AREA
================================= -->
<section class="service-area section--padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Services We Provide</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-80px">
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-plane"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Flight Deals</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-anchor"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Amazing Tour</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-support"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Support Cases</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-briefcase"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">In Business</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-hotel"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Handpicked Hotels</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-user-secret"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Private Guide</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-map"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Location Manager</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-thumbs-up"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Best Travel Agent</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content-info mt-n4 d-flex justify-content-between align-items-center">
                    <p class="font-size-15">Do not hesitate to contact us for better help and service.</p>
                    <a href="contact.html" class="btn-text font-size-15">Contact us <i class="la la-arrow-right ml-1"></i></a>
                </div><!-- end tab-content-info -->
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end service-area -->
<!-- ================================
    END SERVICE AREA
================================= -->

<!-- ================================
    START SERVICE AREA
================================= -->
<section class="service-area section-bg section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Services Also We Offer</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="../../site_file/images/img9.jpg" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Mountains Tours</h3>
                        <p class="card-meta">
                            Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper.
                        </p>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$100.00</span>
                            </p>
                            <span class="tour-hour"><i class="la la-clock-o mr-1"></i>7 days</span>
                        </div>
                        <div class="btn-box pt-3">
                            <a href="#" class="theme-btn theme-btn-small">I want this</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="../../site_file/images/img10.jpg" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Honeymoons Tours</h3>
                        <p class="card-meta">
                            Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper.
                        </p>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$100.00</span>
                                <span class="price__num before-price color-text-3">$124.00</span>
                            </p>
                            <span class="tour-hour"><i class="la la-clock-o mr-1"></i>7 days</span>
                        </div>
                        <div class="btn-box pt-3">
                            <a href="#" class="theme-btn theme-btn-small">I want this</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="../../site_file/images/img11.jpg" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Sea Tours</h3>
                        <p class="card-meta">
                            Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper.
                        </p>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$100.00</span>
                            </p>
                            <span class="tour-hour"><i class="la la-clock-o mr-1"></i>7 days</span>
                        </div>
                        <div class="btn-box pt-3">
                            <a href="#" class="theme-btn theme-btn-small">I want this</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
             <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="../../site_file/images/img12.jpg" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Cruises Tours</h3>
                        <p class="card-meta">
                            Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper.
                        </p>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$100.00</span>
                            </p>
                            <span class="tour-hour"><i class="la la-clock-o mr-1"></i>7 days</span>
                        </div>
                        <div class="btn-box pt-3">
                            <a href="#" class="theme-btn theme-btn-small">I want this</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="../../site_file/images/img13.jpg" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Safari Tours</h3>
                        <p class="card-meta">
                            Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper.
                        </p>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$100.00</span>
                                <span class="price__num before-price color-text-3">$124.00</span>
                            </p>
                            <span class="tour-hour"><i class="la la-clock-o mr-1"></i>7 days</span>
                        </div>
                        <div class="btn-box pt-3">
                            <a href="#" class="theme-btn theme-btn-small">I want this</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="../../site_file/images/img14.jpg" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Jungle Tours</h3>
                        <p class="card-meta">
                            Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper.
                        </p>
                        <div class="card-rating">
                            <span class="badge text-white">4.4/5</span>
                            <span class="review__text">Average</span>
                            <span class="rating__text">(30 Reviews)</span>
                        </div>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">$100.00</span>
                            </p>
                            <span class="tour-hour"><i class="la la-clock-o mr-1"></i>7 days</span>
                        </div>
                        <div class="btn-box pt-3">
                            <a href="#" class="theme-btn theme-btn-small">I want this</a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end service-area -->
<!-- ================================
    END SERVICE AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">Subscribe to Get Updates & Offers</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text text-white">Enter email address</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your information is safe with us.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="index.html" class="foot__logo"><img src="images/logo.png" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">Morbi convallis bibendum urna ut viverra. Maecenas consequat</p>
                    <ul class="list-items pt-3">
                        <li>3015 Grand Ave, Coconut Grove,<br> Cerrick Way, FL 12345</li>
                        <li>+123-456-789</li>
                        <li><a href="#">trizen@yourwebsite.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Company</h4>
                    <ul class="list-items list--items">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="blog-grid.html">News</a></li>
                        <li><a href="contact.html">Support</a></li>
                        <li><a href="#">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Services</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Trizen.com Rewards</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">List My Hotel</a></li>
                        <li><a href="#">All Hotels</a></li>
                        <li><a href="#">TV Ads</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">USA Vacation Packages</a></li>
                        <li><a href="#">USA Flights</a></li>
                        <li><a href="#">USA Hotels</a></li>
                        <li><a href="#">USA Car Hire</a></li>
                        <li><a href="#">Create an Account</a></li>
                        <li><a href="#">Trizen Reviews</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block mt-4"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                    <p class="copy__desc">
                        &copy; Copyright Trizen 2020. Made with
                        <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                    <h3 class="title font-size-15 pr-2">We Accept</h3>
                    <img src="images/payment-img.png" alt="">
                </div><!-- end copy-right-content -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- Template JS Files -->
<script src="../../site_file/js/jquery-3.4.1.min.js"></script>
<script src="../../site_file/js/jquery-ui.js"></script>
<script src="../../site_file/js/popper.min.js"></script>
<script src="../../site_file/s/bootstrap.min.js"></script>
<script src="../../site_file/js/bootstrap-select.min.js"></script>
<script src="../../site_file/js/moment.min.js"></script>
<script src="../../site_file/js/daterangepicker.js"></script>
<script src="../../site_file/js/owl.carousel.min.js"></script>
<script src="../../site_file/js/jquery.fancybox.min.js"></script>
<script src="../../site_file/js/jquery.countTo.min.js"></script>
<script src="../../site_file/js/animated-headline.js"></script>
<script src="../../site_file/js/jquery.ripples-min.js"></script>
<script src="../../site_file/js/main.js"></script>
</body>
</html>