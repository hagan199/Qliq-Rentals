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
    START ROOM DETAIL BREAD
================================= -->


<section class="room-detail-bread">
<?php foreach($canopies as $row): ?>
    <div class="full-width-slider carousel-action">
        <div class="full-width-slide-item">
        <img  src="/uploads/images/<?= $row['name'] ?>"  width="700" height="600" alt="hotel-img">
        </div><!-- end full-width-slide-item -->
        <div class="full-width-slide-item">
        <img  src="/uploads/images/<?= $row['name2'] ?>"  width="700" height="600"  alt="hotel-img">
        </div><!-- end full-width-slide-item -->
        <div class="full-width-slide-item">
        <img  src="/uploads/images/<?= $row['name3'] ?>"  width="700" height="600"  alt="hotel-img">
        </div><!-- end full-width-slide-item -->
    </div><!-- end full-width-slider -->
</section><!-- end room-detail-bread -->
<?php endforeach; ?>
<!-- ================================
    END ROOM DETAIL BREAD
================================= -->

<!-- ================================
    START TOUR DETAIL AREA
================================= -->
<section class="tour-detail-area padding-bottom-90px">
    <div class="single-content-navbar-wrap menu section-bg" id="single-content-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content-nav" id="single-content-nav">
                        <ul>
                            <li><a data-scroll="description" href="#description" class="scroll-link active">Description</a></li>
                            <li><a data-scroll="services" href="#services" class="scroll-link">Services</a></li>
                            <li><a data-scroll="amenities" href="#amenities" class="scroll-link">Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end single-content-navbar-wrap -->
    <div class="single-content-box">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content-wrap padding-top-60px">
                    <?php foreach($canopies as $row): 
                        $cat_id = $row['sub_category_id'];
                        $vendor_id = $row['vendor_id'];
                        $service_id = $row['service_id'];
                        $price = $row['price'];
                        $category_id = $row['category_id'];
                        ?> 
                        <div id="description" class="page-scroll">
                            <div class="single-content-item pb-4">
                                <h3 class="title font-size-26"><?= get_column_name_by_id('sub_category_service_tbl', $row['sub_category_id'], 'sub_cat_name') ?></h3>
                                <br>
                                <p class="title font-size-26"><?= 'Gh¢'.$row['price'] ?></p>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                            <div class="single-content-item padding-top-30px padding-bottom-40px">
                                <h3 class="title font-size-20">Description</h3>
                                <p class="py-3"><?= $row['description'] ?></p>                                                      
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end description -->
                        <?php endforeach; ?>
                        <div id="services" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">Services</h3>
                                <div class="row pt-4">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Social Gathering</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Cleaning</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Music & Entertainment</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Pickup & Delievery</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Events Center</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Building Tools & Equipment</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Accommodation</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Rent a Car</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Transporter</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end itinerary -->


                        <div id="amenities" class="page-scroll">
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">Categories</h3>
                                <div class="row pt-4">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-couch"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Canopies</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-television"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Chairs</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-gear"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Tables</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-wifi"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Mattress</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-swimming-pool"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium"> Laundry</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">House Cleaning</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-air-freshener"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Plats/Spoons</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-phone"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Deco Items</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-bullhorn"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Food Warners</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-bathtub"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Sound System</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-hand-holding-usd"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Stager Lighting</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="single-tour-feature d-flex align-items-center mb-3">
                                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                                <i class="la la-luggage-cart"></i>
                                            </div>
                                            <div class="single-feature-titles">
                                                <h3 class="title font-size-15 font-weight-medium">Video Coverage</h3>
                                            </div>
                                        </div><!-- end single-tour-feature -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end itinerary -->     
                    </div><!-- end single-content-wrap -->
                </div><!-- end col-lg-8 -->

