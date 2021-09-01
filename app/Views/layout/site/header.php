
    </style><header class="header-area">
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
                    <?php if (session()->get("success")): ?>
        <script>
            $(document).ready(function() { $.notify({ message: '<?= session()->get("success") ?>',}, { type: 'success',},)})
        </script>
    <?php elseif (session()->get("error")): ?>
      <script>
            $(document).ready(function() { $.notify({ message: '<?= session()->get("error") ?>',}, { type: 'danger',},)})
        </script>
    <?php endif; ?>
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div class="header-right d-flex align-items-center justify-content-end">
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto">
                                    
                                    </div>
                                </div>
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto">
                                       
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
                    <div class="col-md-11">
                        <div class="menu-wrapper">
                            <a href="/sites" class="down-button"><i class="la la-angle-down"></i></a>
                            <div class="logo">
                            <a href="/sites" >
                                <h3>QI Rental</h3> </a>
                        <div class="menu-toggler">
                                    <i class="la la-bars">QI Rental</i>
                                    <i class="la la-times"></i>
                                </div><!-- end menu-toggler -->
                            </div><!-- end logo -->
                            <div class="main-menu-content">
                                <nav>
                                <ul>
    <li><a href="/sites"> Home</a></li>
    <li><a href="/about">About</a></li>
    <li>
                                        <a href="/services">Services <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item"> 
                                        <li><a href="#">Social Gathering <i class="la la-plus"></i></a>
                                        <ul class="sub-menu">
                                                <li><a href="/canopies">Canopies</a></li>
                                                <li><a href="/chairs">Chairs</a></li>
                                                <li><a href="/tables">Tables</a></li>
                                                <li><a href="/mattress">Mattress</a></li>
                                    <!---       <li><a href="#">Urinal Cubicles</a></li>
                                                <li><a href="#">Ice Containers</a></li>
                                                <li><a href="#">Food Warmers</a></li>
                                                <li><a href="#">Plates & Spoons</a></li>
                                                <li><a href="#">Deco Items</a></li>-->
                                                </ul>
                                        </li>
                                        <li><a href="#">Cleaning <i class="la la-plus"></i></a>
                                        <ul class="sub-menu">
                                                <li><a href="mower">Mower</a></li>
                                                <li><a href="gardening-tools">Gardening Tools</a></li>
                                                <li><a href="laundry">Laundry</a></li>
                                                <li><a href="house-cleaning">House Cleaning</a></li>
                                                </ul>
                                        </li>
                                        <li><a href="#">Music & Ent.<i class="la la-plus"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Sound Systems</a></li>
                                                <li><a href="#">Stage & Lighting</a></li>
                                                <li><a href="#">Drones & Cameras</a></li>
                                                <li><a href="#">Video Coverage</a></li>
                                                <li><a href="#">Stage Setup</a></li>
                                                </ul>
                                        </li>
                                         <!---    <li><a href="#">Pickups & Delivery</a></li>
                                        <li><a href="#">Equipment & Tools</a></li>
                                        <li><a href="#">Event Centres </a></li>
                                        <li><a href="#">Business Tools & Equipment</a></li>
                                        <li><a href="#">Accomodation</a></li>
                                        <li><a href="#">Rent a Car</a></li>
                                        <li><a href="#">Transporters</a></li>-->
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