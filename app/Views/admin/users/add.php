<?= $this->extend('layout/main')?>
<?= $this->section('content')?>
<div class="row">
  <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Add User</h4>
                  </div>
                </div>
                <div class="card-body ">
                 <form action="/user/index" method="post">
            <div class="box-body">
              <div class="row clearfix">

                <!--...............Staff Name......................  form action"/users/edit/1/doupdate"  -->
            <div class="row">
            <div class="col-md-4">
            <label for="fname" class="control-label">First Name</label>
            <div class="form-group">
              <input type="text" name="fname"  class="form-control" id="fname" />
            </div>
            </div>

          <div class="col-md-4">
            <label for="mname" class="control-label">Middle Name</label>
            <div class="form-group">
              <input type="text" name="mname"  class="form-control" id="mname" />
            </div>
            </div>
            <div class="col-md-4">
            <label for="lname" class="control-label">Last Name</label>
            <div class="form-group">
              <input type="text" name="lname"  class="form-control" id="lname" />
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-6">
            <label for="fname" class="control-label">First Name</label>
            <div class="form-group">
              <input type="text" name="fname"  class="form-control" id="fname" />
            </div>
            </div>
            <div class="col-md-6">
            <label for="lname class="control-label">Phone</label>
            <div class="form-group">
              <input type="text" name="lname"  class="form-control" id="lname" />
            </div>
            </div>
            </div> 

            <div class="row">
            <div class="col-md-6">
            <label for="gender" class="control-label">Gender</label>
            <div class="form-group">
            <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
            </div>
            </div>
            <div class="col-md-6">
            <label for="lname" class="control-label">Phone</label>
            <div class="form-group">
              <input type="text" name="lname"  class="form-control" id="lname" />
            </div>
            </div>
            </div> 
        </div>

              <div class="col-md-12" style="margin-top:3%">
                     <div class="box-footer">
                       <div class="form-group">
                         <div class="col-md-4"></div>
                       <div class="col-md-8">

                           <button type="submit" class="btn btn-success">
                             <i class="fa fa-check"></i>Submit
                           </button>
                        <a href="<?= site_url('user/index')?>" class="btn btn-warning">
          <i class="fa fa-arrow-left"></i> Back
        </a>

                                     </div>
                                       
                                 </div>
                       </div>
                   </div>
          </div>
             </form>
        
                </div>
              </div>
  </div>
          

            <?php echo form_close(); ?>
                </div>
              </div>
  </div>
</div>
<?= $this->endSection()?> 