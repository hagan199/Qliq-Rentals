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
                                        <option data-content='<span class="flag-icon flag-icon-fr mr-1"></span> Francais'>Francais</option>
                                        <option data-content='<span class="flag-icon flag-icon-it mr-1"></span> Italiano'>Italiano</option>
                                        <option data-content='<span class="flag-icon flag-icon-pl mr-1"></span> Polski'>Polski</option>
                                        <option data-content='<span class="flag-icon flag-icon-pt mr-1"></span> Portuguese'>Portuguese</option>
                                        <option data-content='<span class="flag-icon flag-icon-tr mr-1"></span> Turkish'>Turkish</option>
                                        <option data-content='<span class="flag-icon flag-icon-ru mr-1"></span> Russian'>Russian</option>
                                        <option data-content='<span class="flag-icon flag-icon-jp mr-1"></span> Japanese'>Japanese</option>
                                        <option data-content='<span class="flag-icon flag-icon-cn mr-1"></span> Mandarin'>Mandarin</option>
                                        <option data-content='<span class="flag-icon flag-icon-tw mr-1"></span> Mandarin Chinese'>Mandarin Chinese</option>
                                        <option data-content='<span class="flag-icon flag-icon-kr mr-1"></span> Korean'>Korean</option>
                                        <option data-content='<span class="flag-icon flag-icon-in mr-1"></span> Hindi'>Hindi</option>
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
                                        <option value="9">HKD</option>
                                        <option value="10">IDR</option>
                                        <option value="11">INR</option>
                                        <option value="12">JPY</option>
                                        <option value="13">KRW</option>
                                        <option value="14">MYR</option>
                                        <option value="15">NZD</option>
                                        <option value="16">PHP</option>
                                        <option value="17">PLN</option>
                                        <option value="18">RUB</option>
                                        <option value="19">SAR</option>
                                        <option value="20">SGD</option>
                                        <option value="21">THB</option>
                                        <option value="22">TRY</option>
                                        <option value="23">TWD</option>
                                        <option value="24" selected>USD</option>
                                        <option value="25">VND</option>
                                        <option value="26">MXN</option>
                                        <option value="27">ARS</option>
                                        <option value="28">INR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="header-right-action">
                                <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1" data-toggle="modal" data-target="#signupPopupForm">Sign Up</a>
                                 <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#loginPopupForm">Login</a>
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
                                        <li><a href="/contact"></a>Contact Us</a></li>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-50 text-white">Qi Rentals is Your Trusted <br> Travel Companion.</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
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
    START INFO AREA
================================= -->
<section class="info-area padding-top-100px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <div class="card-item" data-toggle="tooltip" data-placement="top" title="hello word">
                    <div class="card-img">
                        <img src="../../site_file/images/img21.jpg" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Who We Are?</h3>
                        <p class="card-text">
                            Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper donec luctus.
                        </p>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="../../site_file/images/img22.jpg" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">What We Do?</h3>
                        <p class="card-text">
                            Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper donec luctus.
                        </p>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item ">
                    <div class="card-img">
                        <img src="../../site_file/images/img23.jpg" alt="about-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mb-2">Our Mission</h3>
                        <p class="card-text">
                            Duis cursus lectus sed dui imperdiet, id pharetra nunc ullamcorper donec luctus.
                        </p>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->

<!-- ================================
    START ABOUT AREA
================================= -->
<section class="about-area padding-bottom-90px overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading margin-bottom-40px">
                    <h2 class="sec__title">About Us</h2>
                    <h4 class="title font-size-16 line-height-26 pt-4 pb-2">Since 2002, TRIZEN has been revolutionising the travel industry. Metasearch for travel? No one was doing it. Until we did.</h4>
                    <p class="sec__desc font-size-16 pb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                    <p class="sec__desc font-size-16 pb-3">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                    <p class="sec__desc font-size-16">Vivamus a mauris vel nunc tristique volutpat. Aenean eu faucibus enim. Aenean blandit arcu lectus, in cursus elit porttitor non. Curabitur risus eros, </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-5 ml-auto">
                <div class="image-box about-img-box">
                    <img src="../../site_file/images/img24.jpg" alt="about-img" class="img__item img__item-1">
                    <img src="../../site_file/images/img25.jpg" alt="about-img" class="img__item img__item-2">
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!-- ================================
    END ABOUT AREA
================================= -->

<!-- ================================
    STAR FUNFACT AREA
