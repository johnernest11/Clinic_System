<!--SIDEBAR OF THE SYSTEM-->
<?php
include "sidebar1.php";
// include "assets/leave_query.php";
// include "assets/profile_query.php";
?>
<main>
<!-- Begin Page Content -->
<div class="card card-cascade narrower">
<div class="col-lg-12"  id="Pall">
<!-- NAVIGATION TAB LIST-->
 

<br>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-link waves-light active waves-effect waves-light" id="nav-pending-tab" data-toggle="tab" href="#nav-pending" role="tab" aria-controls="nav-pending" aria-selected="true">MEDICAL HISTORY TODAY</a>
            <div  class="col-md-12 text-right">
                <p class=" font-weight-bold dark-grey-text text-end">OUT PATIENT HISTORY</p>
            </div>
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
<!--PENDING REQUEST NAVIGATION TAB-->

<div class="row">
<div class="col-6">
<div class="card">
    <div class="card-body">
    <div class="table-responsive ">
    <h6 class="h3 mb-2 text-gray-800"> <i class=" fas fa-user" aria-hidden="true"></i> ONGOING </h6>
    <br>
            <table class="table table-striped  leaveSta sm " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID NO.</th>
                        <th>FULLNAME</th>
                        <th>COURSE</th>
                        <th>REMARKS</th>
                        <th></th>
                      
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>ID NO.</th>
                        <th>FULLNAME</th>
                        <th>COURSE</th>
                        <th>REMARKS</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "assets/connection_clinic.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM out_patient_profile as op INNER JOIN physical_examination as pe
                    ON op.op_id = pe.op_id WHERE pe.Status ='ONGOING'AND pe.date_examined =DATE(NOW())");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                      echo '<tr>    
                                    <td>'.$result["op_id"].'</td>
                                    <td>'.$result["firstname"].' '.$result["middlename"].'. ' .$result["lastname"].'</td>
                                    <td>'.$result["coursedepartment"].'</td>
                                    <td class="red-text"><b>'.$result["Status"].'</b></td>
                                    <td>
                                    <form action="op_medicall.php" method="POST">
                                    <input type="hidden" value="'.$result["pe_id"].'" name="Pe_No"/>
                                    <button type = "submit" class="btn btn-primary btn-sm "><span class ="fa fa-file-medical"> Medical </button> 
                                    </form>
                                    </td>
                            </tr>';
                    }
                    ob_end_flush();
                    ?>
                </tbody>
            </table>
            
            <br>    
        </div>
    </div>
</div>
</div>

<!-- APPROVED RECORDS THIS DAY -->
<div class="col-6">
<div class="card">
    <div class="card-body">
    <div class="table-responsive">
    <h6 class="h3 mb-2 text-gray-800"> <i class=" fas fa-user" aria-hidden="true"></i> COMPLETED </h6>
    <br>
            <table class="table table-striped  leaveSta " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID NO.</th>
                        <th>FULLNAME</th>
                        <th>COURSE</th>
                        <th>REMARKS</th>
                        <th></th>
                      
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>ID NO.</th>
                        <th>FULLNAME</th>
                        <th>COURSE</th>
                        <th>REMARKS</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "assets/connection_clinic.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM out_patient_profile as op INNER JOIN physical_examination as pe
                    ON op.op_id = pe.op_id WHERE pe.Status ='COMPLETED' AND pe.date_examined =DATE(NOW())");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                      echo '<tr>    
                                    <td>'.$result["pe_id"].'</td>
                                    <td>'.$result["firstname"].' '.$result["middlename"].'. ' .$result["lastname"].'</td>
                                    <td>'.$result["coursedepartment"].'</td>
                                    <td class="green-text"><b>'.$result["Status"].'</b></td>
                                    <td>
                                     <form action="op_medicall.php" method="POST">
                                    <input type="hidden" value="'.$result["pe_id"].'" name="Pe_No"/>
                                    <button type = "submit" class="btn btn-dark-primary btn-md" ><i class="fas fa-file-medical"></i> Medical</i> </button> 
                                    </form>
                                    </td>
                            </tr>';
                    }
                    ob_end_flush();
                    ?>
                </tbody>
            </table>
            
            <br>    
        </div>
    </div>
</div>
</div>
</div>




</div>
</div>

<script>


        $(document).ready(function() {
    var table = $('table.leaveSta').DataTable();
 
    $('table.leaveSta tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );

</script>
</main>
   
