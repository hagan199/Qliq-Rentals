<?= $this->extend('layout/main')?>
<?= $this->section('content')?>

<div class="col-lg-12 mb-6">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold">
                <li class="nav-item">
                <a class="nav-link <?php if(!isset($print_report) && !isset($edit_report))echo 'active'; ?>" id="list-tab" href="#list" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-plus mr-1"></i>
                    List Vendor Service
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if(isset($print_report))echo 'active'; ?>" id="add-tab" href="#add" role="tab" aria-selected="true" data-toggle="tab">
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
                            <th>Vendor Name</th>
                            <th>Service Name</th>                                
                            <th>category </th> 
							<th>Price </th> 
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
							<th>#</th>
                            <th>Vendor Name</th>
                            <th>Service</th>                                
                            <th>category </th> 
							<th>Price </th>                        
                        <th class="text-right">Actions</th>
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($vendor as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['id'] ?></td>
                                <td><?= $u['company_name'] ?></td>
								<td><?= $u['address'] ?></td>
                                <td><?= $u['phone'] ?></td>   
                                <td><?= $u['admin_id'] ?></td>  
										
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

            <!--------add----->
<div class="tab-pane fade <?php if(!isset($print_report))echo 'show active'; ?>" id="add" role="tabpanel" aria-labelledby="add-tab">    
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

            <div class="col-md-6">
							<label for="service_id" class="control-label">Vendor Name</label>				
								<select name="service_id" class="form-control">
									<option value="">Select Vendor Name </option>
                                    <?php foreach($all_vendor_name as $vendor_name): ?>
                                        <option value="<?= $vendor_name['id'] ?>"><?= $vendor_name['company_name'] ?></option>
                                    <?php endforeach; ?>                    
							</select>
			</div>

            <div class="col-md-6">
							<label for="service_id" class="control-label">Service List</label>				
								<select name="service_id" class="form-control">
									<option value="">Select Vendor  </option>
                                    <?php foreach($all_service as $service): ?>
                                        <option value="<?= $service['id'] ?>"><?= $service['service_name'] ?></option>
                                    <?php endforeach; ?>
							</select>
			</div>
            <div class="col-md-6">
							<label for="category_id" class="control-label">Category List</label>				
								<select name="category_id" class="form-control">
									<option value="">Select Category  </option>
                                    <?php foreach($all_categoryservice as $categoryservice): ?>
                                        <option value="<?= $categoryservice['id'] ?>"><?= $categoryservice['category_name'] ?></option>
                                    <?php endforeach; ?>
									?>
							</select>
			</div>
            <div class="col-md-6">
                            <label for="price" class="control-label">Price</label>
                        <div class="form-group">
            <input type="text" name="price"  class="form-control" id="price" />
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




































            <?= $this->endSection()?> 
           