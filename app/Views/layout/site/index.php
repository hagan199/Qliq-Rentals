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
    <link rel="stylesheet" href="../../site_file/css/jquery-ui.css">
    <link rel="stylesheet" href="../../site_file/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../site_file/css/style.css">

</head>
<style>
        #frm-add-user label.error{
            color:red;
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
    <header class="header-area">
        <div class="header-top-bar padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div class="header-left">
                                <ul class="list-items">
                                    <li><a href="#"><i class="la la-phone mr-1"></i>(233) 241 977 529</a></li>
                                    <li><a href="#"><i class="la la-envelope mr-1"></i>info@qliqintegrations.com</a>
                                    </li>
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
                                            <option
                                                data-content='<span class="flag-icon flag-icon-id mr-1"></span> Bahasa Indonesia'>
                                                Bahasa Indonesia</option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-de mr-1"></span> Deutsch'>
                                                Deutsch</option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-us mr-1"></span> English(US)'
                                                selected>English US</option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-gb-eng mr-1"></span> English(UK)'>
                                                English UK</option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-ro mr-1"></span> Romanian'>
                                                Romanian</option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-es mr-1"></span> Español'>
                                                Español</option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-fr mr-1"></span> Francais'>
                                                Francais</option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-it mr-1"></span> Italiano'>
                                                Italiano</option>
                                            <option
                                                data-content='<span class="flag-icon flag-icon-pl mr-1"></span> Polski'>
                                                Polski</option>
                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto">
                                        <select class="select-contain-select">
                                            <option value="1">AED</option>
                                            <option value="2">AUD</option>
                                            <option value="24" selected>USD</option>
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
                                        <li><a href="#">Home</a></li>
                                        <li><a href="/about">About</a></li>
                                        <li>
                                            <a href="#"> Service<i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="cruises.html">Canopies</a></li>
                                                <li><a href="cruises-list.html">Chairs</a></li>
                                                <li><a href="cruise-sidebar.html">Tables</a></li>
                                                <li><a href="cruise-details.html">Mattress</a></li>
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
                <div class="row">
                    <div class="col-lg-10 mx-auto responsive--column-l">
                        <div class="hero-content pb-5">
                            <div class="section-heading">
                                <h2 class="sec__title cd-headline zoom">
                                    Amazing <span class="cd-words-wrapper">
                                        <b class="is-visible">Tours</b>
                                        <b>Adventures</b>
                                        <b>Flights</b>
                                        <b>Hotels</b>
                                        <b>Cars</b>
                                        <b>Cruises</b>
                                        <b>Package Deals</b>
                                        <b>Fun</b>
                                        <b>People</b>
                                    </span>
                                    Waiting for You
                                </h2>
                            </div>
                        </div><!-- end hero-content -->
                        <div class="section-tab text-center pl-4">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="hotel-tab" data-toggle="tab"
                                        href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
                                        <i class="la la-hotel mr-1"></i>Canopies
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="package-tab" data-toggle="tab"
                                        href="#package" role="tab" aria-controls="package" aria-selected="false">
                                        <i class="la la-shopping-bag mr-1"></i>Mattress
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="car-tab" data-toggle="tab"
                                        href="#car" role="tab" aria-controls="car" aria-selected="true">
                                        <i class="la la-car mr-1"></i>Tables
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="cruise-tab" data-toggle="tab"
                                        href="#cruise" role="tab" aria-controls="cruise" aria-selected="false">
                                        <i class="la la-ship mr-1"></i>Chair
                                    </a>
                                </li>

                            </ul>
                        </div><!-- end section-tab -->

                        <!---------Canopies------->
                        <div class="tab-content search-fields-container" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel"
                                aria-labelledby="hotel-tab">
                                <div class="contact-form-action">
                                    <form action="javascript:void(0)" id="frm-add-user"   class="row align-items-center">
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text" id="event" for="event_location">Event Locations </label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" name="event_location"
                                                        placeholder="Enter city or town" required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label for="phone" id="phone" class="label-text">Phone</label>
                                                <div class="form-group">
                                                    <span class="la la-map-phone form-icon"></span>
                                                    <input class="form-control" type="text"
                                                        placeholder="+233 023 234 3030" type="number" minlength="13" maxlength="13">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label for="pick_date" id="pick_date" class="label-text">Pickup Date </label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input  name="pick_date" class="date-range form-control" type="date"
                                                        name="daterange-single" readonly required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label for="drop_off" id="drop_off" id="event_type" class="label-text">Drop off </label>
                                                <div class="form-group">
                                                    <span class=""></span>
                                                    <input class="date-range form-control" type="date" name="drop_off"
                                                        required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->

                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label for="event_type" class="label-text">Event Type</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select" id="event_type" name="event_type"
                                                            required>
                                                            <option value="Naming Ceremony" selected>Naming Ceremony
                                                            </option>
                                                            <option value="Graduation">Graduation</option>
                                                            <option value="Wedding">Wedding</option>
                                                            <option value="Funeral">Funeral</option>
                                                            <option value="Funeral">Camp</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                    <label for="numer_room">Number Room</label>
                                                    <div class="qtyBtn d-flex align-items-center">
                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                        <input type="text" id="number_room" name="number_room" value="0" required>
                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                </div>

                                <div class="btn-box">
                                    <button  id="colorchange" data-toggle="modal"
                                        data-target="#contactdetail" class="theme-btn">Book</button>
                                </div>

