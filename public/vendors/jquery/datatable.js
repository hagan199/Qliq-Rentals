<!---Datatable---->
<script>     
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

      md.initVectorMap();

      console.log($().jquery); 
      // console.log(appj().jquery);
    });
    
      $(document).ready(function() {
        $('.scroll-table').DataTable({
        "pagingType": "full_numbers",
            "bFilter": true,        
            "pageLength": 25,
            "lengthMenu": [
              [10, 25, 50, -1],
              [10, 25, 50, "All"]
            ],
            
            responsive: true,
            language: {
              search: "_INPUT_",
              searchPlaceholder: "Search records",
            },
            scrollY:  "400px",
            scrollCollapse: true,
        });
        var exportBtnOptions = {
            exportOptions: {
                columns: ':visible',
            },
          };
        $('#datatables').DataTable({
          
            "pagingType": "full_numbers",
            "bFilter": true, 
            dom: 'Bfrtip',       
            "pageLength": 25,
            "lengthMenu": [
              [10, 25, 50, -1],
              [10, 25, 50, "All"]
            ],
            buttons: [
            
              $.extend( true, {}, exportBtnOptions, {
                  extend: 'print',
                  title: 'GNAT',
              } ),
              'colvis'
          ],
            responsive: true,
            language: {
              search: "_INPUT_",
              searchPlaceholder: "Search records",
            },
            scrollX:        true,
            scrollCollapse: true,
        });
      

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
