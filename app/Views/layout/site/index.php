<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page . ' | '. $title  ?></title>
    <!-- Favicon -->
    <link rel="icon" href="../../site_file/images/favicon.png">
    <!-- Google Fonts -->
   <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">-->
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
    <link rel="stylesheet" href="../../site_file/css/style_all.css">
    <link rel="stylesheet" href="../../csss/style.css">
    <link rel="stylesheet" href="../../site_file/css/customstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <!-- load jQuery UI CSS theme -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<style>
      body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color:  #007bff;
    text-align: left;
    background-color: #fff;
}
        .pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover {
    z-index: 2;
    color: #23527c;
    background-color: #eee;
    border-color: #ddd;
        }
        .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover, .pagination>li>a:hover {
    background-color: #006537;
    border-color: #006537;
    color: #fff;
        }
        .pagination>li>a, .pagination>li>span {
    padding: 3px 20px;
    margin-left: 10px;
    line-height: 28px;
    color: #333;
    background-color: #fff;
    background: #eee;
    font-size: 30px;
    border: none;
}pager{
    z-index: 2;
    background-color: #006537;
    border-color: #006537;
    color: #fff;
    padding: 3px 20px;
    margin-left: 10px;
    line-height: 28px;
    color: #333;
    background-color: #fff;
    background: #eee;
    font-size: 30px;
    border: none;
}
.cta-area {
  
    background-size: cover;
    background-color: #007bff;
}
.section-bg-2 {
    background-color:  #007bff;
}
.section-heading .sec__title {
    font-size: 40px;
    color: #007bff;
    font-weight: 700;
}
li.pager{
    padding: 3px 20px;
    margin-left: 10px;
    line-height: 28px;
    color: #333;
    background-color: #fff;
    background: #eee;
    font-size: 30px;
    border: none;
}
      
    </style>
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
    <a href="http://techydevs.com/demos/themes/html/trizen/rtl/index.html" class="rtl-btn">RTL Version</a>

    <!-- ================================
            START HEADER AREA
================================= -->
<?= $this->include('layout/site/header') ?>
    <!-- ================================
    END HEADER AREA
================================= -->

    <!-- ================================
    START HERO-WRAPPER AREA
================================= -->
    <section class="hero-wrapper">
        <div class="hero-box hero-bg">
            <span class="line-bg line-bg1"></span>
            <span class="line-bg line-bg2"></span>
            <span class="line-bg line-bg3"></span>
            <span class="line-bg line-bg4"></span>
            <span class="line-bg line-bg5"></span>
            <span class="line-bg line-bg6"></span>
            <div class="container">
                
            </div><!-- end container 
            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
            </svg>-->
        </div>
    </section><!-- end hero-wrapper -->
    <!-- ================================
    END HERO-WRAPPER AREA
