<?= $this->extend('layout/main')?>
<?= $this->section('content')?>

<style>
    .price{
        text-decoration: underline;
        background-size: ; 
        background-blend-mode: lighten;
        color: red ;
    }
    .price:hover {
        background-color: #007bff;
}
</style>

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
                        <th class="disabled-sorting text-right">Payment</th>
                        <th>Total Price</th>  
                        <th>Number</th>             
                        <th>Vendor Name</th>
                        <th>Category</th> 
                        <th>Cat Service</th>  
                        <th>Service</th>    
                   
                      
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
                        <th class="text-right">Payment</th> 
                        <th>Total Price</th>  
                        <th>Number</th>           
                        <th>Vendor Name</th>
                        <th>Category</th> 
                        <th>Cat Service</th>  
                        <th>Service</th>  
                     
                    
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($booking_list as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['event_location'] ?></td>
                                <td><?= $u['fname']. ' ' .$u['lname'] ?></td> 
                                <td><?php if($u['event_type'] == '1'){echo 'Naming Ceremony';}
                                    elseif($u['event_type'] == '2'){echo 'Graduation';} 
                                    elseif($u['event_type'] == '3'){echo 'Wedding';}
                                    elseif($u['event_type'] == '4'){echo 'Funeral';}
                                    elseif($u['event_type'] == '5'){echo 'Camp';} 
                                    elseif($u['event_type'] == '6'){echo 'Other';}   ?></td>            
                                <td><?= $u['pickup_date'] ?></td>
                                <td><?= $u['drop_off'] ?></td>
                                <td>
                                <?php if ($u['payment_status']=='0'){ ?>
                                    <a   data-toggle="modal"
                                        data-target="#paymentConfirm<?= $u['id'] ?>" class="theme-btn theme-btn-small"><span class="font-size-12 badge badge-primary">Payment</span></a>
                                            <?php } ?>
                                            <?php if($u['payment_status'] =='1'){ ?>
                                                <label class="text-success p-1 border border-success rounded">Completed</label>
                                            <?php }?>
                                </td>
                                <td class="price" > Gh¢.<?= $u['total_price'] ?>.00 </td> 
                                <td><?= $u['number_room'] ?></td>                             
                                <td><?= get_column_name_by_id('setting_vendor', $u['vendor_id'], 'company_name') ?></td>
                                <td><?= get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') ?></td>
                                <td><?= get_column_name_by_id('sub_category_service_tbl', $u['cat_service_id'], 'sub_cat_name') ?></td>
                                <td><?= get_column_name_by_id('service_tbl', $u['service_id'], 'service_name') ?></td>                         
                            </tr>
                            <div class="modal-popup">
        <div class="modal fade" id="paymentConfirm<?= $u['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title title" id="exampleModalLongTitle2">Payment Detail</h5>
                            <p class="font-size-14"></p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <?php if (isset($validation)): ?>
                    <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <label style="margin-left: -40px;margin-bottom: -30px;"><strong><?= $validation->listErrors() ?></strong></label>
                    </div>
                    <?php endif; ?>
                    <form  method="POST" action="/approved/payment_confirm/<?= $u['id'] ?>" class="mb-4">
                    <button type="submit" class="btn btn-primary text-center w-100"><strong><?= 'Confirm' ?></strong></button>
                    </form>

                    </div>
                    </div>
                </div>
            </div>
        </div>
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
    </div><!-- end modal-popup -->


          <?= $this->endSection()?> 