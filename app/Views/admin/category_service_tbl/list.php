<?= $this->extend('layout/main')?>
<?= $this->section('content')?>
<div class="col-lg-12 mb-6">         
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold">
                <li class="nav-item">
                <a class="nav-link <?php if(!isset($print_report) && !isset($edit_report))echo 'active'; ?>" id="list-tab" href="#list" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-plus mr-1"></i>
                    List Category Service
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if(isset($print_report))echo 'active'; ?>" id="add-tab" href="#add" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-text mr-1"></i>
                    Add Category Service
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
                            <th>Service name</th>
                            <th>Category name</th>     
                            <th>detail</th>                                                       
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
                            <th>#</th>
                            <th>Service name</th>
                            <th>Category name</th>     
                            <th>detail</th>                                                                                                  
                        <th class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($catergory as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= get_column_name_by_id('service_tbl', $u['service_id'], 'service_name') ?></td>
                                <td><?= $u['category_name'] ?></td>
                                <td><?= $u['detail'] ?></td>                                             
                                <td>
                                <a title="edit" href="" class="btn btn-success" ><i class="fe fe-edit mr-1" aria-hidden="true"></i>Edit</a>                 
                            <!--<a title="delete" href="" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>--->
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
<!-- end row -->            
                        <!--------add----->
    <div class="tab-pane fade <?php if(!isset($print_report))echo 'show active'; ?>" id="add" role="tabpanel" aria-labelledby="add-tab">    
        <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                    <h4 class="card-title">Add Category service</h4>
                    </div>
                </div>
                <div class="card-body ">
                 <form action="/cservice/add/goals" method="post">
            <div class="box-body">
            <div class="row">
            <div class="col-md-4">
							<label for="service_id" class="control-label">Service List</label>				
								<select name="service_id" class="form-control">
									<option value="">Select Service </option>
                                    <?php foreach($all_service as $service): ?>
                                        <option value="<?= $service['id'] ?>"><?= $service['service_name'] ?></option>
                                    <?php endforeach; ?>
							</select>
			</div>
            <div class="col-md-4">
                <label for="category_name" class="control-label">Category Name</label>
                    <div class="form-group">
                <input type="text" name="category_name"  class="form-control" id="category_name" />
            </div>
            </div>
            <div class="col-md-4">
                <label for="detail" class="control-label">Description</label>
                    <div class="form-group">
                    <input type="text" name="detail"  class="form-control" id="detail" />
            </div>
            </div>
    <!---   <div class="col-md-6">
						<label for="image" class="control-label">Image</label>
							<div class="form-group">
						<input type="file" name="image" id="imagew" onchange="readURL(this);" accept=".png, .jpg, .jpeg" />
							</div>
			</div>---->
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
                </form>
                </div>
                </div>
</div>
</div>
</div>
</div>
</div>

    <?= $this->endSection()?> 