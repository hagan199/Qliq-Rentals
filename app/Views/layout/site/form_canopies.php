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
                                                <label for="pick_date" class="label-text">Pickup Date </label>
                                                <div class="form-group">
                                                    <span class=""></span>
                                                    <input class="date-range form-control" id="date"  type="text" name="pick_date"
                                                        required>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                     


                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label for="drop_off" id="drop_off" id="event_type" class="label-text">Drop off date </label>
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
                                        <div class="col-lg-3 pr-0">
                                <div class="btn-box">
                                    <button  id="colorchange" data-toggle="modal"
                                        data-target="#contactdetail" class="theme-btn">Book</button>
                                </div>
                            </div>
                            </form>