================================= -->
<section class="funfact-area padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Our Numbers Say Everything</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="counter-box counter-box-2 margin-top-60px mb-0">
            <div class="row">
                <div class="col-lg-3 responsive-column">
                    <div class="counter-item counter-item-layout-2 d-flex">
                        <div class="counter-icon flex-shrink-0">
                            <i class="la la-users"></i>
                        </div>
                        <div class="counter-content">
                            <div>
                                <span class="counter" data-from="0" data-to="200"  data-refresh-interval="5">0</span>
                                <span class="count-symbol">+</span>
                            </div>
                            <p class="counter__title">Partners</p>
                        </div><!-- end counter-content -->
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="counter-item counter-item-layout-2 d-flex">
                        <div class="counter-icon flex-shrink-0">
                            <i class="la la-building"></i>
                        </div>
                        <div class="counter-content">
                            <div>
                                <span class="counter" data-from="0" data-to="3"  data-refresh-interval="5">0</span>
                                <span class="count-symbol">k</span>
                            </div>
                            <p class="counter__title">Properties</p>
                        </div><!-- end counter-content -->
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="counter-item counter-item-layout-2 d-flex">
                        <div class="counter-icon flex-shrink-0">
                            <i class="la la-globe"></i>
                        </div>
                        <div class="counter-content">
                            <div>
                                <span class="counter" data-from="0" data-to="400"  data-refresh-interval="5">0</span>
                                <span class="count-symbol">+</span>
                            </div>
                            <p class="counter__title">Destinations</p>
                        </div><!-- end counter-content -->
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="counter-item counter-item-layout-2 d-flex">
                        <div class="counter-icon flex-shrink-0">
                            <i class="la la-check-circle"></i>
                        </div>
                        <div class="counter-content">
                            <div>
                                <span class="counter" data-from="0" data-to="40"  data-refresh-interval="5">0</span>
                                <span class="count-symbol">k</span>
                            </div>
                            <p class="counter__title">Booking</p>
                        </div><!-- end counter-content -->
                    </div><!-- end counter-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end counter-box -->
    </div><!-- end container -->
</section>
<!-- ================================
    END FUNFACT AREA
================================= -->

<!-- ================================
       START TESTIMONIAL AREA
================================= -->
<section class="testimonial-area section-bg section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h2 class="sec__title line-height-50">What our customers are saying us?</h2>
                    <p class="sec__desc padding-top-30px">
                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero
                    </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-8">
                <div class="testimonial-carousel carousel-action">
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident des.</p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/team8.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Leroy Bell</h4>
                                <span class="author__meta">United States</span>
                                <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident des.</p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="../../site_file/images/team9.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Richard Pam</h4>
                                <span class="author__meta">Canada</span>
                                <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident des.</p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="../../site_file/images/team10.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Luke Jacobs</h4>
                                <span class="author__meta">Australia</span>
                                <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end testimonial-card -->
                    <div class="testimonial-card">
                        <div class="testi-desc-box">
                            <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident des.</p>
                        </div>
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="../../site_file/images/team8.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <h4 class="author__title">Chulbul Panday</h4>
                                <span class="author__meta">Italy</span>
                                <span class="ratings d-flex align-items-center">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end testimonial-card -->
                </div><!-- end testimonial-carousel -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonial-area -->
<!-- ================================
       START TESTIMONIAL AREA
