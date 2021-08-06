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
    <link rel="stylesheet" href="../../site_file/css/style_all.css">
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
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-plane"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Social Gathering</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-anchor"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Cleaning</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-support"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Music & Entertainmenrt </a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-briefcase"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Pickup & Delivery</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-hotel"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Rent a Car</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column">
                <div class="icon-box icon-layout-4">
                    <div class="info-icon">
                        <i class="la la-hotel"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title"><a href="#">Transporter</a></h4>
                        <p class="info__desc">
                           Pellentesque ac turpis egestas, varius justo et, condimentum augue nerrowe.
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
 
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
        <?php $i=1; foreach($category as $u){ ?>
                <div class="col-lg-4">
                    <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="../../site_file/images/car-img.png" alt="car-img">
                                    </a>
                                    <span class="badge">Bestseller</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta"></p>
                                    <h3 class="card-title"><a href="car-single.html"></a><?= $u['category_name'] ?></h3>
                                    <div class="card-rating">
                                    </div>
                                    <div class="card-attributes">
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">     
                                    </div>
                                </div>
        </div><!-- end container -->
        </div>
        <?php } ?>




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