<!----------------------------Booking Now ------------------>            
                <div class="col-lg-4">
                    <div class="sidebar single-content-sidebar mb-0">
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Book Now </h3>
                            <div class="sidebar-widget-item">
                            <div class="contact-form-action"></div>
                                    <div class="col">
                                        <label class="label-text" for="event_location">Event Locations  <span class="text-warning">*</span> </label>
                                                <div class="form-group">
                                        
                            <input class="form-control" type="text" id="event_location" name="event_location" placeholder="Enter Location" >
                            <input id="box2" type="text"  id="price" name="price" hidden value="<?php echo $price; ?> " oninput="calculate()" />
                            <input class="form-control"  hidden type="text" id="cat_service_id" value="<?php echo $cat_id; ?> " name="cat_service_id">
                            <input class="form-control"  hidden type="text" id="vendor_id" value="<?php echo $vendor_id; ?> " name="vendor_id">
                            <input class="form-control"  hidden type="text" id="service_id" value="<?php echo $service_id; ?> " name="service_id"> 
                            <input class="form-control"  hidden type="text" id="category_id" value="<?php echo $category_id; ?> " name="category_id"> 
                                    </div>
                                    </div>
                                    
                                    <div class="col">
                                            <label class="label-text">Pickup Date <span class="text-warning">*</span> </label>
                                            <div class="form-group"> 
                                                <input class="date-range form-control" type="text" id="pickup_date"  name="daterange-single"    readonly>
                                            </div>
                                    </div>
               
                                    <div class="col">
                                            <label  name="drop_off" class="label-text">Drop off date <span class="text-warning">*</span></label>
                                            <div class="form-group">
                                            <input class="date-range form-control"  type="text" id="drop_off" name="daterange-single"    readonly>
                                            </div>
                                    </div>
                                    <div class="col">
                                                <label for="event_type"   class="label-text">Event Type <span class="text-warning">*</span></label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select"  id="event_type" name="event_type" required>
                                                            <option value="1" selected>Naming Ceremony</option>
                                                            <option value="2">Graduation</option>
                                                            <option value="3">Wedding</option>
                                                            <option value="4">Funeral</option>
                                                            <option value="5">Camp</option>
                                                            <option value="6">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="col">
                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                    <label for="numer_room">Number Tables</label>
                                                        <input id="number_room" type="number" name="number_room" oninput="calculate()"  value="0" required/>
                                                    </div>
                                            </div>
                                    </div>
 
                                            <br>
                                            <div class="total-price pt-3">
                                            <p class="text-black">Your Price</p>
                                            <input class="form-control"   value="0"  id="total_price"  name="total_price">
                                        </div>
                            <button    data-toggle="modal"
                                        data-target="#contactdetail"   class="theme-btn text-center w-100 mb-2">Book Now</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Why Book With Us?</h3>
                            <div class="sidebar-list">
                                <ul class="list-items">
                                    <li><i class="la la-dollar icon-element mr-2"></i>No-hassle best price guarantee</li>
                                    <li><i class="la la-microphone icon-element mr-2"></i>Customer care available 24/7</li>
                                    <li><i class="la la-thumbs-up icon-element mr-2"></i>Hand-picked Tours & Activities</li>
                                    <li><i class="la la-file-text icon-element mr-2"></i>Free Travel Insureance</li>
                                </ul>
                            </div><!-- end sidebar-list -->
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Get a Question?</h3>
                            <p class="font-size-14 line-height-24">Do not hesitate to give us a call. We are an expert team and we are happy to talk to you.</p>
                            <div class="sidebar-list pt-3">
                                <ul class="list-items">
                                    <li><i class="la la-phone icon-element mr-2"></i><a href="#">+ (233) 241 977 5256
                                    </a></li>
                                    <li><i class="la la-envelope icon-element mr-2"></i><a href="mailto:info@trizen.com">info@qliqintegrations.com</a></li>
                                </ul>
                            </div><!-- end sidebar-list -->
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                  

<script>  
   function calculate() {
		var myBox1 = document.getElementById('number_room').value;	
		var myBox2 = document.getElementById('box2').value;
		var total_price = document.getElementById('total_price');	
		var myResult = myBox1 * myBox2;
		total_price.value = myResult;	
	}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!---------------------------End Booking Now ------------------>


            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single-content-box -->