================================= -->
<section class="card-area section--padding">
    <div class="container">
    <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Services We Provide </h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
        <div class="row">          
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-40px">
                    <div class="filter-top d-flex align-items-center justify-content-between">
                        <div class="section-tab section-tab-3">
                            <ul class="nav nav-tabs" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="false">
                                    Social Gathering
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="dorm-beds-tab" data-toggle="tab" href="#dorm-beds" role="tab" aria-controls="dorm-beds" aria-selected="false">
                                    Cleaning
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="private-room-tab" data-toggle="tab" href="#private-room" role="tab" aria-controls="private-room" aria-selected="false">
                                    Rent A Car
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="suites-tab" data-toggle="tab" href="#suites" role="tab" aria-controls="suites" aria-selected="false">
                                    Music & Entertainment
                                    </a>
                                </li>
                        </div><!-- end section-tab -->
                    
                    </div>
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->

        <div class="tab-content" id="may-tabContent4">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="section-tab section-tab-2 pb-3">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="flight-hotel-tab" data-toggle="tab" href="#flight-hotel" role="tab" aria-controls="flight-hotel" aria-selected="true">
                                            Canopies
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="flight-hotel-car-tab" data-toggle="tab" href="#flight-hotel-car" role="tab" aria-controls="flight-hotel-car" aria-selected="false">
                                            Chairs
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="flight-car-tab" data-toggle="tab" href="#flight-car" role="tab" aria-controls="flight-car" aria-selected="false">
                                            Tables
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="hotel-car-tab" data-toggle="tab" href="#hotel-car" role="tab" aria-controls="hotel-car" aria-selected="true">
                                            Mattress
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- end section-tab -->
                        <div class="tab-content" id="myTabContent3">


                    <!-- canopies -->
        <div class="tab-pane fade show active" id="flight-hotel" role="tabpanel" aria-labelledby="flight-hotel-tab">

            <div class="row" >
                    <?php $i=1; foreach($canopies as $u){ 
                    $id = $u['id']
                    ?> 
            <div class="col-lg-3" id="post_<?=  $id;?>">
                        <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a  href="/book/<?= $u['id'] ?>" class="d-block">
                                        <img  src="/uploads/images/<?= $u['name'] ?>" width="300" height="200"  alt="car-img">
                                        </a>
                                        <span class="badge">Bestseller</span>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                            </div>
                        <div class="card-body">
                                <p class="card-meta"><a href="car-single.html"><?= get_column_name_by_id('sub_category_service_tbl', $u['sub_category_id'], 'sub_cat_name') ?></a></p>
                                    <h3 class="card-title"><a href="car-single.html"><?= get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') ?> |  Gh¢.<?= $u['price'] ?></a></h3>
                                    <div class="card-rating">
                                    <h2 class="card-title"></h2>
                                    </div>
                                    <div class="card-attributes">
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num"></span>
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
                <?php $pagi_path='gnat/public/index.php'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <br> 
                <?= $pager->links('group1');  ?>
                <?php endif ?> 
        </div>         
        </div>
    

                    <!-----------Chairs----->
                <div class="tab-pane fade" id="flight-hotel-car" role="tabpanel" aria-labelledby="flight-hotel-car-tab">

                <div class="row" >
                    <?php $i=1; foreach($chairs as $u){ 
                    $id = $u['id']
                    ?> 
                    <div class="col-lg-3" id="post_<?=  $id;?>">
                        <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a  href="/book-chairs/<?= $u['id'] ?>" class="d-block">
                                        <img  src="/uploads/images/<?= $u['name'] ?>" width="300" height="200" alt="car-img">
                                        </a>
                                        <span class="badge">Bestseller</span>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                            </div>
                        <div class="card-body">
                                <p class="card-meta"><a href="car-single.html"><?= get_column_name_by_id('sub_category_service_tbl', $u['sub_category_id'], 'sub_cat_name') ?></a></p>
                                    <h3 class="card-title"><a href="car-single.html"><?= get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') ?> |  Gh¢.<?= $u['price'] ?></a></h3>
                                    <div class="card-rating">
                                    <h2 class="card-title"></h2>
                                    </div>
                                    <div class="card-attributes">
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num"></span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <div class="card-btn">
                                            <a href="/book-chairs/<?= $u['id'] ?>" class="theme-btn theme-btn-transparent">Book Now</a>
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
                <?php $pagi_path='gnat/public/index.php'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <br> 
                <?= $pager->links('group2');  ?>
                <?php endif ?> 
            </div>         
        </div>
                    <!-------Chairs----->
                <div class="tab-pane fade" id="flight-car" role="tabpanel" aria-labelledby="flight-car-tab">
                
                <div class="row" >
                    <?php $i=1; foreach($tables as $u){ 
                    $id = $u['id']
                    ?> 
                  <div class="col-lg-3" id="post_<?=  $id;?>">
                        <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a  href="/book-tables/<?= $u['id'] ?>" class="d-block">
                                        <img  src="/uploads/images/<?= $u['name'] ?>" width="300" height="200" alt="car-img">
                                        </a>
                                        <span class="badge">Bestseller</span>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                            </div>
                        <div class="card-body">
                                <p class="card-meta"><a href="car-single.html"><?= get_column_name_by_id('sub_category_service_tbl', $u['sub_category_id'], 'sub_cat_name') ?></a></p>
                                    <h3 class="card-title"><a href="car-single.html"><?= get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') ?> |  Gh¢.<?= $u['price'] ?></a></h3>
                                    <div class="card-rating">
                                    <h2 class="card-title"></h2>
                                    </div>
                                    <div class="card-attributes">
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num"></span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <div class="card-btn">
                                            <a href="/book-tables/<?= $u['id'] ?>" class="theme-btn theme-btn-transparent">Book Now</a>
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
                <?php $pagi_path='gnat/public/index.php'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <?= $pager->links('group3');  ?>
                <?php endif ?> 
            </div>         
        </div>

              
                                    <!------Mattress---------->
        <div class="tab-pane fade" id="hotel-car" role="tabpanel" aria-labelledby="hotel-car-tab">

        <div class="row" >
                    <?php $i=1; foreach($mattress as $u){ 
                    $id = $u['id']
                    ?> 
                 <div class="col-lg-3" id="post_<?=  $id;?>">
                        <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a  href="/book-mattress/<?= $u['id'] ?>"  class="d-block">
                                        <img  src="/uploads/images/<?= $u['name'] ?>"  width="300" height="200" alt="car-img">
                                        </a>
                                        <span class="badge">Bestseller</span>
                                        <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                            </div>
                        <div class="card-body">
                                <p class="card-meta"><a href="car-single.html"><?= get_column_name_by_id('sub_category_service_tbl', $u['sub_category_id'], 'sub_cat_name') ?></a></p>
                                    <h3 class="card-title"><a href="car-single.html"><?= get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') ?> |  Gh¢.<?= $u['price'] ?></a></h3>
                                    <div class="card-rating">
                                    <h2 class="card-title"></h2>
                                    </div>
                                    <div class="card-attributes">
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__num"></span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <div class="card-btn">
                                            <a href="/book-mattress/<?= $u['id'] ?>" class="theme-btn theme-btn-transparent">Book Now</a>
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
                <?php $pagi_path='gnat/public/index.php'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <?= $pager->links('group4');  ?>
                <?php endif ?> 
        </div>         
        </div>
    </div>
</div>
               
      

            <!-------------Cleaning---------------------->
            <div class="tab-pane fade" id="dorm-beds" role="tabpanel" aria-labelledby="dorm-beds-tab">
            <div class="row">
                <h1 text-align: 'center'> Coming Soon</h1>
                </div><!-- end row -->
            </div>


            <!----------------Rental Car ---------------->
            <div class="tab-pane fade" id="private-room" role="tabpanel" aria-labelledby="private-room-tab">
        
                <div class="row">
                <h1 text-align: 'center'> Coming Soon</h1>
                </div><!-- end row -->
            </div>
            <div class="tab-pane fade" id="suites" role="tabpanel" aria-labelledby="suites-tab">

            <div class="row">
                <h1 text-align: 'center'> Coming Soon</h1>
                </div><!-- end row -->
                  <!---  <div class="section-tab section-tab-2 pb-3">
                                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="flight-hotel-tab" data-toggle="tab" href="#flight-hotel" role="tab" aria-controls="flight-hotel" aria-selected="true">
                                            Sound System
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="flight-hotel-car-tab" data-toggle="tab" href="#flight-hotel-car" role="tab" aria-controls="flight-hotel-car" aria-selected="false">
                                            Staget System
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="flight-car-tab" data-toggle="tab" href="#flight-car" role="tab" aria-controls="flight-car" aria-selected="false">
                                            Drones/ Camera
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="hotel-car-tab" data-toggle="tab" href="#hotel-car" role="tab" aria-controls="hotel-car" aria-selected="true">
                                            Stage Setup
                                        </a>
                                    </li>
                                </ul>
                            </div>< end section-tab -->
             <!---   <div class="row">
                    <div class="col-lg-12">
                        <div class="card-item card-item-list room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-12 -->
                </div><end row -->
            </div>
        </div>

    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================-->


    <div class="section-block"></div>
    <section class="mobile-app padding-top-100px padding-bottom-50px section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-55">Qi Rentals is Available!</h2>
                        </div><!-- end section-heading -->
                        <ul class="info-list padding-top-30px">
                            <li class="d-flex align-items-center mb-3"><span
                                    class="la la-check icon-element flex-shrink-0 ml-0"></span> Access and change your
                                itinerary on-the-go</li>
                            <li class="d-flex align-items-center mb-3"><span
                                    class="la la-check icon-element flex-shrink-0 ml-0"></span> Free cancellation on
                                select hotels</li>
                            <li class="d-flex align-items-center mb-3"><span
                                    class="la la-check icon-element flex-shrink-0 ml-0"></span> Get real-time trip
                                updates</li>
                        </ul>
                        <!---
                    <div class="btn-box padding-top-30px">
                        <a href="#" class="d-inline-block mr-3">
                            <img src="../../site_file/images/app-store.png" alt="">
                        </a>
                        <a href="#" class="d-inline-block">
                            <img src="../../site_file/images/google-play.png" alt="">
                        </a>
                    </div>< end btn-box -->
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="mobile-img">
                        <img src="../../site_file/images/mobile-app.png" alt="mobile-img">
                    </div>
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end mobile-app -->
            <!-- ================================
            START DESTINATION AREA
            ================================= -->
            <section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">Subscribe to see Secret Deals</h2>
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

<section class="info-area info-bg padding-top-50px padding-bottom-50px text-center">
        <div class="container">              
                    <div class="btn-box padding-top-35px">
                    <h1 class="info__title">How it Works</h1>               
                    </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class="la la-bullhorn"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Choose A Service</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box margin-top-50px">
                        <div class="info-icon">
                            <i class="la la-globe"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Set delivery location</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class="la la-thumbs-up"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Receive It at your doorstep</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            </p>
                        </div><!-- end info-content -->
                    </div><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end info-area -->
    <!-- ================================
    END INFO AREA
    ------------------>
    <section class="cta-area padding-top-100px padding-bottom-180px text-center">
        <div class="video-bg">
            <video autoplay loop>
                <source src="video/video-bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title text-white line-height-55">Sign Up As a Vendor On Qi Rental <br> 
                        Get more customers and increase your sales</h2>
                    </div><!-- end section-heading -->
                    <div class="btn-box padding-top-35px">
                        <a href="/join-us" class="theme-btn border-0">Join with us</a>
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

    <!-- Modal -->
    <?= $this->include('layout/modal/signpopup') ?>
    <?= $this->include('layout/modal/contactdetailpopup') ?>
    <?= $this->include('layout/modal/loginpopup') ?>
    <!-- End Modal -->

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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
</script>
<!-----------   Ajax Load more   ------------------->

</body>
</html>