</form>
                            </div><!-- end tab-pane -->
                            <!------------Mattress ------------------->
                            <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
                                <div class="contact-form-action">
                                <form class="form-horizontal" action="javascript:void(0)" id="frm-add-mattress">
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text" for="event_location">Event Location </label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" id="event_location"  name="event_location"
                                                        placeholder="Enter city or town" required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label for="pickup_date" id="pick_date"  class="label-text">Pickup Date </label>
                                                <div class="form-group">
                                                    <span class=""></span>
                                                    <input class="date-range form-control" type="date" name="pickup_date"
                                                        required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->

                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label for="drop_off" id="drop_off" class="label-text">Drop off </label>
                                                <div class="form-group">
                                                    <span class=""></span>
                                                    <input class="date-range form-control" type="date" name="drop_off"
                                                        required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label for="event_type" id="event_type"  class="label-text">Event Type</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select" name="event_type"
                                                            required>
                                                            <option value="Naming Ceremony" selected>Naming Ceremony
                                                            </option>
                                                            <option value="Graduation">Graduation</option>
                                                            <option value="Wedding">Wedding</option>
                                                            <option value="Funeral">Funeral</option>
                                                            <option value="Camping">Camping</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->

                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                    <label for="number_mattress">Number Mattress</label>
                                                    <div class="qtyBtn d-flex align-items-center">
                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                        <input type="number"  id="number_mattress" name="number_mattress" value="0" required>
                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div><!-- end col-lg-3 -->

                                </div>
                                
                                <div class="btn-box">
                                    <button type="submit" class="theme-btn">Book</button>
                                </div>
                                </form>
                        </div>

       
                            <!-- end tab-pane -->

                            <!----------------------Tables------------------------->
                            <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                                <div class="contact-form-action">
                                    <form action="/canopy/add_table/goal" class="row align-items-center">
                                        <div class="col-lg-4 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Event Location</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" placeholder="City,Town"
                                                        required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Phone</label>
                                                <div class="form-group">
                                                    <span class="la la-map-phone form-icon"></span>
                                                    <input class="form-control" type="number"
                                                        placeholder="023 0340 3030" required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Pick-up date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange-single" readonly>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label for="event_type" class="label-text">Event Type</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select" name="event_type"
                                                            required>
                                                            <option value="Naming Ceremony" selected>Naming Ceremony
                                                            </option>
                                                            <option value="Graduation">Graduation</option>
                                                            <option value="Wedding">Wedding</option>
                                                            <option value="Funeral">Funeral</option>
                                                            <option value="Camping">Camping</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-4 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Drop-off</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="date" required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                    <label for="numer_room">Number Mattress</label>
                                                    <div class="qtyBtn d-flex align-items-center">
                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                        <input type="text" name="number_room" value="0" required>
                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                </div>
                                <div class="btn-box pt-3">
                                    <a href="car-search-result.html" class="theme-btn">Book</a>
                                </div>
                                </form><!-- end row -->
                            </div><!-- end tab-pane -->



                            <!-------------------------------Chair---------------------------->
                            <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                                <div class="contact-form-action">
                                    <form action="#" class="row align-items-center">
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Pickup Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange-single" readonly>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Drop off</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange-single" readonly>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text" for="event_location">Event Location </label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" name="event_location"
                                                        placeholder="Enter city or town" required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                        <div class="input-box">
                                                <label for="event_type" class="label-text">Event Type</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select" name="event_type"
                                                            required>
                                                            <option value="Naming Ceremony" selected>Naming Ceremony
                                                            </option>
                                                            <option value="Graduation">Graduation</option>
                                                            <option value="Wedding">Wedding</option>
                                                            <option value="Funeral">Funeral</option>
                                                            <option value="Camping">Camping</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text" for="phone">Phone </label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" name="phone"
                                                        placeholder="023 040 0303" required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <div class="qty-box d-flex align-items-center justify-content-between">
                                                    <label for="numer_room">Number Chair</label>
                                                    <div class="qtyBtn d-flex align-items-center">
                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                        <input type="text" name="number_room" value="0" required>
                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                </div>
                                <div class="btn-box">
                                    <a href="cruise-search-result.html" class="theme-btn">Book</a>
                                </div>
                                </form>
                            </div><!-- end tab-pane -->

                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
            </svg>
        </div>
    </section><!-- end hero-wrapper -->
    <!-- ================================
    END HERO-WRAPPER AREA
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
================================= -->

    <div class="section-block"></div>

    <!-- ================================
    START DESTINATION AREA