================================= -->

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area padding-top-100px padding-bottom-60px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title">Our Dedicated Team</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-100px">
            <div class="col-lg-4 responsive-column">
                <div class="card-item team-card">
                    <div class="card-img">
                        <img src="../../site_file/images/team1.jpg" alt="team-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">David Roberts</h3>
                        <p class="card-meta">Founder & Director</p>
                        <p class="card-text font-size-15 pt-2">Ligula vehicula enenatis semper, magna lorem aliquet lacusin ante dapibus dictum fugats vitaes nemo minima.</p>
                        <ul class="social-profile padding-top-20px pb-2">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item team-card">
                    <div class="card-img">
                        <img src="../../site_file/images/team2.jpg" alt="team-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Augusta Silva</h3>
                        <p class="card-meta">Chief Operating Officer</p>
                        <p class="card-text font-size-15 pt-2">Ligula vehicula enenatis semper, magna lorem aliquet lacusin ante dapibus dictum fugats vitaes nemo minima.</p>
                        <ul class="social-profile padding-top-20px pb-2">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item team-card">
                    <div class="card-img">
                        <img src="../../site_file/images/team3.jpg" alt="team-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Bernice Lucas</h3>
                        <p class="card-meta">Account Manager</p>
                        <p class="card-text font-size-15 pt-2">Ligula vehicula enenatis semper, magna lorem aliquet lacusin ante dapibus dictum fugats vitaes nemo minima.</p>
                        <ul class="social-profile padding-top-20px pb-2">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
             <div class="col-lg-4 responsive-column">
                <div class="card-item team-card">
                    <div class="card-img">
                        <img src="../../site_file/images/team4.jpg" alt="team-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">David Jackson</h3>
                        <p class="card-meta">Sales Support</p>
                        <p class="card-text font-size-15 pt-2">Ligula vehicula enenatis semper, magna lorem aliquet lacusin ante dapibus dictum fugats vitaes nemo minima.</p>
                        <ul class="social-profile padding-top-20px pb-2">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item team-card">
                    <div class="card-img">
                        <img src="../../site_file/images/team5.jpg" alt="team-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Kyle Martin</h3>
                        <p class="card-meta">Order Manager</p>
                        <p class="card-text font-size-15 pt-2">Ligula vehicula enenatis semper, magna lorem aliquet lacusin ante dapibus dictum fugats vitaes nemo minima.</p>
                        <ul class="social-profile padding-top-20px pb-2">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item team-card">
                    <div class="card-img">
                        <img src="../../site_file/images/team6.jpg" alt="team-img">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Evan Porter</h3>
                        <p class="card-meta">Head of Design</p>
                        <p class="card-text font-size-15 pt-2">Ligula vehicula enenatis semper, magna lorem aliquet lacusin ante dapibus dictum fugats vitaes nemo minima.</p>
                        <ul class="social-profile padding-top-20px pb-2">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area cta-bg-2 bg-fixed section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title mb-3 text-white">Interested in a career <br> at Trizen.</h2>
                    <p class="sec__desc text-white">We’re always looking for talented individuals and
                        <br> people who are hungry to do great work.
                    </p>
                </div><!-- end section-heading -->
                <div class="btn-box padding-top-35px">
                    <a href="#" class="theme-btn border-0">Join Our Team</a>
                </div>
            </div><!-- end col-lg-12 -->
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
                <div class="col-lg-4 responsive-column">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <a href="index.html" class="foot__logo"><img src="../../site_file/images/logo.png"
                                    alt="logo"></a>
                        </div><!-- end logo -->
                        <p class="footer__desc">Best Service Rental</p>
                        <ul class="list-items pt-3">
                            <li>Anija,<br>Blue Water</li>
                            <li>+(233) 241 977 529</li>
                            <li><a href="#">info@Qirentals.com</a></li>
                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Company</h4>
                        <ul class="list-items list--items">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="services.html">Services</a></li>

                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                        <ul class="list-items list--items">
                            <li><a href="#">About Qi Rentals</a></li>
                            <li><a href="#">Canopies</a></li>
                            <li><a href="#">Tables</a></li>
                            <li><a href="#">Mattress</a></li>
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
                            &copy; Copyright Qliq 2021. Made with
                            <span class="la la-heart"></span> by <a
                                href="https://themeforest.net/user/techydevs/portfolio">Qliq Integrations</a>
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
                    <div class="text-dark font-size-32 mb-3">Sign In</div>
          <?php if (isset($validation)): ?>
            <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <label style="margin-left: -40px;margin-bottom: -30px;"><strong><?= $validation->listErrors() ?></strong></label>
          </div>
          <?php endif; ?>
      <form id="form-validation-simple" name="form-validation-simple" method="POST" action="/login/auth" class="mb-4">
  
        <div class="form-group mb-4">
          <input type="text" class="form-control" name="email" data-validation="[NOTEMPTY]" autocomplete="off" tabindex="1" placeholder="Email" />
        </div>
        <div class="form-group mb-4">
          <input type="password" name="password" data-validation="[NOTEMPTY]" class="form-control" autocomplete="off" tabindex="2" placeholder="Password" />
        </div>
        <button type="submit" class="btn btn-primary text-center w-100"><strong><?= 'Log in' ?></strong></button>
      </form>
      <a href="#" class="kit__utils__link font-size-16"><?= 'Forgot password?' ?></a>
    </div>
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
<script src="../../site_file/js/bootstrap.min.js"></script>
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