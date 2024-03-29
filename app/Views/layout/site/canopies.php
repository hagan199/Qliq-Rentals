<!DOCTYPE html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page . ' | '. $title ?></title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

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
    
    <!--<link rel="stylesheet" href="../../site_file/css/jquery-ui.css">-->
    <link rel="stylesheet" href="../../site_file/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../site_file/css/style.css">
    <link rel="stylesheet" href="../../csss/style.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../site_file/css/customstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <!-- load jQuery UI CSS theme -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
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
    <section class="breadcrumb-area bread-bg-5">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Canopies</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!-- ================================
    START CONTACT AREA
================================= -->
    <section class="contact-area section--padding">
       
    </section><!-- end contact-area -->
    <!-- ================================
    END CONTACT AREA
================================= -->
<section class="car-area section-bg section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Canopies Rentals</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <?php $i=1; foreach($canopies as $u){ 
                    $id = $u['id']
                    ?>
            <div class="col-lg-3" id="post_<?=  $id;?>">
            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img  src="/uploads/images/<?= $u['name'] ?>" alt="car-img">
                                    </a>
                                    <span class="badge">Bestseller</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta"><?= get_column_name_by_id('service_tbl', $u['service_id'], 'service_name') ?></p>
                                    <h3 class="card-title"><a href="car-single.html"><?= get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') ?></a></h3>
                                    <div class="card-rating">
                                    <h2 class="card-title"><a href="car-single.html"><?= get_column_name_by_id('sub_category_service_tbl', $u['sub_category_id'], 'sub_cat_name') ?></a></h2>
                                    </div>
                                    <div class="card-attributes">
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num">Gh¢.<?= $u['price'] ?></span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <div class="card-btn">
                                            <a href="/book/<?= $u['id'] ?>" class="theme-btn theme-btn-transparent">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                        </div><!-- end container -->
                    </div>
                <?php } ?>
            </div>
        <br>
        <div class="row">

                <?php if ($pager) :?>
                <?php $pagi_path='/canopies'; ?>
                <?php $pager->setPath($pagi_path); ?>             
                <?= $pager->links();  ?>
                <?php endif ?> 
                </div>         
            </div>
        </div>

    </section><!-- end car-area -->
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
                            <li><a href="/about">About us</a></li>
                            <li><a href="/services">About us</a></li>

                        </ul>
                    </div><!-- end footer-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                        <ul class="list-items list--items">
                            <li><a href="/sites">About Qi Rentals</a></li>
                            <li><a href="/canopies">Canopies</a></li>
                            <li><a href="/tables">Tables</a></li>
                            <li><a href="/mattress">Mattress</a></li>
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
                                href="https://qliqintegrations.com/">Qliq Integrations</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                        <h3 class="title font-size-15 pr-2">We Accept</h3>
                        <img src="../../images/payment-img.png" alt="">
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
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your username">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="input-box">
                                    <label class="label-text">Email Address</label>
                                    <div class="form-group">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type your email">
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
                                        <input class="form-control" type="text" name="text"
                                            placeholder="Type again password">
                                    </div>
                                </div><!-- end input-box -->
                                <div class="btn-box pt-3 pb-4">
                                    <button type="button" class="theme-btn w-100">Register Account</button>
                                </div>
                                <div class="action-box text-center">
                                    <p class="font-size-14">Or Sign up Using</p>
                                    <ul class="social-profile py-3">
                                        <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a>
                                        </li>
                                        <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a>
                                        </li>
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
        <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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
    <script src="../../site_file/js/quantity-input.js"></script>
    <script src="../../site_file/js/main.js"></script>
    <script src="../../js/ajax-script.js"></script>
    <script src="../../js/jquery-1.12.0.min.js"></script>
     <script src="../../js/jquery-1.12.0.min.js"></script>
     <script src="../../js/jquery-latest-min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</html>