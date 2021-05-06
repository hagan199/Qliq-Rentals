<?= $this->extend('layout/main')?>
<?= $this->section('content')?>

<div class="col-lg-12 mb-6">         
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold">
              <li class="nav-item">
                <a class="nav-link <?php if(!isset($print_report) && !isset($edit_report))echo 'active'; ?>" id="list-tab" href="#list" role="tab" aria-selected="true" data-toggle="tab">
                  <i class="fe fe-file-plus mr-1"></i>
                  List User
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if(isset($print_report))echo 'active'; ?>" id="add-tab" href="#add" role="tab" aria-selected="true" data-toggle="tab">
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
    <div class="tab-pane fade <?php if(!isset($print_report))echo 'show active'; ?>" id="list" role="tabpanel" aria-labelledby="list-tab">    
    <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <h4 class="card-title"><?= $title ?> </h4>
                </div>
                <div class="card-body">    
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Staff Name</th>
                            <th>Email</th>                                
                            <th>Gender</th>
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
                            <th>Phone</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>
                        <tbody>
                            <?php $i=1; foreach($users_detail as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['fname'] ?></td>
                                <td><?= $u['user_email'] ?></td>
                                <td><?= $u['gender'] ?></td>
                                <td><?php echo $u['phone']; ?></td>
                                <td>
                                <a title="edit" href="" class="btn btn-success" ><i class="fe fe-edit mr-1" aria-hidden="true"></i>Edit</a>
                                <a title="delete" href="" class="btn btn-danger" ><i   aria-hidden="true" ></i>Delete</a>
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
                 <form action="/users/add/useradd" method="post">
            <div class="box-body">
      

        <!--...............Staff Name......................  form action"/users/edit/1/doupdate"  -->
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
          <input type="text" name="phone"  class="form-control" placeholder="+233245958764" id="phone" required minlength="12" maxlength="12"  />
          </div>
          </div>
          <div class="col-md-4">
          <label for="gender" class="control-label">Gender</label>
          <div class="form-group">
            <input type="text" name="gender"  class="form-control" id="gender" />
            </div>
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
          <label for="user_email" class="control-label">Email</label>
          <div class="form-group">
            <input type="text" name="user_email" class="form-control" id="user_email" />
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