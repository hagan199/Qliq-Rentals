<?= $this->extend('layout/main')?>
<?= $this->section('content')?>


        <div class="tab-content" id="v-pills-tabContent">    
            <!-------------USER lIST------------------>
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
                            <th>Full Name</th>                    
                            <th>Email </th> 
                            <th>Phone </th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Approved Request</th> 
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>  
                            <th>#</th>
                            <th>First Name</th>                       
                            <th>Email </th> 
                            <th>Phone </th>
                            <th>Location</th> 
                            <th>Date</th> 
                            <th>Approved Request</th>           
                        </tr>
                    </tfoot>
                        <tbody>
                            <?php $i=1; foreach($sign_up_request as $u){ ?>
                            <tr>
                                <td><?= $i++?></td>                       
                                <td><?= $u['fname']. ' ' .$u['lname']  ?></td>
                                <td><?= $u['email']  ?></td>
                                <td><?= $u['phone']  ?></td>
                                <td><?= $u['location']  ?></td>
                                <td><?= $u['date']. ':' .$u['time']  ?></td>
                                <td>
                                        <label class="text-success p-1 border border-success rounded">Approved</label>
                                </td>
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
           