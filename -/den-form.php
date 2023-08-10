
<?php
include "sidebar1.php";
include "assets/dental_profile_query.php";
?>
<main>
    <style type="text/css">
      #logo {
  position: absolute;
  left: 150px;
  top: 60px;
  z-index: 1;
}
    </style>
<!-- Begin Page Content -->
<div class="row ">
      <!-- Page Heading -->
      
      <br>
      <hr>
            <div class="card card-cascade narrower col-lg-8">
              <div class="card-body card-body-cascade ">
                <form method="POST">

                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    
                <img src="../PICTURE/DMMMSULogo.png" id="logo" width="150" height="80">

                  <center> <p> <br>
                  <h4><b>ORAL EXAMINATION FORM</b></h4></center>
                  <br>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <br>
                    <br>
                    <div class="form-row">
                    
                             <input type="hidden"  class="form-control" id="validationCustom01" name="id_no" value="<?php echo$id_no;?>" >
                             <div class="col-md-1">
                                <h6><b>Name:</b></h6>
                            </div>
                            <div class="col-md-3">
                                <h6><b><?php echo$last_name;?></b></h6><hr>
                                <label for="validationDefault01" class="form-label">Surname</label>
                            </div>
                            <div class="col-md-3">
                                <h6><b><?php echo$first_name;?></b></h6><hr>
                                <label for="validationDefault02" class="form-label">First Name</label>
                            </div>
                            <div class="col-md-3">
                                <h6><b><?php echo$mid_name;?></b></b></h6><hr>
                                <label for="validationDefault01" class="form-label">Middle Initial</label>
                                
                            </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4">
                            <h6>Date of Birth: <b><?php echo$date_birth;?></b></b></h6><hr>
                        </div>
                        <div class="col-md-4">
                            <h6>Age: <b><?php echo date_diff(date_create($date_birth), date_create('today'))->y;?></b></h6><hr>
                        </div>
                        <div class="col-md-4">
                            <h6>Gender: <b><?php echo$sex;?></b></b></h6><hr>   
                        </div>
                        </div>

                    <div class="form-row">
                            <div class="col-md-6">
                                <h6>Course/Occupation: <b><?php echo$course_name;?> </b></b></h6><hr>
                                
                            </div>
                            <div class="col-md-6">
                                <h6>Civil Status: <b><?php echo$civil_status;?></b><hr></h6>
                            </div>
                            
                    </div>
                        <div class="form-row">
                             <div class="col-md-6">
                                <h6>Address: <b><?php echo$barangay;?>, <?php echo$town;?> <?php echo$province;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                                <h6>Contact Number: <b><?php echo$tel_no;?></b></h6><hr>
                            </div>
                    </div>
                    <div class="form-row">
                             <div class="col-md-6">
                                <h6>Name of Parent/ Guardian for minor: <b><?php echo$guid_name;?></b></h6><hr>
                            </div>
                            <div class="col-md-6">
                                 <h6>Contact Number: <b><?php echo$guid_tel_no;?></b></h6><hr>
                            </div>
                    </div>
                    <br>
                    <h5><b>INTRAORAL EXAMINATION</b></h5><br> 
                    <div class="form-row">
                        <div class="col-2">

                        </div>
                        <div class="col-8">
                        <img src="../PICTURE/intraoral.png"  width="100%" height="auto" class="responsive">
                        </div>
                    </div> 
                    <br>
                    <div class="form-row">
                        <div class="col-3">
                        <a><b>Legend:</b></a><br> 
                        <a><b>V</b>-caries free</a><br> 
                        <a><b>D</b>-caries indicate for filling</a><br> 
                        <a><b>I</b>-caries indicated for extraction</a><br> 
                        </div>
                        <div class="col-3">
                        <a><b></b></a><br> 
                        <a><b>Condition:</b></a><br> 
                        <a><b>RF</b>-Root fragment</a><br> 
                        <a><b>X</b>-Extracted due to caries</a><br> 
                        <a><b>XO</b>-Extracted due to other cause</a><br> 
                        <a><b>M</b>-Missing tooth</a><br> 
                        <a><b>AF</b>-Amalgam filled</a><br> 
                        <a><b>LCF</b>-Light cure composite filled</a><br> 
                        <a><b>TF</b>-Transient/temporary filled</a><br> 
                        <a><b>U</b>-Unerupted</a><br> 
                        </div>
                        <div class="col-3">
                        <a><b></b></a><br> 
                        <a><b>S</b>-Sealant filled</a><br> 
                        <a><b>St</b>-Supernumerary </a><br> 
                        </div>
                        <div class="col-3">
                        <a><b></b></a><br> 
                        <a><b>Prosthetics:</b></a><br> 
                        <a>G<b>-Gold crown</b></a><br> 
                        <a>J<b>-Jacket crown</b></a><br> 
                        <a>V<b>-Veneer</b></a><br> 
                        <a>AB<b>-Abutment</b></a><br> 
                        <a>P<b>-Pontic</b></a><br>
                        <a>FX<b>-Fixed bridge</b></a><br> 
                        <a>FD<b>-Full denture</b></a><br> 
                        <a>RPD<b>-Removable partial denture</b></a><br>  
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-3">
                        <fieldset class="form-check">
                        <a><b>Condition:</b></a><br>
                            <input class="form-check-input" type="checkbox" id="Gingivitis" name="Gingivitis" value="Yes"  >
                            <label class="form-check-label" for="Gingivitis"><h6><b>Gingivitis</b> </h6></label>
                        </fieldset>
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Early_Periodontitis" name="Early_Periodontitis" value="Yes"  >
                            <label class="form-check-label" for="Early_Periodontitis"><h6><b>Early Periodontitis</b> </h6></label>
                        </fieldset> 
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Moderate_Periodontitis" name="Moderate_Periodontitis" value="Yes"  >
                            <label class="form-check-label" for="Moderate_Periodontitis"><h6><b>Moderate Periodontitis</b> </h6></label>
                        </fieldset>
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Advance_Periodontitis" name="Advance_Periodontitis" value="Yes"  >
                            <label class="form-check-label" for="Advance_Periodontitis"><h6><b>Advance Periodontitis</b> </h6></label>
                        </fieldset>
                        </div>
                        <div class="col-3">
                        <fieldset class="form-check">
                        <a><b>Occlusion:</b></a><br>
                            <input class="form-check-input" type="checkbox" id="Class_Molar" name="Class_Molar" value="Yes"  >
                            <label class="form-check-label" for="Class_Molar"><h6><b>Class (Molar)</b> </h6></label>
                        </fieldset>
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Overjet" name="Overjet" value="Yes"  >
                            <label class="form-check-label" for="Overjet"><h6><b>Overjet</b> </h6></label>
                        </fieldset> 
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Overbite" name="Overbite" value="Yes"  >
                            <label class="form-check-label" for="Overbite"><h6><b>Overbite</b> </h6></label>
                        </fieldset>
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Midline_Deviation" name="Midline_Deviation" value="Yes"  >
                            <label class="form-check-label" for="Midline_Deviation"><h6><b>Midline Deviation</b> </h6></label>
                        </fieldset>
                        </div>
                        <div class="col-3">
                        <fieldset class="form-check">
                        <a><b>Occlusion:</b></a><br>
                            <input class="form-check-input" type="checkbox" id="Orthodontic" name="Orthodontic" value="Yes"  >
                            <label class="form-check-label" for="Orthodontic"><h6><b>Orthodontic</b> </h6></label>
                        </fieldset>
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Stayplate" name="Stayplate" value="Yes"  >
                            <label class="form-check-label" for="Stayplate"><h6><b>Stayplate</b> </h6></label>
                        </fieldset> 
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Others" name="Others" value="Yes"  >
                            <label class="form-check-label" for="Others"><h6><b>Others (Specify)</b> </h6></label>
                        </fieldset>
                        <fieldset class="form-check">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="Others_Specify" name="Others_Specify"  class="form-control"  value="">
                        </fieldset>
                        </div>
                        <div class="col-3">
                        <fieldset class="form-check">
                        <a><b>Occlusion:</b></a><br>
                            <input class="form-check-input" type="checkbox" id="Clenching" name="Clenching" value="Yes"  >
                            <label class="form-check-label" for="Clenching"><h6><b>Clenching</b> </h6></label>
                        </fieldset>
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Clicking" name="Clicking" value="Yes"  >
                            <label class="form-check-label" for="Clicking"><h6><b>Clicking</b> </h6></label>
                        </fieldset> 
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Trismus" name="Trismus" value="Yes"  >
                            <label class="form-check-label" for="Trismus"><h6><b>Trismus</b> </h6></label>
                        </fieldset>
                        <fieldset class="form-check">
                            <input class="form-check-input" type="checkbox" id="Muscle_Spasm" name="Muscle_Spasm" value="Yes"  >
                            <label class="form-check-label" for="Muscle_Spasm"><h6><b>Muscle Spasm</b> </h6></label>
                        </fieldset>
                        </div>
                    </div>
                    
                    
                    
                    
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">   
                    <div class="form-row">
                    <div class="col-lg-12">
                    <br>
                    <div class="input-group">  
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Remarks:</b></h6> </label>
                            </fieldset>   
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="Remarks" name="Remarks"  class="form-control" value="">
                            </div>
                                <br>
                                <br>
                            <fieldset class="form-check">
                            <label class="form-check-label" for="Vacation"><h6><b>Date of Oral Examination: <?php echo date("m-d-Y");?></b></h6> </label>
                            </fieldset> 
                            
                    

                       
                    </div>
                    
                           
                            
                            <input type="hidden" class="form-control" id="validationDefault03" name="leave_reco_head" value="Pending" required>
                            <input type="hidden" class="form-control" id="validationDefault03" name="month_date" value="<?php echo date("F")?>" required>
                    </div>
                    <div class="form-row">
                    <div class="col-lg-6 ">
                    </div>

                    <div class="col-lg-6 ">
                    <br>
                    <br>
                                
                    <br><h5 class="text-center"><b><u> <?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['middlename'] ?> <?php echo $_SESSION['lastname'] ?> </u></b></h5>
                                <h6 class="text-center" ><b>MEDICAL OFFICER</b></h6>
                            
                            <input type="hidden" class="form-control" id="validationDefault03" name="leave_recommendation" value="Pending" required>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 mb-6">
            
                            <input type="hidden" class="form-control" id="validationDefault03" name="leave_status" value="Pending" required>
                    </div>

                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="row" >
                            <div class="col-6">
                            <p>DMMMSU-MDS-F003</p>
                            <p>Rev No. 00 (07.15.2020)</p>
                            </div>
                            <div class="col-6 text-right">
