<?php
include_once "sidebar1.php";
?>
  <!-- Begin Page Content -->
<div class="container-fluid">
      
<main>
<br>
<h1 class="h3 mb-2 text-gray-800"> <i class=" fas fa-user" aria-hidden="true"></i> MEDICAL HISTORY THIS DAY </h1>
<br>
<hr>
<br>
<!-- PENDING RECORDS THIS DAY -->
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
                include_once "assets/connection_multi.php";
                $conn = dbConnectMulti();
                $account = $conn->prepare("SELECT sp.*,co.*,c.*,pe.* FROM mluc_sris.student_profile as sp 
                INNER JOIN mluc_sris.courses as co ON co.course_no = sp.course_no
                INNER JOIN clinic.physical_examination as pe ON sp.id_no =pe.id_no
                INNER JOIN clinic.past_medical_history as c ON c.mh_id = pe.mh_id
                WHERE pe.Status ='ONGOING' AND pe.date_examined =DATE(NOW())");
                $account->execute();
                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                    echo '<tr>    
                                <td>'.$result["id_no"].'</td>
                                <td>'.$result["first_name"].' '.$result["mid_name"].' '.$result["last_name"].'</td>
                                <td>'.$result["course_name"].'</td>
                                <td class="red-text"><b>'.$result["Status"].'</b></td>
                                <td> 
                                <form action="medical_profilee.php" method="POST">
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
                    include_once "assets/connection_multi.php";
                    $conn = dbConnectMulti();
                    $account = $conn->prepare("SELECT sp.*,co.*,c.*,pe.* FROM mluc_sris.student_profile as sp 
                    INNER JOIN mluc_sris.courses as co ON co.course_no = sp.course_no
                    INNER JOIN clinic.physical_examination as pe ON sp.id_no =pe.id_no
                    INNER JOIN clinic.past_medical_history as c ON c.mh_id = pe.mh_id
                    WHERE pe.Status ='COMPLETED'AND pe.date_examined =DATE(NOW())");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                      echo '<tr>    
                                    <td>'.$result["id_no"].'</td>
                                    <td>'.$result["first_name"].' '.$result["mid_name"].' '.$result["last_name"].'</td>
                                    <td>'.$result["course_name"].'</td>
                                    <td class="green-text"><b>'.$result["Status"].'</b></td>
                                    <td> 
                                    <form action="medical_profilee.php" method="POST">
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
<!-- /.container-fluid -->

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
} );
</script>
</main>
