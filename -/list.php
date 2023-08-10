<?php
include_once "sidebar1.php";
?>

  <!-- Begin Page Content -->
<div class="container-fluid">
      
<main>
<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800"> <i class=" fas fa-search" aria-hidden="true"></i>SEARCH STUDENTS </h1>
<br>
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
            </div>
            <div class="col-2">
                <input type="text" class="form-control" id="search" name="search" placeholder=" Student ID No." data-inputmask="'mask': '999-9999-9'  ">
            </div>
            <div class="col-2">
                <a name="fetch" id="fetch" value="" class="btn btn-info btn-md"><i class=" fas fa-search" aria-hidden="true"></i> </a>
          </div>
        </div>
            <table class="table table-striped  leaveSta " width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody class=" output " id="output">
                </tbody>
            </table>
            <br>    
        </div>
        </div>
    </div>
</div>

<script>  
      $(document).ready(function(){  
           
           $('#fetch').click(function(){  
                var search = $('#search').val(); 
                if(search != '' )  
                {  
                     $.ajax({  
                          url:"assets/fetch.php",  
                          method:"POST",  
                          data:{search:search,},  
                          success:function(data)  
                          {  
                               $('#output').html(data);  
                          }  
                     });  
                }  
                else  
                {   
            Swal.fire({
            position: 'bottom-end',
            icon: 'error',
            title: 'No Id Selected.',
            showConfirmButton: false,
            timer: 2500
            }).then(function() {   });  
                }  
           });  
      });  
 </script>
</main>