<!-- IF NURSE SUBMIT BUTTON WILL NOT SHOW -->
<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#confirmModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Submit
                    </a>      
                     </div>
                    </div>
                   <!-- MODAL FORM CONFIRMATION -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Yes" below if you are ready to submit .</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">No</button>
                     <button type="submit" class="btn btn-primary"  name="dentalSubmit"  > Submit</button>
                </div>
            </div>
        </div>
    </div>
                </form>
            </div>
        </div>
        <br>


        <div class="card-cascade narrower col-lg-4">
            <div class="tab-content" id="nav-tabContent">
    <!--PENDING REQUEST NAVIGATION TAB-->
    <div >
      <h3 ><b><center>Medical History</center></b></h3>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped  leaveSta " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                         <th></th>
                    </tr>
                </tfoot>
                <tbody>  <?php
                    ob_start();
                    include_once "assets/connection_clinic.php";
                    $conn = dbConnecttt();
                    $Id = $_POST['Id_No'];
                    $account = $conn->prepare("SELECT * FROM dental_examination WHERE id_no ='$Id' ");
                    $account->execute();
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){
                      echo '<tr>    
                                    <td>'.$result["date_examined"].'</td>
                                    <td class="text-center"> 
                                    <form action="dental_profilee.php" method="POST">
                                    <input type="hidden" value="'.$result["dd_id"].'" name="dd_id"/>
                                    <button type = "submit" class="btn btn-dark-primary btn-sm" ><i class=" fas fa-record" aria-hidden="true"> View</i> </button> 
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
        <br>
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
   

