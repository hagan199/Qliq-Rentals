<?= $this->extend('layout/main')?>
<?= $this->section('content')?>

<!---
<div class="col-lg-12 mb-6">
          
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold">
              <li class="nav-item">
                <a class="nav-link <?php if(!isset($print_report) && !isset($edit_report))echo 'active'; ?>" id="list-tab" href="#list" role="tab" aria-selected="true" data-toggle="tab">
                  <i class="fe fe-file-plus mr-1"></i>
                  List Booking Hall
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if(isset($print_report))echo 'active'; ?>" id="add-tab" href="#add" role="tab" aria-selected="true" data-toggle="tab">
                  <i class="fe fe-file-text mr-1"></i>
                  Add Booking Hall
                </a>
              </li>
              <?php if(isset($edit_report)): ?>
              <li class="nav-item">
                <a class="nav-link active " id="edit-list-tab" href="#edit" role="tab" aria-selected="true" data-toggle="tab">
                  <i class="fe fe-file-text mr-1"></i>
                  list of report data
                </a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
----->

          <div class="tab-content" id="v-pills-tabContent">   
    <!-------USER lIST---->
    <div class="tab-pane fade <?php if(!isset($print_report))echo 'show active'; ?>" id="list" role="tabpanel" aria-labelledby="list-tab">  
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                <h4 class="card-title"><?= $title ?> </h4>
                </div>
                <div class="card-body">    
                <div class="toolbar">
                    <!----------Here you can write extra buttons/actions for the toolbar -->
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Event Location</th>
                        <th>Client Name</th>  
                        <th>Event Type</th>                              
                        <th>Pick Date</th> 
                        <th>Drop off Date</th>  
                        <th>Number</th> 
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Vendor Name</th> 
                        <th>Category</th> 
                        <th>Cat Service</th>                        
                        <th>Service</th>                 
                        <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
                        <th>#</th>
                        <th>Event Location</th>
                        <th>Client Name</th>  
                        <th>Event Type</th>                              
                        <th>Pick Date</th> 
                        <th>Drop off Date</th>  
                        <th>Number</th> 
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Vendor Name</th>
                        <th>Category</th> 
                        <th>Cat Service</th>  
                        <th>Service</th>       
                        <th class="text-right">Actions</th>
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($booking_list as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['event_location'] ?></td>
                                <td><?= $u['fname']. ' ' .$u['lname'] ?></td> 
                                <td><?= $u['event_type'] ?></td>               
                                <td><?= $u['pickup_date'] ?></td>
                                <td><?= $u['drop_off'] ?></td>
                                <td><?= $u['number_room'] ?></td> 
                                <td id="status" class="text-center">
                              <?php
                              if ($u['status']==='0'){
                                ?>
                              <i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                              <span class="sr-only">Loading...</span>

                              <?php } else {?>
                                <a class="btn btn-sm btn-outline-success"><i class="fa fa-check text-default"></i></a>
                              <?php }?>
                              </td>
                                <td><?= $u['status'] ?></td>  
                                <td><?= get_column_name_by_id('setting_vendor', $u['vendor_id'], 'company_name') ?></td>
                                <td><?= get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') ?></td>
                                <td><?= get_column_name_by_id('sub_category_service_tbl', $u['cat_service_id'], 'sub_cat_name') ?></td>
                                <td><?= get_column_name_by_id('service_tbl', $u['service_id'], 'service_name') ?></td>         
                                <td>
                                <a href="#" class="theme-btn theme-btn-small"><i class="la la-times mr-1"></i>Cancel</a>
                                </td>
                            </tr>
                            <?php } ?>
                        
                        </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
</div>



          <!-- 
   
  
  <div class="tab-pane fade <?php if(!isset($print_report))echo 'show active'; ?>" id="add" role="tabpanel" aria-labelledby="add-tab">    
  <div class="row">
  <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Add User</h4>
                  </div>
                </div>
                <div class="card-body ">
                 <form action="/user/add" method="post">
            <div class="box-body">
      

   
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
          <div class="col-md-4">
          <label for="phone" class="control-label">Phone</label>
          <div class="form-group">
          <input type="tel" name="phone"  class="form-control" placeholder="+233245958764" id="phone" required minlength="13" maxlength="13"  />
          </div>
          </div>
          <div class="col-md-4">
          <label for="gender" class="control-label">Gender</label>
          <div class="form-group">
            <input type="text" name="gender"  class="form-control" id="gender" />
            </div>
            </div>
          <div class="col-md-4">
          <label for="date" class="control-label">Date</label>
          <div class="form-group">
            <input type="date" name="date"  class="form-control" id="date" />
            </div>
            </div>
        
            </div>

          <div class="row">
            <div class="col-md-6">
          <label for="hall_type" class="control-label">Hall Detail</label>
          <div class="form-group">
            <input type="text" name="hall_type"  class="form-control" id="hall_type" />
            </div>
            </div>
            <div class="col-md-6">
          <label for="email" class="control-label">Email</label>
          <div class="form-group">
            <input type="text" name="email" class="form-control" id="email" />
            </div>
            </div>
    
            </div>
            <script>
					function yesnoCheck() {
						if (document.getElementById('yes_member').checked) {
							document.getElementById('classHide').style.display = 'block';
						} else document.getElementById('classHide').style.display = 'none';

					}
				</script>

                <div class="col-md-6">
						<p>Are u a member GNAT?</p>
						<input type="radio" name="member" value="1" id="yes_member" onClick="yesnoCheck();"> YES
						<input type="radio" name="member" value="0" id="no_member" onClick="yesnoCheck();"> NO

					</div>

					<div class="col-md-6" id="classHide" style="display:none">
						<label for="gnat_id" class="control-label"> ID GNAT</label>
						<div class="form-group">
							<input placeholder="ID GNAT" type="text" name="gnat_id"
                               class="form-control"
                                   id="gnat_id" autocomplete="off"/>
                        </div>
              <div class="col-md-12" style="margin-top:3%">
                    <div class="box-footer">
                      <div class="form-group">
                        <div class="col-md-4"></div>
                      <div class="col-md-8">

                        <button type="submit" class="btn btn-success">
                          <i class="fa fa-check"></i>Submit
                        </button>
                         </div>
                      </div>
                  </div>
          </div>
             </form>
        
                </div>
              </div>
  </div>
          
      
      </div>
    </div>
</div>
</div>






          <?= $this->endSection()?> 