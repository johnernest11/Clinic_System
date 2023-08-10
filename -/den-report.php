<?php
include_once "sidebar1.php";
?>

  <!-- Begin Page Content -->
<div class="container-fluid">  
<main>
<head>          
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>     
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
</head>  
<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800"> <i class=" fas fa-search" aria-hidden="true"></i> DAILY, WEEKLY & MONTHLY REPORTS</h1>
<br>
<hr>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-body">
        <div class="table-responsive">
        <div class="row">
            <div class="col-6">
            </div>
            <div class="col-2">
            <form action="fpdf/Reports.php"  method='POST' target='_blank'>
                <input type="date" name="from_date" id="from_date" class="form-control" placeholder="From Date" /> 
            </div>
            <div class="col-2">
                 <input type="date" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
            </div>
            <div class="col-2">
                <a name="filter" id="filter" value="" class="btn btn-info btn-md"><i class=" fas fa-search" aria-hidden="true"></i> </a>
                <button type = 'submit' class='btn btn-dark-green btn-md' ><i class=" fas fa-print" aria-hidden="true"></i> </button> 
            </div>
        </form>
        </div>
            <table class="table table-striped  leaveSta " width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Course</th>
                        <th>Date Examined</th>
                        <th>Action</th>
                      
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Course</th>
                        <th>Date Examined</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody class=" output " id="order_table">
                </tbody>
            </table>
            <br>    
            </div>
        </div>
    </div>
<!-- /.container-fluid -->

<script>  
      $(document).ready(function(){     
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"assets/den_filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {   
            Swal.fire({
            position: 'bottom-end',
            icon: 'error',
            title: 'No Date Selected.',
            showConfirmButton: false,
            timer: 2500
            }).then(function() {   });  
                }  
           });  
      });  
 </script>
</main>






