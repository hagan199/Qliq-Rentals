<?= $this->extend('layout/main')?>
<?= $this->section('content')?>

<div class="col-lg-12 mb-6">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold">
                <li class="nav-item">
                <a class="nav-link <?php if(!isset($print_report) && !isset($edit_report))echo 'active'; ?>" id="list-tab" href="#list" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-plus mr-1"></i>
                    List Vendor
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if(isset($print_report))echo 'active'; ?>" id="add-tab" href="#add" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-text mr-1"></i>
                    Setup Vendor
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if(isset($print_report))echo 'active'; ?>" id="edit-tab" href="#edit" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-text mr-1"></i>
                        Own Vendor Detail
                </a>
                </li>
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
                            <th>Business Name</th>
                            <th>Address</th>                                
                            <th>Phone Number</th>                       
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
                        <th>#</th>
                        <th>Business Namee</th>
                        <th>Address</th>                                
                        <th>Phone Number</th>                         
                        <th class="text-right">Actions</th>
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($vendor as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['company_name'] ?></td>
                                <td><?= $u['address'] ?></td>
                                <td><?= $u['phone'] ?></td>                                                         
                                <td>
                                <a  title="edit" href="" class="btn btn-success" ><i class="fe fe-edit mr-1" aria-hidden="true"></i>Edit</a>
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
            <!-- end row -->
            </div>

            <!--------add----->
<div class="tab-pane fade <?php if(!isset($print_report))echo 'show active'; ?>" id="add" role="tabpane2" aria-labelledby="add-tab">    
    <div class="row">
    <div class="col-lg-12 col-md-offset-3">
                <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                    <h4 class="card-title">Vendor Detail</h4>
                    </div>
                </div>
                <div class="card-body ">
             <form action="/svendor/add/goals" method="post">
            <div class="box-body">
            <div class="row">
            <div class="col-md-4">
                <label for="company_name" class="control-label">Business Name</label>
                        <div class="form-group">
                        <input type="text" name="company_name"  class="form-control" id="company_name" />
                    </div>
            </div>   
            <div class="col-md-4">
                <label for="address" class="control-label">Address</label>
                    <div class="form-group">
                        <input type="text" name="address"  class="form-control" id="address" />
                    </div>
                </div>     
                <div class="col-md-4">
                <label for="address" class="control-label">Ghana GPS</label>
                    <div class="form-group">
                        <input type="text" name="address"  class="form-control" id="address" />
                    </div>
                </div> 
                <div class="col-md-4">
                <label for="address" class="control-label">Business Acctivity</label>
                    <div class="form-group">
                        <input type="text" name="address"  class="form-control" id="address" />
                    </div>
                </div>  
                <div class="col-md-4">
                <label for="address" class="control-label">Area</label>
                    <div class="form-group">
                        <input type="text" name="address"  class="form-control" id="address" />
                    </div>
                </div> 
                <div class="col-md-4">
                <label for="address" class="control-label">Sub Metro</label>
                    <div class="form-group">
                        <input type="text" name="address"  class="form-control" id="address" />
                    </div>
                </div> 
                <div class="col-md-4">
                <label for="address" class="control-label">Street Name</label>
                    <div class="form-group">
                        <input type="text" name="address"  class="form-control" id="address" />
                    </div>
                </div> 
            <div class="col-md-4">
                <label   label for="phone" class="control-label">Phone</label>
                        <div class="form-group">
                        <input type="tel" name="phone"  class="form-control" placeholder="+233245958764" id="phone" required minlength="13" maxlength="13"  />
                    </div>
            </div>
            <div class="col-md-4">
                <label   label for="email" class="control-label">Email</label>
                        <div class="form-group">
                        <input type="email" name="email"  class="form-control" placeholder="info@qlipintegrations.com" id="email" />
                    </div>
            </div>
            </div>
            <class="col-md-12" style="margin-top:3%">
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
                </class=>
            </form>        
                </div>
                </div>    
            </div>
    </div>
    </div>
    </div>

<div class="tab-pane fade <?php if(!isset($print_report))echo 'show active'; ?>" id="edit" role="tabpanel3" aria-labelledby="edit-tab">    
    <div class="row">
    <div class="col-lg-12 col-md-offset-3">
                <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                    <h4 class="card-title">Setup Own Detail</h4>
                    </div>
                </div>
                <div class="card-body ">
                 <form action="/svendor/edit/goals" method="post">
            <div class="box-body"> 
            <div class="row">
            <div class="col-md-4">
                    <label for="fname" class="control-label">First Name</label>
                        <div class="form-group">
                    <input type="text" name="fname"  class="form-control" id="fname" />
                    </div>
            </div>
            <div class="col-md-4">
                <label for="lname" class="control-label">Last Name</label>
                    <div class="form-group">
                    <input type="text" name="lname"  class="form-control" id="lname" />
                </div>
            </div>
            <div class="col-md-4">
                <label for="lname" class="control-label">GhanaPost GPS</label>
                    <div class="form-group">
                    <input type="text" name="lname"  class="form-control" id="lname" />
                </div>
            </div>
            <div class="col-md-4">
                <label for="tin_num" class="control-label">Tin Number</label>
                    <div class="form-group">
                    <input type="text" name="lname"  class="form-control" id="lname" />
                </div>
            </div>
            <div class="col-md-4">
                <label for="lname" class="control-label">National ID</label>
                    <div class="form-group">
                    <input type="text" name="lname"  class="form-control" id="lname" />
                </div>
            </div>
            <div class="col-md-4">
                <label for="user_name" class="control-label"> Username</label>
                    <div class="form-group">
                    <input type="text" name="user_name"  class="form-control" id="user_name" />
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4">
                <label for="user_email" class="control-label">Email</label>
                <div class="form-group">
                <input type="text" name="user_email"  class="form-control" id="user_email" />
                </div>
            </div>

            <div class="col-md-4">
                <label for="address" class="control-label">Address</label>
                <div class="form-group">
                <input type="text" name="address"  class="form-control" id="address" />
            </div>
            </div>          
            <div class="col-md-4">
                <label for="phone" class="control-label">Phone</label>
                    <div class="form-group">
                <input type="tel" name="phone"  class="form-control" placeholder="+233245958764" id="phone" required minlength="13" maxlength="13"  />
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


        <?= $this->endSection()?> 
