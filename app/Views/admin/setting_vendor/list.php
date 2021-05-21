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
                <li class="nav-item">
                <a class="nav-link <?php if(isset($print_report))echo 'active'; ?>" id="edit-tab" href="#add_update" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-text mr-1"></i>
                    Setup Vendor Service
                </a>
                </li>
            </ul>
        </div>
    <div class="tab-content" id="v-pills-tabContent">    
                <!-------USER lIST---->
        <div class="tab-pane fade <?php if(!isset($print_report) && !isset($edit_report))echo 'show active'; ?>" id="list" role="tab" aria-labelledby="list-tab"> 
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
                            <th>Area</th>      
                            <th>Ghana GPS</th>                   
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
                        <th>#</th>
                        <th>Business Name</th>
                        <th>Address</th>                                
                        <th>Phone Number</th>    
                        <th>Area</th>  
                        <th>Ghana GPS</th>                      
                        <th class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($vendor as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['company_name'] ?></td>
                                <td><?= $u['address'] ?></td>
                                <td><?= $u['phone'] ?></td>  
                                <td><?= $u['area'] ?></td>   
                                <td><?= $u['gps'] ?></td>                                                        
                                <td>
                                <a  title="edit" href="" class="btn btn-success" ><i class="fe fe-edit mr-1" aria-hidden="true"></i>Edit</a>
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
<div class="tab-pane fade <?php if(isset($print_report))echo 'show active'; ?>" id="add" role="tab" aria-labelledby="add-tab">    
    <div class="row">
    <div class="col-lg-12 col-md-offset-3">
                <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                    <h4 class="card-title">Vendor Detail</h4>
                    </div>
                </div>
                <div class="card-body ">
            <form action="/svendor/add/goals" method="post"    enctype="multipart/form-data">
            <div class="box-body">
            <div class="row">
        <div class="col-md-4">
                <label for="company_name" class="control-label">Business Name</label>
                        <div class="form-group">
                        <input type="text" name="company_name"  class="form-control" id="company_name" required/>
                    </div>
            </div>  
            <div class="col-md-4">
                <label for="tax_num" class="control-label">Tax Idenification Number</label>
                        <div class="form-group">
                        <input type="text" name="tax_num"  class="form-control" id="tax_num" />
                    </div>
            </div> 
            <div class="col-md-4">
                <label for="address" class="control-label">Address</label>
                    <div class="form-group">
                        <input type="text" name="address"  class="form-control" id="address" />
                    </div>
                </div>     
                <div class="col-md-4">
                <label for="gps" class="control-label">Ghana GPS</label>
                    <div class="form-group">
                        <input type="text" name="gps"  class="form-control" id="gps" />
                    </div>
                </div> 
                <div class="col-md-4">
                <label for="area" class="control-label">Area</label>
                    <div class="form-group">
                        <input type="text" name="area"  class="form-control" id="area" required/>
                    </div>
                </div> 
                <div class="col-md-4">
                <label for="sub_metro" class="control-label">Sub Metro</label>
                    <div class="form-group">
                        <input type="text" name="sub_metro"  class="form-control" id="sub_metro" />
                    </div>
                </div> 
        
                <div class="col-md-4">
                <label for="street_name" class="control-label">Street Name</label>
                    <div class="form-group">
                        <input type="text" name="street_name"  class="form-control" id="street_name" />
                    </div>
                </div> 

            <div class="col-md-4">
                <label   label for="phone" class="control-label">Phone</label>
                        <div class="form-group">
                        <input type="number" name="phone"  class="form-control" placeholder="+233245958764" id="phone" required minlength="13" maxlength="13"  required/>
                    </div>
            </div>
            <div class="col-md-4">
                <label   label for="email" class="control-label">Email</label>
                        <div class="form-group">
                        <input type="email" name="email"  class="form-control" placeholder="info@qlipintegrations.com" id="email" />
                    </div>
            </div>
            <div class="col-md-4">
                <label for="business_activity" class="control-label">Business Activity</label>
                    <div class="form-group">
                        <textarea type="text" name="business_activity"  class="form-control" id="business_activity" ></textarea>
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

<div class="tab-pane fade <?php if(isset($print_report))echo 'show active'; ?>" id="edit" role="tab" aria-labelledby="edit-tab">    
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
        

        <!--...............Staff Name......................  form action"/users/edit/1/doupdate"  -->
        <div class="row">
            <div class="col-md-6">
                <label for="fname" class="control-label">First Name</label>
                <div class="form-group">
                <input type="text" name="fname"  class="form-control" id="fname" required/>
            </div>
            </div>

            <div class="col-md-6">
            <label for="lname" class="control-label">Last Name</label>
            <div class="form-group">
                <input type="text" name="lname"  class="form-control" id="lname" required/>
            </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-4">
                <label for="phone" class="control-label">Phone</label>
                <div class="form-group">
                <input type="number" name="phone"  class="form-control" placeholder="+233245958764" id="phone" required minlength="12" maxlength="12"  required/>
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
                <input type="text" name="user_name"  class="form-control" id="user_name" required/>
            </div>
        </div>
            </div>
        <div class="row">
            <div class="col-md-4">
            <label for="user_password" class="control-label">Password</label>
        <div class="form-group">
            <input type="text" name="user_password"  class="form-control" id="user_password"   required/>
            </div>
            </div>
            <div class="col-md-4">
                <label for="tin_number" class="control-label">Tin Number</label>
                    <div class="form-group">
                    <input type="text" name="tin_number"  class="form-control" id="tin_number" />
                </div>
            </div>
            <div class="col-md-4">
                <label for="nation_id" class="control-label">National ID</label>
                    <div class="form-group">
                    <input type="text" name="nation_id"  class="form-control" id="nation_id" required/>
                </div>
            </div>
            <div class="col-md-4">
							<label for="seting_vendor_id" class="control-label">List of Company</label>				
								<select name="seting_vendor_id" class="form-control" required>
									<option value="">Select List of Company </option>
                                    <?php foreach($all_vendor as $vendor): ?>
                                        <option value="<?= $vendor['id'] ?>"><?= $vendor['company_name'] ?></option>
                                    <?php endforeach; ?>
							</select>
			</div>
            <div class="col-md-4">
                <label for="gps" class="control-label">GhanaPost GPS</label>
                    <div class="form-group">
                    <input type="text" name="gps"  class="form-control" id="gps" required/>
                </div>
            </div>
            
            <div class="col-md-4">
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

    <div class="tab-pane fade <?php if(!isset($print_report))echo 'show active'; ?>" id="add_update" role="tab" aria-labelledby="add-tab">    
    <div class="row">
    <div class="col-md-12">
                <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                    <h4 class="card-title">Setup Service Detail</h4>
                    </div>
                </div>
                <div class="card-body ">
                 <form action="/vservice/add/goals" method="post">
            <div class="box-body">
            <div class="row">
            <div class="col-md-6">
							<label for="vendor_id" class="control-label">Vendor Name</label>				
								<select name="vendor_id" class="form-control" required>
									<option value="">Select Vendor Name </option>
                                    <?php foreach($all_vendor_name as $vendor_name): ?>
                                        <option value="<?= $vendor_name['id'] ?>"><?= $vendor_name['company_name'] ?></option>
                                    <?php endforeach; ?>                    
							</select>
			</div>

            <div class="col-md-6">
							<label for="service_id" class="control-label">Service List</label>				
								<select name="service_id" class="form-control" required>
									<option value="">Select Service  </option>
                                    <?php foreach($all_service as $service): ?>
                                        <option value="<?= $service['id'] ?>"><?= $service['service_name'] ?></option>
                                    <?php endforeach; ?>
							</select>
			</div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-6">
							<label for="category_id" class="control-label">Category List</label>				
								<select name="category_id" class="form-control" required>
									<option value="">Select Category  </option>
                                    <?php foreach($all_categoryservice as $categoryservice): ?>
                                        <option value="<?= $categoryservice['id'] ?>"><?= $categoryservice['category_name'] ?></option>
                                    <?php endforeach; ?>
									?>
							</select>
			</div>
            
            <div class="col-md-4">
        <label for="image" class="form-label">Upload File</label>
        <input class="form-control" name='image' type="file" id="image">
            </div>

            <div class="col-md-6">
							<label for="sub_category_id" class="control-label"> Sub Category List</label>				
							<select name="sub_category_id" class="form-control"required> 
									<option value="">Select Sub Category  </option>
                                    <?php foreach($all_subcategoryservice as $subcategoryservice): ?>
                                        <option value="<?= $subcategoryservice['id'] ?>"><?= $subcategoryservice['sub_cat_name'] ?></option>
                                    <?php endforeach; ?>
									?>
						</select>
			</div>
            <br>
            <br>
            <div class="col-md-6">
                            <label for="price" class="control-label">Price</label>
                        <div class="form-group">
                <input type="number" name="price"  class="form-control" id="price"  min="1" max="5" required/>
            </div>
            </div>
            </div>
            <div class="col-md-12" style="margin-top:3%">
                    <div class="box-footer">
                        <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-check"></i>Add
                        </button>
                         </div>
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


        <?= $this->endSection()?> 
