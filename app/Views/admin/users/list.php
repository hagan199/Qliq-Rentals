<?= $this->extend('layout/main')?>
<?= $this->section('content')?>

<div class="col-lg-12 mb-6">         
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold">
                <li class="nav-item">
                <a class="nav-link <?php if(!isset($subcategory))echo 'active'; ?>" id="list-tab" href="#list" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-plus mr-1"></i>
                    List Users
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if(isset($subcategory))echo 'active'; ?>" id="add-tab" href="#add" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-text mr-1"></i>
                    Add User
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
    <div class="tab-content" id="v-pills-tabContent">             
          <!-------USER lIST---->
          <div class="tab-pane fade<?php if(!isset($subcategory))echo 'show active'; ?>" id="list" role="tab" aria-labelledby="list-tab">   
    <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <h4 class="card-title"><?= $title ?> </h4>
                </div>
                <div class="card-body">    
                  <div class="toolbar">
                    <!-youHere you can write extra buttons/actions for the toolbar -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Staff Name</th>
                            <th>Email</th>                                
                            <th>Gender</th>
                            <th>Username</th> 
                            <th>User Type</th>           
                            <th>Phone</th>
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>  
                            <th>#</th>                         
                            <th>Staff Name</th>
                            <th>Email</th>                                       
                            <th>Gender</th> 
                            <th>Username</th>  
                            <th>User Type</th>                                
                            <th>Phone</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                        <tbody>
                            <?php $i=1; foreach($users_detail as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['fname']. ' '.$u['lname']  ?></td>
                                <td><?= $u['email'] ?></td>
                                <td><?= $u['gender'] ?></td>
                                <td><?= $u['user_name'] ?></td>
                                <td><?php if($u['user_type'] == '101'){echo 'Vendor';} elseif($u['user_type'] == '202'){echo 'Admin';}    ?></td>
                                <td><?php echo $u['phone']; ?></td>
                                <td>
                                <a title="edit" href="" class="btn btn-success" ><i class="fe fe-edit mr-1" aria-hidden="true"></i>Edit</a>
                          <!---  <a title="delete" href="" class="btn btn-danger" ><i   aria-hidden="true" ></i>Delete</a>-->

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
        
        <!--------add----->
        <div class="tab-pane fade <?php if(isset($subcategory))echo 'show active'; ?>" id="add" role="tab" aria-labelledby="add-tab">      
  <div class="row">
  <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Add User</h4>
                  </div>
                </div>
                <div class="card-body ">
                 <form action="/users/add/useradd" method="post">
            <div class="box-body">
      

        <!--...............Staff Name......................-->
          <div class="row">
          <div class="col-md-6">
          <label for="fname" class="control-label">First Name</label>
          <div class="form-group">
          <input type="text" name="fname"  class="form-control" id="fname" />
          </div>
          </div>

            <div class="col-md-6">
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
          <input type="number" name="phone"  class="form-control" placeholder="+233245958764" id="phone" autocomplete="off" required minlength="13" maxlength="13" />
          </div>
          </div>
        
          <div class="col-md-4">
            <label for="gender" class="control-label">Gender</label>
            <select name="gender" class="form-control">
            <option value="" selected="selected" disabled="disabled">Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
          </div>
          <div class="col-md-4">
          <label for="user_name" class="control-label">Username</label>
                <div class="form-group">
                <input type="text" name="user_name"  class="form-control" id="user_name" />
            </div>
          </div>
          </div>

          <div class="row">
            <div class="col-md-6">
          <label for="user_password" class="control-label">Password</label>
          <div class="form-group">
            <input type="text" name="user_password"  class="form-control" id="user_password" />
            </div>
            </div>
            <div class="col-md-6">
          <label for="email" class="control-label">Email</label>
          <div class="form-group">
            <input type="text" name="email" class="form-control" id="email" />
            </div>
            </div>
          </div>

              <div class="col-md-12" style="margin-top:3%">
                    <div class="box-footer">
                      <div class="form-group">
                        <div class="col-md-4"></div>
                      <div class="col-md-8">

                        <button type="submit" class="btn btn-success">
                          <i class="fa fa-check"></i>ADD
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


          <!-- end row -->
          <?= $this->endSection()?> 