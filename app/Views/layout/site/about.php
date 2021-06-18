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
<?= $this->include('layout/site/header') ?>
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
<?= $this->include('layout/site/footer') ?>

<!-- ================================
                START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->
    <?= $this->include('layout/modal/signpopup') ?>
    <?= $this->include('layout/modal/contactdetailpopup') ?>
    <?= $this->include('layout/modal/loginpopup') ?>




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