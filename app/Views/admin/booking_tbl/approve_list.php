<?= $this->extend('layout/main')?>
<?= $this->section('content')?>



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
                        <th>Vendor Name</th>
                        <th>Approved Date</th> 
                        <th>Cat Service</th>  
                        <th>Total Price</th>    
                        <th>Confirm Payment</th>  
                        <th class="text-right">Actions</th>
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
                        <th>Vendor Name</th>
                        <th>Approved Date</th> 
                        <th>Cat Service</th>  
                        <th>Total Price</th>    
                        <th>Confirm Payment</th>    
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
                                <td><?= get_column_name_by_id('setting_vendor', $u['vendor_id'], 'company_name') ?></td>
                                <td><?= get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') ?></td>
                                <td><?= get_column_name_by_id('sub_category_service_tbl', $u['cat_service_id'], 'sub_cat_name') ?></td>
                                <td><?= get_column_name_by_id('service_tbl', $u['service_id'], 'service_name') ?></td>   
                                <td><a href="" <?php echo $u['status']==='1'?'class="btn btn-sm btn-outline-success disabled"':'class="btn btn-sm btn-danger"'; ?> title="Confirm 1st Payment"><i class="fa fa-money"></i></a>|
                                    <a href="" <?php echo $u['status']==='1'?'class="btn btn-sm btn-outline-success disabled"':'class="btn btn-sm btn-outline-primary"'; ?> title="Confirm 2nd Payment"><i <?php echo $u['status'] === '1'?'class="fa fa-check"':'class="fa fa-money"';?>></i>
                                </a></td>       
                                <td>
                                <td><?= $u['total_price'] ?></td> 
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

          <?= $this->endSection()?> 