================================= -->
    <section class="destination-area section--padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2 class="sec__title">Top Visited Places</h2>
                        <p class="sec__desc pt-3">Morbi convallis bibendum urna ut viverra Maecenas quis
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="btn-box btn--box text-right">
                        <a href="tour-grid.html" class="theme-btn">Discover More</a>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="../../site_file/images/destination-img2.jpg" alt="destination-img">
                            <span class="badge">new york</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">Main Street Park</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    50 Tours
                                </p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$58.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="../../site_file/images/destination-img3.jpg" alt="destination-img">
                            <span class="badge">chicago</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">Chicago Cultural Center</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    50 Tours
                                </p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$68.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="../../site_file/images/destination-img4.jpg" alt="destination-img">
                            <span class="badge">Hong Kong</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">Lugard Road Lookout</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    150 Tours
                                </p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$79.00</span>
                                    <span class="price__num before-price">$89.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="../../site_file/images/destination-img5.jpg" alt="destination-img">
                            <span class="badge">Las Vegas</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">Planet Hollywood Resort</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-o"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    50 Tours
                                </p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$88.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="card-item destination-card">
                        <div class="card-img">
                            <img src="../../site_file/images/destination-img.jpg" alt="destination-img">
                            <span class="badge">Shanghai</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="tour-details.html">Oriental Pearl TV Tower</a></h3>
                            <div class="card-rating d-flex align-items-center">
                                <span class="ratings d-flex align-items-center mr-1">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                </span>
                                <span class="rating__text">(70694 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p class="tour__text">
                                    50 Tours
                                </p>
                                <p>
                                    <span class="price__from">Price</span>
                                    <span class="price__num">$58.00</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end destination-area -->
    <!-- ================================
    END DESTINATION AREA
================================= -->

    <!-- ================================
    START CAR AREA
================================= -->
    <section class="car-area section-bg section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Recommended Canopies Rentals</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="car-wrap">
                        <div class="car-carousel carousel-action">
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
                                    <p class="card-meta">Compact SUV</p>
                                    <h3 class="card-title"><a href="car-single.html">Toyota Corolla or Similar</a></h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Passenger"><i
                                                    class="la la-users"></i><span>4</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Luggage"><i
                                                    class="la la-suitcase"></i><span>1</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$23.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="../../site_file/images/car-img2.png" alt="car-img">
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">Standard</p>
                                    <h3 class="card-title"><a href="car-single.html">Volkswagen Jetta 2 Doors or
                                            Similar</a></h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Passenger"><i
                                                    class="la la-users"></i><span>4</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Luggage"><i
                                                    class="la la-suitcase"></i><span>1</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$33.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="../../site_file/images/car-img3.png" alt="car-img">
                                    </a>
                                    <span class="badge">featured</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">Compact Elite</p>
                                    <h3 class="card-title"><a href="car-single.html">Toyota Yaris or Similar</a></h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Passenger"><i
                                                    class="la la-users"></i><span>4</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Luggage"><i
                                                    class="la la-suitcase"></i><span>1</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$23.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img4.png" alt="car-img">
                                    </a>
                                    <span class="badge">Bestseller</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">Fullsize Van</p>
                                    <h3 class="card-title"><a href="car-single.html">Seat Alhambra or Similar</a></h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Passenger"><i
                                                    class="la la-users"></i><span>6</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Luggage"><i
                                                    class="la la-suitcase"></i><span>2</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$45.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img5.png" alt="car-img">
                                    </a>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">Luxury</p>
                                    <h3 class="card-title"><a href="car-single.html">Mercedes E Class or Similar</a>
                                    </h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Passenger"><i
                                                    class="la la-users"></i><span>5</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Luggage"><i
                                                    class="la la-suitcase"></i><span>3</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$58.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item car-card mb-0">
                                <div class="card-img">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img6.png" alt="car-img">
                                    </a>
                                    <span class="badge">featured</span>
                                    <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                        title="Save for later">
                                        <i class="la la-heart-o"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">Mini</p>
                                    <h3 class="card-title"><a href="car-single.html">Fiat Fiesta 2 Doors or Similar</a>
                                    </h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Passenger"><i
                                                    class="la la-users"></i><span>4</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="top" title="Luggage"><i
                                                    class="la la-suitcase"></i><span>1</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">From</span>
                                            <span class="price__num">$23.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="btn-text">See details<i
                                                class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                        </div><!-- end car-carousel -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end car-area -->
    <!-- ================================
    END CAR AREA
================================= -->

    <!-- ================================
       START TESTIMONIAL AREA
================================= -->
    <section class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h2 class="sec__title line-height-50">What our customers are saying us?</h2>
                        <p class="sec__desc padding-top-30px">
                            Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero
                        </p>
                        <div class="btn-box padding-top-35px">
                            <a href="#" class="theme-btn">Explore All</a>
                        </div>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="testimonial-carousel carousel-action">
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat
                                    cupidatat non proident des.</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="../../site_file/images/team8.jpg" alt="testimonial image">
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
                                <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat
                                    cupidatat non proident des.</p>
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
                                <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat
                                    cupidatat non proident des.</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team10.jpg" alt="testimonial image">
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
                                <p class="testi__desc">Excepteur sint occaecat cupidatat non proident sunt in culpa
                                    officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat
                                    cupidatat non proident des.</p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team8.jpg" alt="testimonial image">
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
    START CTA AREA
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
       START BLOG AREA
================================= -->
    <section class="blog-area padding-top-30px padding-bottom-90px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">Latest News & Articles <br> You Might Like</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="../../site_file/images/blog-img.jpg" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-photo"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">Travel</a>
                                    <a href="#" class="badge">lifestyle</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="blog-single.html">When Traveling Avoid
                                        Expensive Hotels & Resorts</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 January, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">5 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="../../site_file/images/small-team1.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Leroy Bell</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="../../site_file/images/blog-img2.jpg" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-play"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">Video</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="blog-single.html">My Best Travel Tips:
                                        The Ultimate Travel Guide</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 February, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">4 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="../../site_file/images/small-team2.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Phillip Hunt</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <div class="card-item blog-card">
                        <div class="card-img">
                            <img src="../../site_file/images/blog-img3.jpg" alt="blog-img">
                            <div class="post-format icon-element">
                                <i class="la la-music"></i>
                            </div>
                            <div class="card-body">
                                <div class="post-categories">
                                    <a href="#" class="badge">audio</a>
                                </div>
                                <h3 class="card-title line-height-26"><a href="blog-single.html">By all Means, Travel to
                                        Popular Sites & Don’t Rule Out Other Locations</a></h3>
                                <p class="card-meta">
                                    <span class="post__date"> 1 March, 2020</span>
                                    <span class="post-dot"></span>
                                    <span class="post__time">3 Mins read</span>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="../../site_file/images/small-team3.jpg" alt="testimonial image">
                                </div>
                                <div class="author-bio">
                                    <a href="#" class="author__title">Luke Jacobs</a>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>
                                        <i class="la la-share icon-element"></i>
                                        <ul class="post-share-dropdown d-flex align-items-center">
                                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box text-center pt-4">
                        <a href="blog-grid.html" class="theme-btn">Read More Post</a>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section><!-- end blog-area -->
    <!-- ================================
       START BLOG AREA
================================= -->

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
       START CLIENTLOGO AREA
================================= -->
    <section class="clientlogo-area padding-top-80px padding-bottom-80px text-center">
        <div class="container">
            <div class="row"></div>
            <!---
            <div class="col-lg-12">
                <div class="client-logo">
                    <div class="client-logo-item">
                        <img src="../../site_fileimages/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item 
                    <div class="client-logo-item">
                        <img src="../../site_file/images/client-logo2.png" alt="brand image">
                    </div><!-- end client-logo-item 
                    <div class="client-logo-item">
                        <img src="../../site_file/images/client-logo3.png" alt="brand image">
                    </div><!-- end client-logo-item
                    <div class="client-logo-item">
                        <img src="../../site_file/images/client-logo4.png" alt="brand image">
                    </div><!-- end client-logo-item 
                    <div class="client-logo-item">
                        <img src="../../site_file/images/client-logo5.png" alt="brand image">
                    </div><!-- end client-logo-item 
                    <div class="client-logo-item">
                        <img src="../../site_file/images/client-logo6.png" alt="brand image">
                    </div><!-- end client-logo-item -->
        </div><!-- end client-logo -->
        </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end clientlogo-area -->
    <!-- ================================
                    START CLIENTLOGO AREA
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
                                    <div class="row">
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label for="fname" class="label-text">Fname</label>
                                                <div class="form-group">       
                                                    <input class="form-control" type="text" placeholder="First Name"
                                                        required>
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                            
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Lname</label>
                                                <div class="form-group">       
                                                    <input class="form-control" type="text" placeholder=" Last Name"
                                                        required>
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                                </div>
                            
                                <button type="submit"
                                    class="btn btn-primary text-center w-100"><strong><?= 'Submit' ?></strong></button>
                            </form>
                        </div>
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
                                    <div class="row">
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label for="fname" class="label-text">Fname</label>
                                                <div class="form-group">       
                                                    <input class="form-control" type="text" placeholder="First Name"
                                                        required>
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                            
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Lname</label>
                                                <div class="form-group">       
                                                    <input class="form-control" type="text" placeholder=" Last Name"
                                                        required>
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                                </div>
                            
                                <button type="submit"
                                    class="btn btn-primary text-center w-100"><strong><?= 'Submit' ?></strong></button>
                            </form>
                        </div>
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
    <script src="../../site_file/js/quantity-input.js"></script>
    <script src="../../site_file/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Validation library file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<!-- Sweetalert library file -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<script>

    $.ajax({
      type: "POST",
      url: "<?= site_url('mattress') ?>",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);

      if (!data.success) {
        if (data.errors.name) {
          $("#name-group").addClass("has-error");
          $("#name-group").append(
            '<div class="help-block">' + data.errors.name + "</div>"
          );
        }

        if (data.errors.email) {
          $("#email-group").addClass("has-error");
          $("#email-group").append(
            '<div class="help-block">' + data.errors.email + "</div>"
          );
        }

        if (data.errors.superheroAlias) {
          $("#superhero-group").addClass("has-error");
          $("#superhero-group").append(
            '<div class="help-block">' + data.errors.superheroAlias + "</div>"
          );
        }
      } else {
        $("form").html(
          '<div class="alert alert-success">' + data.message + "</div>"
        );
      }

    });

    event.preventDefault();
  });
</script>
</body>

</html>
