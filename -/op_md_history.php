
<?php
include_once "sidebar1.php";
// include_once "../../modal/new_employee-modal.php";
?>

  <!-- Begin Page Content -->
<div class="container-fluid">
      
<main>
<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800"> <i class=" fas fa-search" aria-hidden="true"></i> SEARCH OUT PATIENT NAME</h1>

<hr>

<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <!-- <div class="card-header py-3 btn peach-primary btn-rounded">
        <h6 class="m-0 font-weight-bold text-primary">Registered Employees</h6>
    </div> -->
    <div class="card-body">
    <div class="table-responsive">
        <div class="row">
        <div class="col-3">
        </div>
        <div class="col-3">
        </div>
        <div class="col-3">
        </div>
        <div class="col-3">
        <h6>Out Patient Name.</h6>
    <input type="text" class="form-control" id="search">
        </div>
        </div>
        
            <table class="table table-striped  leaveSta " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Date Examined</th>
                        <th>Action</th>
                      
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Date Examined</th>
                        <th>Action</th>
                       
                    </tr>
                </tfoot>
                
      <tbody id="output">
                
                </tbody>
            </table>
            
            <br>    
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'assets/fetch_op.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>
</main>

