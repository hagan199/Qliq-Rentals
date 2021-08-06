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
    <link rel="stylesheet" href="../../site_file/css/jquery-ui.css">
    <link rel="stylesheet" href="../../site_file/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../site_file/css/leaflet.css">
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
    <section class="breadcrumb-area bread-bg-5">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Mattress</h2>
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
                        <h2 class="sec__title">Mattress Rentals</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
    
    <?php $i=1; foreach($mattress as $u){ 
    $id = $u['id']
    ?> 
<div class="col-lg-4" id="post_<?=  $id;?>">
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
 <?php $pagi_path='/mattress'; ?>
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
    <script src="../../site_file/js/leaflet.js"></script>
    <script src="../../site_file/js/map.js"></script>
    <script src="../../site_file/js/ajax-form.js"></script>
    <script src="../../site_file/js/main.js"></script>
</body>

</html>