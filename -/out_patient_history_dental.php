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
        <a class="nav-link waves-light active waves-effect waves-light" id="nav-dean-tab" data-toggle="tab" href="#nav-dean" role="tab" aria-controls="nav-dean" aria-selected="false">DENTAL</a>
            <div  class="col-md-12 text-right">
                <p class=" font-weight-bold dark-grey-text text-end">OUT PATIENT HISTORY</p>
            </div>
    </div>
</nav>



<!--DEA/HEAD APPROVAL NAVIGATION TAB-->
<div class="tab-pane fade show active" id="nav-dean" role="tabpanel" aria-labelledby="nav-dean-tab">
            <label for="validationCustom01"><strong> DENTAL</strong></label>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped  leaveSta1 " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>DATE FILE</th>
                        <th>TYPE</th>
                        <th>DATE</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>DATE FILE</th>
                        <th>TYPE</th>
                        <th>DATE</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    ob_start();
                    include_once "assets/connection_clinic.php";
                    $conn = dbConnect();
                    $account = $conn->prepare("SELECT * FROM out_patient_profile as op INNER JOIN dental_examination as de
                    ON op.op_id = de.op_id");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                      echo '<tr>    
                                    <td>'.$result["op_id"].'</td>
                                    <td>'.$result["firstname"].' '.$result["middlename"].'. ' .$result["lastname"].'</td>
                                    <td>'.$result["Date_Oral"].'</td>
                                    <td>
                                    <a href="out_patient_dentall.php?edit='.$result["op_id"].'"class="btn btn-success btn-sm "><span class ="fa fa-eye"> View</a>
                                    </td>
                            </tr>';
                    }
                    ob_end_flush();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <hr>
</div>
</div>

<script>


$(document).ready(function() {
    var table = $('table.leaveSta1').DataTable();
 
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
   
