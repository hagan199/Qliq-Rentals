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
                                                    <input class="form-control" name="fname" id="fname" type="text" placeholder="First Name"
                                                        required>
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                            
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label  for="fname" class="label-text">Lname</label>
                                                <div class="form-group">       
                                                    <input class="form-control"  name="lname"  id="lname"  type="text" placeholder=" Last Name"
                                                        required>
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label  for="email" class="label-text">Email</label>
                                                <div class="form-group">       
                                                    <input class="form-control"  name="email" id="email"  type="text" placeholder=" Last Name"
                                                        required>
                                                </div>
                                            </div>
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-6 pr-0">
                                            <div class="input-box">
                                                <label  for="fname" class="label-text">Phone</label>
                                                <div class="form-group">       
                                                    <input class="form-control" type="text" name="phone" placeholder=" Last Name"
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
