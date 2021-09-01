
<!----------------------------Booking Now ------------------>            
<div class="col-lg-4">
                    <div class="sidebar single-content-sidebar mb-0">
                        <div class="sidebar-widget single-content-widget">
                            <h3 class="title stroke-shape">Book Now </h3>
                            <div class="sidebar-widget-item">
                            <div class="contact-form-action">
                                    <div class="input-box">
                                        <label class="label-text" for="event_location">Event Locations </label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text" id="event_location" name="event_location"
                                                        placeholder="Enter city or town" >
                                                </div>
                                    </div>
                                    <div class="input-box">
                                            <label name="pick_date" class="label-text">Pickup Date</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" id="pick_date"  name="daterange-single"    readonly>
                                            </div>
                                    </div>
                                    <div class="input-box">
                                            <label  name="drop_off" class="label-text">Drop off date</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control"  type="text" id="drop_off" name="daterange-single"    readonly>
                                            </div>
                                    </div>
                                    <div class="input-box">
                                            <label class="label-text">Event Type</label>
                                                <div class="form-group">
                                                    <div class="select-contain w-auto">
                                                        <select class="select-contain-select" id="event_type" name="event_type">
                                                            <option value="Naming Ceremony" selected>Naming Ceremony 
                                                            </option>
                                                            <option value="Naming Ceremony">Naming Ceremony</option>
                                                            <option value="Graduation">Graduation</option>
                                                            <option value="Wedding">Wedding</option>
                                                            <option value="Funeral">Funeral</option>
                                                            <option value="Camp">Camp</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                            </div>
                                    </div>
                                <div class="input-box">
                                            <div class="qty-box d-flex align-items-center justify-content-between">
                                                    <label for="numer_room">Number Room</label>
                                                    <div class="qtyBtn d-flex align-items-center">
                                                        <div class="qtyDec"><i class="la la-minus"></i></div>
                                                        <input type="text" id="number_room" name="number_room" value="0" >
                                                        <div class="qtyInc"><i class="la la-plus"></i></div>
                                                    </div>
                                            </div>
                                    </div>
                                <br>
                            <div class="btn-box">
    
                            </div>
                            <button id="save_data"  class="theme-btn text-center w-100 mb-2">Book Now</button>
                            </div>
                            
                            </div><!-- end sidebar-widget-item -->
                            <div class="sidebar-widget-item py-4">
                                <div class="extra-service-wrap">
                                    <form action="#" method="post" class="extraServiceForm" id="extraServiceForm">
                                        <div class="total-price pt-3">
                                            <p class="text-black">Your Price</p>
                                            <p class="d-flex align-items-center"><span class="font-size-17 text-black">$</span> <input type="text" name="total" class="num" value="80.00" readonly="readonly"/><span>/ per Day</span></p>
                                        </div>
                                </div>
                            </div><!-- end sidebar-widget-item -->
                        

                            </form>
                        </div><!-- end sidebar-widget -->
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
                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() { 

        $('#save_data').click(function(){
		var event_location = $('#event_location').val();
		var pick_date = $('#pick_date').val();
		var drop_off = $('#drop_off').val();
		var number_room = $('#number_room').val();
        if(event_location !='' && drop_off !='' && pickup_date !='' && number_room !=''){
            $.ajax({
                url:'/savecanopies',
                method:'POST',
                data: {
                    event_location: event_location,
                    pick_date: pick_date,
                    drop_off: drop_off,
                    number_room: number_room                                     
                },
            })
        }
		else{
            alert('Saved');
		}
        });
    });
</script>
<!---------------------------End Booking Now ------------------>


