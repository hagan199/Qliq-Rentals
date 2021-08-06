<?= $this->extend('layout/main')?>
<?= $this->section('content')?>



    <div class="tab-content" id="v-pills-tabContent">             
        <!------Service list---->
    <div class="tab-pane fade <?php if(!isset($service))echo 'show active'; ?>" id="list" role="tabpanel" aria-labelledby="list-tab"> 
            <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                <h4 class="card-title"><?= $title ?>  </h4>
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
                            <th>Confirm Date</th>     
                            <th>Status</th>                                     
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
                            <th>#</th>
                            <th>Confirm Date</th>     
                            <th>Status</th>   
                                                                                                                 
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($payment as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $u['date']. '-' .$u['time']  ?></td>
                             
                                <td>
                                <?php if ($u['payment_status']=='1'){ ?>
                                                <a  title="Submit First SMS" href="" class="btn btn-sm btn-outline-green">
                                                    <i class="material-icons">Paid</i>
                                                </a>
                                            <?php } ?>
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
            

</div>
            <?= $this->endSection()?> 