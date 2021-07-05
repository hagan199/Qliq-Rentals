

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page . ' | '. $title ?></title>
    <!-- Favicon -->
    <link rel="icon" href="../../site_file/images/favicon.png">
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
    <link rel="stylesheet" href="../../site_file/css/customstyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <!-- load jQuery UI CSS theme -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<style>
        body {
        font-size: 12px; /* just so that it doesn't default to 16px (which is kinda huge) */
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
    <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Services We Provide </h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
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
                            </ul>
                        </div><!-- end section-tab -->
                        <div class="layout-view d-flex align-items-center">
                            <a href="room-grid.html" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="la la-th-large"></i></a>
                            <a href="room-list.html" data-toggle="tooltip" data-placement="top" title="List View" class="active"><i class="la la-th-list"></i></a>
                        </div>
                    </div>
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->


        <!--------------Social Gathering------>
        <div class="tab-content" id="may-tabContent4">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <!-----
            <div class="row">
            <div class="col-md-6">
							<label for="category_service_id" class="control-label">Category Service List</label>				
							<select name="category_service_id" id="category_service_id" onChange="changecat(this.value);">
                            <option value="" disabled selected>Select</option>
                            <option value="A">Canopies</option>
                            <option value="B">Chairs</option>
                            <option value="C">Tables</option>
                            <option value="D">Mattress</option>
            </select>
			</div>
            <div class="col-md-6">
							<label for="category_service_id" class="control-label">Sub Cat Service List</label>				
                            <select name="category" id="category">
                            <option value="" disabled selected>Select</option>
                            </select>
			</div>
            </div>   ---> 


            <!---------------  Social Gathering ------------->
            <div class="tab-content" id="myTabContent3">
          
            <?php $i=1; foreach($canopies as $u){ ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-item card-item-list room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img  src="/uploads/images/<?= $u['name3'] ?>" alt="hotel-img">
                                    </a>
                                </div>
                            </div>                          
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num"><?= 'Gh¢'. $u['price'] ?></span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html"><?= get_column_name_by_id('sub_category_service_tbl', $u['sub_category_id'], 'sub_cat_name') ?></a></h3>
                                <p class="card-text pt-2"><?= $u['description'] ?></p>  
                                <div class="card-btn">
                                    <a href="/book/<?= $u['id'] ?>" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div>
            <?php } ?>
      
    </div>

            <!--------------------------Cleaning---------------------------------->
            <div class="tab-pane fade" id="dorm-beds" role="tabpanel" aria-labelledby="dorm-beds-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-item card-item-list room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
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
                                <h3 class="card-title font-size-26"><a href="room-details.html">Deluxe King Bed Private</a></h3>
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
                </div><!-- end row -->
            </div>

         <!-------------------Clea------------------>
            <div class="tab-pane fade" id="private-room" role="tabpanel" aria-labelledby="private-room-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-item card-item-list room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img5.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img29.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img30.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Room</a></h3>
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
        </div><!-- end row -->
    </div>


<!----------------------------Rent a Car----------------------->    
            <div class="tab-pane fade" id="suites" role="tabpanel" aria-labelledby="suites-tab">
                <div class="row">
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
                                        <span class="price__num">$45.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Standard 2 Bed Male Dorm</a></h3>
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
                 
                </div><!-- end row -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-4 text-center">
                    <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                    <p class="font-size-13 pt-2">Showing 1 - 5 of 124 Rooms</p>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
<!-- end card-area -->

    <div class="section-block"></div>

            <!-- ================================
            START DESTINATION AREA
            ================================= -->

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
                        <h2 class="sec__title text-white line-height-55">Let us show you the world <br> Discover our
                            most popular destinations</h2>
                    </div><!-- end section-heading -->
                    <div class="btn-box padding-top-35px">
                        <a href="become-local-expert.html" class="theme-btn border-0">Join with us</a>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </section><!-- end cta-area -->
    <!-- ================================
    END CTA AREA
================================= -->
  <!-- ================================
    START INFO AREA
================================= -->
<section class="info-area info-bg padding-top-50px padding-bottom-50px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class="la la-bullhorn"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">You'll never roam alone</h4>
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
                            <h4 class="info__title">A world of choice – anytime, anywhere</h4>
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
                            <h4 class="info__title">Peace of mind, wherever you wander</h4>
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



    <!-- ================================
    START MOBILE AREA
================================= -->
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
    END MOBILE AREA
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>

var mealsByCategory = {
    A: ["Soup", "Juice", "Tea", "Others"],
    B: ["Juice", "Water", "Others"],
    C: ["Soup", "Juice", "Coffee", "Tea", "Others"]
}

    function changecat(value) {
        if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
        else {
            var catOptions = "";
            for (categoryId in mealsByCategory[value]) {
                catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
            }
            document.getElementById("category").innerHTML = catOptions;
        }
    }
    
</script>

</body>
</html>
