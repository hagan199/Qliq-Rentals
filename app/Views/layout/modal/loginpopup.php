<div class="modal-popup">
        <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">LOGIN IN</h5>
                            <p class="font-size-14"></p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                 
                        <?php if (isset($validation)): ?>
                    <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <label style="margin-left: -40px;margin-bottom: -30px;"><strong><?= $validation->listErrors() ?></strong></label>
                    </div>
                    <?php endif; ?>
                    <form id="form-validation-simple" name="form-validation-simple" method="POST" action="/login/auth" class="mb-4">
  
                    <div class="form-group mb-4">
                    <input type="text" class="form-control" name="email" data-validation="[NOTEMPTY]" autocomplete="off" tabindex="1" placeholder="Email" />
                    </div>
                    <div class="form-group mb-4">
                    <input type="password" name="password" data-validation="[NOTEMPTY]" class="form-control" autocomplete="off" tabindex="2" placeholder="Password" />
                    </div>
                    <button type="submit" class="btn btn-primary text-center w-100"><strong><?= 'Log in' ?></strong></button>
                    </form>
                 
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end modal-popup -->