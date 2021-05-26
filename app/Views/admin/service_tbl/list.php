<?= $this->extend('layout/main')?>
<?= $this->section('content')?>

<div class="col-lg-12 mb-6">         
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-bold">
                <li class="nav-item">
                <a class="nav-link <?php if(!isset($service))echo 'active'; ?>" id="list-tab" href="#list" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-plus mr-1"></i>
                    List Service
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if(isset($service))echo 'active'; ?>" id="add-tab" href="#add" role="tab" aria-selected="true" data-toggle="tab">
                    <i class="fe fe-file-text mr-1"></i>
                    Add Service
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
        <!------Service list---->
    <div class="tab-pane fade <?php if(!isset($service))echo 'show active'; ?>" id="list" role="tabpanel" aria-labelledby="list-tab"> 
            <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                <h4 class="card-title">Service </h4>
                </div>
                <div class="card-body">    
                <div class="toolbar">
                    <!--    Here you can write extra buttons/actions for the toolbar -->
                </div>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service Name</th>     
                            <th>Detail</th>                                     
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
                            <th>#</th>                         
                            <th>Service Name</th>
                            <th>Detail</th>                                                                                      
                        <th class="text-right">Actions</th>
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($service as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['service_name'] ?></td>
                                <td><?= $u['detail'] ?></td>                                             
                                <td>
                                <a title="edit" href="" class="btn btn-success" ><i class="fe fe-edit mr-1" aria-hidden="true"></i>Edit</a>
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
        <div class="tab-pane fade <?php if(isset($service))echo 'show active'; ?>" id="add" role="tabpanel" aria-labelledby="add-tab">    
        <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                    <div class="card-text">
                    <h4 class="card-title"><?= $title ?> </h4>
                    </div>
                </div>
                <div class="card-body ">
                 <form action="/services/add/servicesadd" method="post">
            <div class="box-body">

            <div class="row">
            <div class="col-md-6">
                <label for="service_name" class="control-label">Service Name</label>
                    <div class="form-group">
                        <input type="text" name="service_name"  class="form-control" id="service_name" required/>
                </div>
            </div>
            <div class="col-md-6">
                <label for="detail" class="control-label">Service Details</label>
                    <div class="form-group">
                <input type="text" name="detail"  class="form-control" id="detail" />
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
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
            <?= $this->endSection()?> 