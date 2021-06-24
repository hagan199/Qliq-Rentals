<?= $this->extend('layout/main')?>
<?= $this->section('content')?>

<div class="col-lg-12 mb-6">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold">
                <li class="nav-item">
                <a class="nav-link <?php if(!isset($vendor_service))echo 'active'; ?>" id="list-tab" href="#list" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-plus mr-1"></i>
                    List Vendor Service
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link  <?php if(isset($vendor_service))echo 'active'; ?>" id="add-tab" href="#add" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-text mr-1"></i>
                    Add Vendor Service
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
            <!---------------USER lIST------------------>
        <div class="tab-pane fade <?php if(!isset($vendor_service))echo 'show active'; ?>" id="list" role="tabpanel" aria-labelledby="list-tab"> 
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
                            <th>Vendor Name</th>
                            <th>Service Name</th>                                
                            <th>category </th> 
                            <th>Sub category </th>
							<th>Price </th>
                            <th>Description </th>
                            <th>Image </th>  
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
							<th>#</th>
                            <th>Vendor Name</th>
                            <th>Service</th>                                
                            <th>category </th> 
                            <th>Sub category </th> 
							<th>Price </th>  
                            <th>Description </th>  
                            <th>Image </th>                      
                        <th class="text-right">Actions</th>
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($vendor as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>                       
                                <td><?= get_column_name_by_id('setting_vendor', $u['vendor_id'], 'company_name') ?></td>
                                <td><?= get_column_name_by_id('service_tbl', $u['service_id'], 'service_name') ?></td>
                                <td><?= get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') ?></td>
                                <td><?= get_column_name_by_id('sub_category_service_tbl', $u['sub_category_id'], 'sub_cat_name') ?></td>
                                <td><?= 'Gh¢ '. $u['price'] ?></td> 
                                <td><?= $u['description'] ?></td>   	
                                <td><img src="/uploads/images/<?= $u['name'] ?>" width="50px" /></td>		
                                <td>
                                <a title="edit" href="" class="btn btn-link btn-warning btn-just-icon like"><i class="material-icons">edit</i></a>                              
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


<div class="tab-pane fade <?php if(isset($vendor_service))echo 'show active'; ?>" id="add" role="tabpanel" aria-labelledby="add-tab">    
    <div class="row">
    <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                        <div class="card-text">
                        <h4 class="card-title">Setup Service Detail</h4>
                    </div>
                </div>
        <div class="card-body ">
            <form action="/vservice/add/goals" enctype="multipart/form-data" method="post">
        <div class="box-body">
            <div class="row">
                    <div class="col-md-4">
							<label for="vendor_id" class="control-label">Vendor Name</label>				
								<select name="vendor_id" class="form-control" required>
									<option value="">Select Vendor Name </option>
                                    <?php foreach($all_vendor_name as $vendor_name): ?>
                                        <option value="<?= $vendor_name['id'] ?>"><?= $vendor_name['company_name'] ?></option>
                                    <?php endforeach; ?>                    
							</select>
			</div>

            <div class="col-md-4">
					<label for="service_id" class="control-label">Service List</label>				
						    <select name="service_id" id="service_id" class="form-control" required>
								<option value="" selected disabled>Select Service  </option>
                                    <?php foreach($all_service as $service): ?>
                                        <option value="<?= $service['id'] ?>"><?= $service['service_name'] ?></option>
                                    <?php endforeach; ?>
							</select>
			</div>
            

            <div class="col-md-4">
					<label for="category_id" class="control-label">Category List</label>				
								<select name="category_id"  id="category" class="form-control" required>
                                </select>
			</div>
            <br>
            <br>
            <div class="col-md-4">
					<label for="sub_category_id" class="control-label"> Sub Category List</label>				
							<select name="sub_category_id" id="sub_category" class="form-control"required></select>
			</div>
            <br>
            <br>
            <div class="col-md-4">
                    <label for="image" class="form-label">Upload File</label>
                        <input type='file' name="image[]" multiple/>
                        <div id="myImg">
                </div>
            </div>
            <div class="col-md-4">
                    <label for="price" class="control-label">Price</label>
                        <div class="form-group">
                <input type="number" name="price"  class="form-control" id="price" required/>
            </div>
            </div>
            <div class="col-md-4">
                <label for="description" class="control-label">Description</label>
                    <div class="form-group">
                        <textarea type="textarea" name="description"  class="form-control" id="description" placeholder="Enter Description"rows="4" cols="50"></textarea>
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



<script> 
  ;(function($) { 
    'use strict' 
    $(function() { 

    $('#service_id').change(function(){ 
        var service_id = $('#service_id').val();  
    if (service_id != '') { 
                    $.ajax({ 
                        url : "/dynamic_dependent", 
                        method: "POST", 
                        data: {service_id:service_id}, 
                        success:function(data) 
                        { 
                                $('#category').html(data); 
                        } 
                }) 
            } 
        })
        
        $('#category').change(function(){ 
        var category = $('#category').val();  
    if (category != '') { 
                    $.ajax({ 
                        url : "/dynamic_dependent_cat", 
                        method: "POST", 
                        data: {category:category}, 
                        success:function(data) 
                        { 
                                $('#sub_category').html(data); 
                        } 
                }) 
            } 
        })

}) 


  })(jQuery) 
</script>



<script> 
  ;(function($) { 
    'use strict' 
    $(function() { 

       


}) 


  })(jQuery) 
</script>


























            <?= $this->endSection()?> 
           