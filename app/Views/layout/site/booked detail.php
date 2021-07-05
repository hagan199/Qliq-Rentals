
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
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="contact-form-action">
                                <?= $this->include('layout/site/form_canopies') ?>            
                        </div>
                    </div><!-- end tab-pane -->
                            <!------------Mattress ------------------->
                            <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="package-tab">
                                <div class="contact-form-action">
                                <?= $this->include('layout/site/form_mattress') ?>    
                                </div>
                            </div>
    <!-- end tab-pane -->
                            <!----------------------Tables------------------------->
                            <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                                <div class="contact-form-action">
                                <?= $this->include('layout/site/form_tables') ?>   
                            </div>
                        </div><!-- end tab-pane -->
                            <!-------------------------------Chair---------------------------->
                            <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                                <div class="contact-form-action">
                                <?= $this->include('layout/site/form_chair') ?>   
                            </div><!-- end tab-pane -->

                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->