</section><!-- end tour-detail-area -->
<!-- ================================
    END TOUR DETAIL AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    END RELATE TOUR AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="sec__desc text-white-50 pb-1">Newsletter sign up</p>
                    <h2 class="sec__title font-size-30 text-white">Subscribe to Get Special Offers</h2>
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

<div class="modal-popup">
        <div class="modal fade" id="contactdetail" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">Personal Detail</h5>
                            <p class="font-size-14"></p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="air__auth__containerInner mt-4">
                        
                            <?php if (isset($validation)): ?>
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <label
                                    style="margin-left: -40px;margin-bottom: -30px;"><strong><?= $validation->listErrors() ?></strong></label>
                            </div>
                            <?php endif; ?>
                            
                              <div      style="background: #A8FF33";  style="padding: 20px"; style="color: white"; id="promptme"></div>
                            <div class="row">
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label for="fname" class="label-text">Fname</label>
                                                <div class="form-group">       
                                                    <input class="form-control" name="fname" id="fname" type="text" placeholder="First Name">
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                            
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label  for="fname" class="label-text">Lname</label>
                                                <div class="form-group">       
                                                    <input class="form-control"  name="lname"  id="lname"  type="text" placeholder=" Last Name">
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label  for="email" class="label-text">Email</label>
                                                <div class="form-group">       
                                                    <input class="form-control"  name="email" id="email"  type="text" placeholder=" Email">
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label  for="phone" class="label-text">Phone</label>
                                                <div class="form-group">       
                                                    <input class="form-control" type="text" id="phone" name="phone" placeholder="Phone"
                                                        >
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                                </div>
                              
                                <button id="save_data"   class="theme-btn text-center w-100 mb-2">Book Now</button>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup -->


<!-- start back-to-top -->
<div id="back-to-top"></div>
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->
    <!-- Modal -->
    <?= $this->include('layout/modal/signpopup') ?>
    <?= $this->include('layout/modal/contactdetailpopup') ?>
    <?= $this->include('layout/modal/loginpopup') ?>
    <!-- End Modal -->
<!-- Template JS Files
<script>
            var pricetag = parseFloat(document.getElementById('price').value;
            var numroom = parseFloat(document.getElementById('number_room').value;
            var totals =  parseFloat(pricetag * numroom);
            document.getElementById('total').innerHTML ="dummy" + totals;

</script>
 -->
<script>
        $('#save_data').click(function(){
            $("#save_data").attr("disabled", "disabled");
        var event_location = $('#event_location').val();
		var pickup_date = $('#pickup_date').val();
		var drop_off = $('#drop_off').val();
		var number_room = $('#number_room').val();
        var pickup_date = $('#pickup_date').val();
        var event_type = $('#event_type').val();
        var email = $('#email').val();
        var phone = $('#phone').val();    
        var lname = $('#lname').val();
        var fname = $('#fname').val();
        var vendor_id = $('#vendor_id').val();
        var service_id = $('#service_id').val();
        var cat_service_id = $('#cat_service_id').val();
        var category_id = $('#category_id').val();
        var total_price = $('#total_price').val();
       
        if(event_location !="" ){
        $.ajax({
                url:'/savecanopies',
                method:'POST',
                data: {
                    event_location: event_location,
                    pickup_date: pickup_date,
                    drop_off: drop_off,
                    number_room: number_room, 
                    event_type: event_type, 
                    lname: lname, 
                    fname: fname, 
                    email: email,  
                    phone: phone, 
                    total_price: total_price, 
                    cat_service_id: cat_service_id, 
                    vendor_id: vendor_id, 
                    service_id: service_id,  
                    category_id: category_id                      
                },
            })
            document.getElementById('promptme').innerHTML = 'Booked sucessfully!';
            alert('Booked sucessfully!');
        }
        });
</script>

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
<script src="../../site_file/js/navbar-sticky.js"></script>
<script src="../../site_file/js/total-price.js"></script>
<script src="../../site_file/js/leaflet.js"></script>
<script src="../../site_file/js/map.js"></script>
<script src="../../site_file/js/main.js"></script>
</body>
</html>