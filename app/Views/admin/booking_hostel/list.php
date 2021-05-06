<?= $this->extend('layout/main')?>
<?= $this->section('content')?>
<div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                <h4 class="card-title">Booking Hostel List</h4>
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
                        <th>Client Name</th>
                        <th>Hostel Type</th>  
                        <th>Member or Non member</th>
                        <th>Phone</th>  
                        <th>Email</th>                              
                        <th>Date</th>  
                        <th>Time</th>                       
                            <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
                        <th>#</th>
                        <th>Client Name</th>
                        <th>Hostel Type</th>  
                        <th>Member or Non member</th>
                        <th>Phone</th>  
                        <th>Email</th>                              
                        <th>Date</th>  
                        <th>Time</th>                       
                        <th class="text-right">Actions</th>
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($hostel as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['fname']. ' ' .$u['fname'] ?></td>
                                <td><?= $u['hostel_type'] ?></td>
                                <td><?= $u['member'] ?></td>
                                <td><?= $u['email'] ?></td>  
                                <td><?= $u['date'] ?></td>  
                                <td><?= $u['time'] ?></td>                                             
                                <td>
                                <a title="edit" href="" class="btn btn-link btn-warning btn-just-icon like"><i class="material-icons">edit</i></a>
                                <a title="delete" href="" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                                
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
          <?= $this->endSection()?> 